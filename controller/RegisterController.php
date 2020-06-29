
<?php
session_start();


// tenta se conectar.
$con = mysqli_connect('localhost', 'login', 'password', 'database');

if ( mysqli_connect_errno() )
{
	// Se erro, mostra erro.
	exit('Falhou a conexão com o MySQL: ' . mysqli_connect_error());
}

//keys abaixo
if ( !isset($_POST['user'], $_POST['password']) )
 {
	  // Caso não receba as keys
	  exit('Favor digitar usuario e senha');
  }
else
{
    $username = $_POST['user'];
    $password = $_POST['password'];
}

$sql = "INSERT INTO users (user, password) VALUES ('$username','$password')";

if ($con->query($sql) === TRUE)
  {
    echo "Novo Usuario cadastrado com sucesso!";
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>

