<?php
include("conecta.php");

$id = $_GET["id"];

try {
  $stmt = $conn->prepare("DELETE FROM cliente WHERE id=$id"); 
  $stmt->execute();
  echo "Registro excluído com sucesso!<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>