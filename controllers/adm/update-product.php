<?php
    include_once("../../database/connection.php");


    $product_id = $_POST["id"];
    $product_title = $_POST["product-title"];
    $product_desc = $_POST["product-desc"];

   
    if($_FILES["product_img"]["name"] != ""){
    
    $target_dir = "C:/xampp/htdocs/trombinis_park/img/products/";
    $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
    $server = $target_file; 
    
    $path = "http://localhost/trombinis_park/img/products/" . basename($_FILES["product_img"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image

      $check = getimagesize($_FILES["product_img"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
   
    
    // Se já existe, apagar
    if (file_exists($target_file)) {
        unlink($target_file);
    }
   
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Apenas JPG, JPEG, PNG e GIF são permitidos.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["product_img"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    
    $query = "update products set title = '$product_title', description = '$product_desc', img = '$path', server_img = '$server' where id = $product_id";
    mysqli_query($connection, $query);   


    }
    else{
        //se a imagem não for trocada
        $query = "update products set title = '$product_title', description = '$product_desc' where id = $product_id";
        mysqli_query($connection, $query);   
    }
    header("Location: http://localhost/trombinis_park/src/pages/adm/brinquedos.php");

    mysqli_close($connection);