<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


session_start();

spl_autoload_register(function($clase){
    require "./class/$clase.php";
});


$error ="";
$msj= $_GET['msj']??"";
if (isset($_POST['submit'])){
    $bd = new DB();
    $name = $_POST['name'];
    $pass = $_POST['password'];
    if ($bd->valida_usuario()){
        $_SESSION['user']=$name;
        header("Location:productos.php");
        exit();
    }else
        $msj="Datos de conexión incorrectos";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<form action="index.php" method="post">
    <fieldset>
        <span class="error"><?=$error?></span>
        <legend>Datos de acceso</legend>
        <label for="usuario">Nombre de usuario</label> <input type="text" name="name" id=""><br />
        <label for="password">Password</label> <input type="text" name="pass" id=""><br />
        <input type="submit" value="Acceder" name="submit">
    </fieldset>
</form>
</body>
</html>
