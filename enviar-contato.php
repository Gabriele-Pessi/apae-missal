<?php
// Configurações básicas
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$destinatario = "contato@apaemissal.org.br"; // Substitua pelo e-mail da APAE de Missal
$assunto = "Mensagem de Contato - APAE Missal";

// Montar o corpo do e-mail
$corpo = "Você recebeu uma mensagem através do formulário de contato da APAE Missal.\n\n";
$corpo .= "Nome: $nome\n";
$corpo .= "E-mail: $email\n";
$corpo .= "Mensagem:\n$mensagem\n";

// Cabeçalhos para o envio
$cabecalho = "From: $email\r\n";
$cabecalho .= "Reply-To: $email\r\n";

// Função para enviar o e-mail
if (mail($destinatario, $assunto, $corpo, $cabecalho)) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar mensagem.";
}
?>