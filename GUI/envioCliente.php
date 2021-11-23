<?php
include("../BLL/conecta.php");

$id = "";
$nome = "";
$email = "";
$telefone = "";
$descricao = "";
$papelaria_id = $_GET["id"];
$action = "../BLL/inserirCliente.php";


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="estilo.css">
    <title>Envio Cliente</title>
    <style> 
    .oculto {
        display: none;
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
                <h1 class="text-center">INSIRA SEUS <br> DADOS</h1>
            </div>
            <div class="col-12 col-sm-2">
                <img src="./img/logo.png" alt="logoApp" display= block width= 200px height= 100px>
            </div>
        </header>
        <div class="container">
            <main class="row">
                <div class="col align-self-center">
                    <form action="<?php echo $action ?>?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group oculto">
                            <label for=ID><b> ID: </b></label> <br>
                            <input class="form-control" type="number" placeholder="ID" name="idPapelaria" value="<?php echo $papelaria_id ?>">
                        </div>
                        <div class="form-group">
                            <label for=nome><b> Nome: </b></label> <br>
                            <input class="form-control" type="text" placeholder="Nome" name="nome" value="<?php echo $nome ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1"><b>Endereço de email: </b></label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="email" value="<?php echo $email ?>" required>
                        </div>
                        <div class="form-group">
                            <label for=telefone><b> Telefone: </b></label> <br>
                            <input class="form-control" type="number" placeholder="Telefone" name="telefone" value="<?php echo $telefone ?>" required>
                        </div>
                        <div>
                        <label for="exampleFormControlFile1"><b>Insira o arquivo: </b></label>
                            <input type="file" id="arquivo1" name="arquivo" required>
                        <div class="">
                            <br>
                            <label for=copias><b> Informações/quantidade de cópias: </b></label> <br>
                            <input type="text" class="form-control" name="descricao" value="<?php echo $descricao ?>" required>
                        </div>
                        </div>
                        <br>
                        <br>
                        <input type="button" onclick="window.location.href='index.php'" value="Voltar">
	                    <input type="submit" value="Enviar">
                    </form>
            </div>
        </main>
    </body>
</html>