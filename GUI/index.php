<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <title>Index</title>
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            <div class="col-12 col-sm-2">
                <img src="./img/logo.png" alt="logoApp" display= block width= 200px height= 100px>
            </div>
            <div class="col-12 col-sm-9">
                <h1 class="text-center">ESCOLHA A PAPELARIA</h1>
            </div>
            <div class="col-12 col-sm-1">
                <p><button onclick="window.location.href='loginPapelaria.php'" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    <p class="font-weight-bold"> Login <br> Papelaria</p>
                  </button></p><div style="min-height: 120px;"><div class="collapse collapse-horizontal" id="collapseWidthExample"><div class="card card-body" style="width: 300px;">
                    </div></div></div>
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
                    $stmt = $conn->prepare("SELECT id, nome, endereco, numero, cidade, complemento, cartao, dinheiro, pix FROM usuariospapelaria"); 
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                    foreach($stmt->fetchAll() as $k=>$v) { 

                        if ($v["cartao"] == 1) {
                            $cartao = "Cartão  &nbsp &nbsp";
                        }
                        else {
                            $cartao = "";
                        }

                        if ($v["dinheiro"] == 1) {
                            $dinheiro = "Dinheiro  &nbsp &nbsp";
                        }
                        else {
                            $dinheiro = "";
                        }

                        if ($v["pix"] == 1) {
                            $pix = "Pix ";
                        }
                        else{
                            $pix = "";
                        }

                        if ($v["complemento"] != "") {
                            $complemento = "<b>Complemento: </b>".$v["complemento"]."<br>";
                        }
                        else {
                            $complemento = "";
                        }


                        echo "<a href='envioCliente.php?id=".$v["id"]."'><b>Nome: </b>".$v["nome"]." <br>
                        <b>Cidade: </b>".$v["cidade"]."<br>
                        <b>Endereço: </b>".$v["endereco"]."
                        &nbsp &nbsp<b>Nº: </b>".$v["numero"]."<br>
                        $complemento"."
                        <b>Formas de pagamento aceitas: </b>"."$cartao"."$dinheiro".$pix."</a>
                        <br><br>";
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