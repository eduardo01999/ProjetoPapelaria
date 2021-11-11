<?php
if(isset($_GET["id"])){
  $id = "";
  $email = "";
  $nome = "";
  $senha = "";
  $cnpj = "";
  $cep = "";
  $cidade = "";
  $endereco = "";
  $numero = "";
  $complemento = "";
  $telefone = "";
  $cartao = "";
  $dinheiro = "";
  $pix = "";
  $action = "";
}

else{
  $id = "";
  $email = "";
  $nome = "";
  $senha = "";
  $cnpj = "";
  $cep = "";
  $cidade = "";
  $endereco = "";
  $numero = "";
  $complemento = "";
  $telefone = "";
  $cartao = "";
  $dinheiro = "";
  $pix = "";
  $action = "../BLL/inserir.php";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro Papelaria</title>
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
        <div class="col-12 col-sm-8">
            <label for="exampleFormControlInput1" class="form-label ">Email</label>
            <input type="email" class="form-control" placeholder="nome@exemplo.com" name="email" value="<?php echo $email ?>">
          </div>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Nome:</label>
        <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php echo $nome ?>">
      </div>
    <br>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Senha</label>
        <input type="password" class="form-control" placeholder="Senha" name="senha" value="<?php echo $senha ?>">
      </div>
    <br>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Confirmar Senha</label>
        <input type="password" class="form-control" placeholder="Confirma Senha" name="confirmarSenha">
      </div>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">CNPJ</label>
        <input type="number" class="form-control" placeholder="CNPJ" name="cnpj" value="<?php echo $cnpj ?>">
      </div>
    <br>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">CEP</label>
        <input type="number" class="form-control" placeholder="CEP" name="cep" value="<?php echo $cep ?>">
      </div>
    <br>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Cidade</label>
        <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="<?php echo $cidade ?>">
      </div>
    <br>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Endereço</label>
        <input type="text" class="form-control" placeholder="Endereço" name="endereco" value="<?php echo $endereco ?>">
      </div>
    <br>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Número</label>
        <input type="number" class="form-control" placeholder="Número" name="numero" value="<?php echo $numero ?>">
      </div>
    <br>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Complemento</label>
        <input type="text" class="form-control" placeholder="Complemento" name="complemento" value="<?php echo $complemento ?>">
      </div>
    <br>
    <br>
    <div class="col-12 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
        <input type="number" class="form-control" placeholder="Telefone" name="telefone" value="<?php echo $telefone ?>">
      </div>
    <br>
    <br>
    <label for=formasPagamento><b> Formas de pagamento que aceita: </b></label> <br>
        <input type = "checkbox" id = "cartao" name = "cartao" value = "cartao">
        <label for = "cartao"> Cartão </label>
        <input type = "checkbox" id = "dinheiro" name = "dinheiro" value = "dinheiro">
        <label for = "dinheiro"> Dinheiro </label>
        <input type = "checkbox" id = "pix" name = "pix" value = "pix">
        <label for = "pix"> Pix </label>
    <br>
    <br>
    <input type="button" onclick="window.location.href='index.php'" value="Voltar">
	  <input type="submit">
  </form>
</div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>