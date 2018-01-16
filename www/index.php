<?php require_once('includes/get_data.php'); ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once('blocks/head.php'); ?>
<body>
  <!-- Google Tag Manager (noscript) -->

  <!-- End Google Tag Manager (noscript) -->

  <div id="loader">
    <div class="progress">
      <div class="indeterminate"></div>
    </div>
    <p>
      Loading ...
    </p>
  </div>
  
  <?php require_once('blocks/header.php'); ?>
  <?php if(!isset($_REQUEST['content'])){
    require_once('blocks/home.php');
  }elseif($_REQUEST['content']=='gracias'){
    require_once('blocks/gracias.php');
  }else{
    require_once('blocks/404.php');
  } 
  ?>
  <?php require_once('blocks/footer.php'); ?>
  <!-- All js -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
