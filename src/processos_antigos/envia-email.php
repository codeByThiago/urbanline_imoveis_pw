<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../includes/conexao.php';
require '../../vendor/autoload.php';

$email = $_POST['email'];
$sql_query = "SELECT email from usuarios where email = :email";

$stmt = $conn->prepare($sql_query);

$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();
$usuario_email = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario_email && $email == $usuario_email['email']) {
  try {
    $mail = new PHPMailer(true);

    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';         // Servidor SMTP
    $mail->SMTPAuth = true;                 // Ativa autenticação
    $mail->Username = 'thiago.rodriguess2007@gmail.com'; // Seu e-mail
    $mail->Password = 'ymei zgcn ghox ochj';       // Senha de app do Gmail
    $mail->SMTPSecure = 'tls';              // Segurança TLS
    $mail->Port = 587;                      // Porta TLS

    // Destinatário
    $mail->setFrom('urbanlineimoveis@suporte.com', 'Suporte');
    $mail->addAddress($email, 'Usuário');


    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = 'Redefinir senha';
    $mail->Body = '
    <html>
      <body>
        <h2>Olá!</h2>
        <p>Clique no botão abaixo para redefinir sua senha:</p>
        <a href="" style="
          background-color:#4CAF50;
          color:white;
          padding:10px 20px;
          text-decoration:none;
          border-radius:5px;">Redefinir Senha</a>
        <p>O link expira em 1 hora.</p>
      </body>
    </html>
    ';

    // Envia o e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';
  } catch (Exception $e) {
      echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
  }
} else {
  echo "Email não cadastrado!";
}


?>