<?php
$ftp_server = "ftp.seuhostinger.com";
$ftp_user = "seu_usuario";
$ftp_pass = "sua_senha";

$conn_id = ftp_connect($ftp_server);
$login_result = ftp_login($conn_id, $ftp_user, $ftp_pass);

if ((!$conn_id) || (!$login_result)) {
    die("Conexão com o FTP falhou!");
}

$local_file = "sites/site_exemplo.php"; // Substitua pelo nome do arquivo gerado
$remote_file = "/public_html/site_exemplo.php";

if (ftp_put($conn_id, $remote_file, $local_file, FTP_BINARY)) {
    echo "Arquivo enviado com sucesso para a Hostinger.";
} else {
    echo "Erro ao enviar o arquivo.";
}

ftp_close($conn_id);

include 'upload_ftp.php';

?>
