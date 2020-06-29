<?php

session_start();


$username = $password = "";

$link = mysqli_connect('localhost', 'login', 'password', 'database');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $username = $_POST['user'];
    $password = $_POST['password'];

    
    $sql = "SELECT id FROM users WHERE user = '$username' and password = '$password'";
    $result = mysqli_query($link,$sql);
    $linha_da_tabela = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $ativo = $linha_da_tabela['active'];

    $count = mysqli_num_rows($result);

    // Se o resultado encontrar o contador deve ser 1
    if($count == 1)
    {
        $_SESSION['login_user'] = $username;
        header("Location: ../view/dashboard.php");
    }
    else
    {
        echo $error = "Usuario ou Senha invalidos";
    }
}

mysqli_close($link);
?>
