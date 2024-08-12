<?php
if (isset($_GET['file'])) {
    $filepath = 'uploads/' . $_GET['file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream'); // Ou use application/xml para tipo XML específico
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Limpa a saída do buffer do sistema
        readfile($filepath);
        exit;
    } else {
        echo "Arquivo não encontrado.";
    }
}
?>
