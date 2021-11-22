<?php
   

    include_once("../../database/connection.php");

    

    $title = $_POST["product-title"];
    $desc = $_POST["product-desc"];
   
        //print_r($_FILES);
        //echo $_FILES["product_img"]["name"];
        //echo basename($_FILES["product_img"]["name"]);die;
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
        


  
    $query = "insert into products(title, description, img, server_img, views)
                            values('$title', '$desc', '$path', '$server', 0)";

    $result = mysqli_query($connection, $query);

    if ($result){
        $response = array("message" => "Produto cadastrado com sucesso!");
        echo json_encode($response);
        header("Location: http://localhost/trombinis_park/src/pages/adm/brinquedos.php");
    } else {
        die("Ops, ocorreu um erro: " . mysqli_error($connection));
    }

    mysqli_close($connection);