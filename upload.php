<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Verifica se o arquivo é um XML
if($fileType != "xml") {
    echo "Desculpe, apenas arquivos XML são permitidos. ";
    $uploadOk = 0;
}

// Verifica se $uploadOk é 0 por algum erro
if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi enviado.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi enviado com sucesso.";
    } else {
        echo "Desculpe, houve um erro ao enviar seu arquivo.";
    }
}
?>