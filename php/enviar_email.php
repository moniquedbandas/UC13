<?php
//verificando se o formulario foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST"){
//recuperando os dados do formulario
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

//Aqui vai o endereço de email para onde quero enviar os dados
$destinatario = "moniquedbandas@gmail.com";

//o assunto do email vai aqui
$assunto = "Mensagem do formulário de contato";

$corpo_mensagem = "Nome: $nome\n";
$corpo_mensagem .= "E-mail: $email\n";
$corpo_mensagem .= "Mensagem:\n$mensagem\n";

// $headers = "From: moniquedbandas@gmail.com\r\n";
// $headers .= "Reply-To: $email\r\n";
// $headers .= "X-Mailer: PHP/" . phpversion();

//agora envia o email
if (mail($destinatario, $assunto, $corpo_mensagem)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Erro ao enviar o e-mail.";
}
}

?>