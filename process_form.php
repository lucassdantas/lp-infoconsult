<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
error_reporting(-1);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sendBtn'])) {
    
    $errors = array(
        'noName' => 'É necessário preencher o nome',
        'noEmail' => 'É necessário preencher o E-mail',
        'noPhone' => 'É necessário preencher o Telefone',
        'invalidEmail' => 'E-mail Inválido',
        'invalidRequest' => 'Requisição inválida'
    );
    
    $name = htmlspecialchars($_POST['name']);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    
    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $errors['invalidEmail'];
        exit;
    }

    
    require_once 'includes/emailAcess.php';
    try {
        $mail = new PHPMailer();
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->isSMTP();
        $mail->Host = 'email-ssl.com.br';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = $sender_email;
        $mail->Password = $pass;
        $mail->Port = '465';
        
        $mail->setFrom($email);
        $mail->addReplyTo($email);
        $mail->addAddress('lucasdantas.rdmarketingdigital@gmail.com');

        $mail->Subject = "Novo Lead da Landing Page";
        $mail->Body = " 
            Nome:     $name \n
            E-mail:   $email \n
            Telefone: $phone
        ";
        $mail->send();
        echo 'Mensagem enviada com sucesso';
    } catch (Exception $err) {
        echo "Erro ao enviar mensagem: \n".$mail->ErrorInfo;
    }
    
} else {
    echo "Você não tem permissão para acessar esta página.";
    header('location: ./index.php');
}
?>
