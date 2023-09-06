<?php
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
    
    require 'mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'email-ssl.com.br';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username ='';
    $mail->Password = '';
    $mail->Port = '465';
    
    $mail->setFrom($email);
    $email->addReplyTo($email);
    $addAddress('lucasdantas.rdmarketingdigital@gmail.com');

    $mail->Subject = "Novo Lead da Landing Page";
    $mail->Body = " 
        Nome:     $name \n
        E-mail:   $email \n
        Telefone: $phone
    ";

    if (!$mail->send()) {
        echo "Erro ao enviar mensagem.".$mail->ErrorInfo;
    } else {
        echo "E-mail enviado com sucesso";
    }
} else {
    echo "Você não tem permissão para acessar esta página.";
    header('location: ./index.php');
}
?>
