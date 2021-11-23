<?php
session_start();
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" >
    <script src="https://kit.fontawesome.com/61f3f3e294.js" crossorigin="anonymous"></script>
    <title>Home Papelaria</title>
    <style>
                table{
                    border: 3px solid black;
                    border-collapse: collapse;
                    }

                table {
                    width: 65%;
                    margin: auto;
                    margin-bottom: 10px;
                    }
            </style>
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            <div class="col-12 col-sm-2">
                <img src="./img/logo.png" alt="logoApp" display= block width= 200px height= 100px>
            </div>
            <div class="col-12 col-sm-8">
                <h1 class="text-center">LISTA <br> DE <br> CLIENTES</h1>
            </div>
            <div class="col-12 col-sm-2">
                <img src="./img/logo.png" alt="logoApp" display= block width= 200px height= 100px>
                <br>
                <a href='loginPapelaria.php'><i class="fas fa-sign-out-alt"></i><br>Sair</a>
            </div>
        </header>
        <div class="container">
        <main class="row">
            <div class="col align-self-center">
            </div>
        </div>
            <div class="container">
            <div class="row">
                <div class="col align-self-center">
              <span class="border border-light">
              <?php
                    include("../BLL/conecta.php");

                    try {
                    $stmt = $conn->prepare("SELECT u.id,c.id as id_cliente, c.nome, c.path, c.data_upload, c.email, c.telefone, c.descricao, c.nome_arq FROM usuariospapelaria u, cliente c WHERE u.id = c.papelaria_id and c.papelaria_id = $id ORDER BY c.data_upload DESC"); 
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                    foreach($stmt->fetchAll() as $k=>$v) { 
                        $pasta = $v["path"];
                        ?>
                    <table cellpadding="10">
                        <tbody>
                            <tr>
                                <td>
                        <?php

                        echo "<b>Nome do cliente: </b>".$v["nome"]."<br>".
                        "<b>Email: </b>".$v["email"]."<br>".
                        "<b>Telefone: </b>".$v["telefone"]."<br>".
                        "<b>Nome do arquivo: </b>". $v["nome_arq"]. "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='$pasta' download><i class='fas fa-download'></i> Download</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".
                        "<a href='../BLL/excluir.php?id=".$v["id_cliente"]."'><i class='fas fa-trash-alt'></i> Excluir</a>"."<br>".
                        "<b>Descrição: </b>".$v["descricao"]."<br>".
                        "<b>Data: </b>".date("d/m/Y H:i", strtotime($v["data_upload"])).
                        "<br><br>";
                        ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                    }
                    } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                ?>
              </span>
            </div>
            </div>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
