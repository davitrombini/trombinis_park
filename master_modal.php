<!-- criar modais dinamicamente usando texto vindo via POST -->

<?php
$text = $_POST['text'];
$rand = rand(0, 9999);

echo "
<script>
    $(function () {
      $('.ui.modal.edit.$rand').modal('show');


       $('.fecha').click(function () { 
        $('.ui.modal.edit.$rand').modal('hide');   
        $( '.ui.modal.edit.$rand' ).remove(); 
         
        
      });
    });
</script>

<div class='ui tiny modal edit $rand'>

  <div class='header'>Mensagem</div>
  <div class='content'>
    <p>
      $text
    </p>
    
  </div>
  <div class='actions'>
 
  <div class='ui blue icon button fecha'>
    <i class='check icon'></i>
    Ok
  </div>
  </div>
</div>
";