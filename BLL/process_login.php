<?php
session_start();
include('conecta.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../GUI/loginPapelaria.php');
    exit();
}

$email=$_POST['email'];
$senha=$_POST['senha'];

$query = "SELECT id, email, senha FROM usuariospapelaria WHERE email='{$email}' and senha='{$senha}'";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);


        if($row==1) {
            $SESSION['email']=$email;
            header('Location: ../GUI/homePapelaria.php');
            exit();
        }
        else {
            header('Location: ../GUI/loginPapelaria.php');
            exit();
        }
?>