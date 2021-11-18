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
    <title>Home Papelaria</title>
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
                    $stmt = $conn->prepare("SELECT u.id,c.id, c.nome, c.path, c.data_upload, c.email, c.telefone, c.descricao, c.nome_arq FROM usuariospapelaria u, cliente c WHERE u.id = c.papelaria_id and c.papelaria_id = $id"); 
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                    foreach($stmt->fetchAll() as $k=>$v) { 
                        $pasta = $v["path"];
                        echo "nome: ".$v["nome"]."<br>".
                        "email: ".$v["email"]."<br>".
                        "telefone: ".$v["telefone"]."<br>".
                        "nome do arquivo: ". $v["nome_arq"]."<br>".
                        "descrição: ".$v["descricao"]."<br>".
                        "data: ".date("d/m/Y H:i", strtotime($v["data_upload"]))."<br>".
                        "<a href='$pasta' download>Download</a>"."<br> <br>";
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
