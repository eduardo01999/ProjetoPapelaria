<?php
include("conecta.php");

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$cnpj = $_POST["cnpj"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$telefone = $_POST["telefone"];
$complemento = $_POST["complemento"];
$cartao = ( isset($_POST["cartao"]) ) ? 1 : 0;
$dinheiro = ( isset($_POST["dinheiro"]) ) ? 1 : 0;
$pix = ( isset($_POST["pix"]) ) ? 1 : 0;



try {
  $sql = "INSERT INTO usuariospapelaria (id, nome, email, senha, cnpj, cep, cidade, endereco, numero, complemento, telefone, cartao, dinheiro, pix) 
  VALUES (NULL, '$nome', '$email', '$senha', '$cnpj', '$cep', '$cidade', '$endereco', '$numero', '$complemento', '$telefone', $cartao, $dinheiro, $pix)";

  $stmt = $conn->prepare($sql); 
  $stmt->execute();

  echo "Novo Registro Inserido com sucesso!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>