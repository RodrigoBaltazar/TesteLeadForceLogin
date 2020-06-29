<?php
   include('../controller/LoginController.php');
?>

<html>
   
   <head>
      <title>DashBoard </title>
   </head>
   
   <body>
      <h1>Bem-vindo <?php echo $_SESSION['login_user']; ?></h1> 
      <h2><a href = "../controller/LogoutController.php">Deslogar</a></h2>
   </body>
   
</html>