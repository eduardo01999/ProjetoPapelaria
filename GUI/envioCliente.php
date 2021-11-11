<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="estilo.css">
    <title>Envio Cliente</title>
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
                    <form action="<?php echo $action ?>?id=<?php echo $id ?>"  method="post">
                        <div class="form-group">
                            <label for=nome><b> Nome: </b></label> <br>
                            <input class="form-control" type="text" placeholder="Nome" name="nome" value="<?php echo $nome ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Endereço de email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="email" value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <label for=telefone><b> Telefone: </b></label> <br>
                            <input class="form-control" type="number" placeholder="Telefone" name="telefone" value="<?php echo $telefone ?>">
                        </div>
                        <div>
                        <label for="exampleFormControlFile1">Insira o arquivo</label>
                        <div id="meus_campos">
                            <input type="file" id="arquivo1">
                        </div>
                        <div class="">
                            <label for=copias><b> Quantidade de cópias: </b></label> <br>
                            <input type="number" class="form-control" >
                        </div>
                        </div>
                        <br>
                        <input type="button" onclick="inclui_campo()" value="Novo Arquivo">
                        <br>

                        <script>
                            var aux = 1;
                            function inclui_campo() {
                            aux ++;
                            var elemento = document.createElement("input");
                            elemento.type = "file";
                            var id = "arquivo"+aux;
                            elemento.id = id;
                            document.getElementById("meus_campos").appendChild(elemento);
                            }
                        </script>
                        <br>
                        <br>
                        <input type="button" onclick="window.location.href='index.php'" value="Voltar">
	                    <input type="button" value="Enviar">
                    </form>
            </div>
        </main>
    </body>
</html>