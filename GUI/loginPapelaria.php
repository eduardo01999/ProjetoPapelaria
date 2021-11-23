<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css" >
    <title>Login Papelaria</title>
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            <div class="col-12 col-sm-2">
                <img src="./img/logo.png" alt="logoApp" display= block width= 200px height= 100px>
            </div>
            <div class="col-12 col-sm-8">
                <h1 class="text-center">LOGIN PAPELARIA</h1>
            </div>
            <div class="col-12 col-sm-2">
                <img src="./img/logo.png" alt="logoApp" display= block width= 200px height= 100px>
            </div>
        </header>
        <div class="container">
        <main class="row">
                <div class="col align-self-center">
                        <form action="../BLL/process_login.php" method="POST">
                            <div class="form-group">
                              <label><b>Endereço de email: </b></label>
                              <input type="email" name="email" class="form-control" id="email">
                              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                            </div>
                            <div class="form-group">
                              <label><b>Senha: </b></label>
                              <input type="password" name="senha" class="form-control" id="senha">
                            </div>
                            <input type="submit">
                        </form>
                        <p>Caso não possua cadastro <a href="cadastroPapelaria.php">clique aqui</a></p>
                        </div>
                        
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>