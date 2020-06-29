<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!-- Carrega CSS -->
  <link rel="stylesheet" href="../public/css/signup.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Carrega JS -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
 
</head>
<body>
 <div class="container">
    <br>
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form class="form-signin" action="../controller/LoginController.php" name="create-user" id="user_create" method="post" accept-charset="utf-8">
          <h1 class="h3 mb-3 font-weight-normal">Login</h1>
          <label for="user" class="sr-only">Usuario</label>
          <input type="text" name="user" id="input" class="form-control" placeholder="Usuario" required autofocus>
          <label for="password" class="sr-only">Senha</label>
          <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <a href="index.php">cadastrar-se</a>
          <p class="mt-5 mb-3 text-muted">&copy; Rodrigo Baltazar</p>
        </form>
      </div>
    </div>
</div>
</script>
</body>
</html>