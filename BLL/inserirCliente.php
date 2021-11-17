<?php
include("conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$descricao = $_POST["descricao"];
$papelaria_id = $_POST["idPapelaria"];

if(isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    if($arquivo['error'])
        die("Falha ao enviar arquivo");

    $pasta = "../GUI/arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if($extensao != 'jpg' && $extensao != 'png' && $extensao != 'docx' && $extensao != 'pdf')
        die("Tipo de arquivo não aceito");


    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

    $deuCerto = move_uploaded_file($arquivo["tmp_name"], $path);
    if($deuCerto) {
        $conexao->query("INSERT INTO cliente (id, path, data_upload, nome, email, telefone, descricao, nome_arq, papelaria_id) 
        VALUES (NULL, '$path', NOW(), '$nome', '$email', '$telefone', '$descricao', '$nomeDoArquivo', $papelaria_id)") or die($conexao->error);
        echo "Arquivo enviado com sucesso!";
    }
        
    else
        echo "Falha ao enviar arquivo";
    
}

?>