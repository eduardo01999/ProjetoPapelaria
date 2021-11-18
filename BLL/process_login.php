<?php
session_start();
include('conecta.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../GUI/loginPapelaria.php');
    exit();
}

$email=$_POST['email'];
$senha=$_POST['senha'];

try {
    $stmt = $conn->prepare("SELECT id, email, senha FROM usuariospapelaria WHERE email='{$email}' and senha='{$senha}'"); 
    $stmt->execute();
    if ($stmt->rowCount()) {  
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        foreach($stmt->fetchAll() as $k=>$v) { 
            $id = $v["id"];
        }
        $SESSION['email']=$email;
        header("Location: ../GUI/homePapelaria.php?id=$id");
        exit();
    }
    else {
        header('Location: ../GUI/loginPapelaria.php');
        exit();
    }
}   catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
/*
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
*/
?>