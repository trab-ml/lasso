<?php
namespace Lasso\Services;

use Lasso\Models\ContactForm;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../vendor/autoload.php';

abstract class EmailService
{
    static function send_email(ContactForm $emailRequest)
    {
        $adminEmail = $_ENV['SENDER_EMAIL_ADRESS'];
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = $_ENV['SENDER_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $adminEmail;
        $mail->Password = $_ENV['SENDER_EMAIL_SECRET'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->CharSet = 'UTF-8';
        $mail->setFrom($_ENV['FROM_EMAIL_ADRESS']);
        $mail->addAddress($adminEmail);
        $mail->isHTML(true);
        $mail->Subject = $emailRequest->get_reason();
        $mail->Body = "Nom(s) et Prénom(s): {$emailRequest->get_firstname()} {$emailRequest->get_lastname()}<br>";
        $mail->Body .= "Email: {$emailRequest->get_email()}<br>";
        $mail->Body .= "Téléphone: {$emailRequest->get_phone()}<br>";
        $mail->Body .= "Adhérent: {$emailRequest->get_lasso_member()}<br><br><br>";
        $mail->Body .= nl2br($emailRequest->get_message());

        if ($mail->send()) {
            $response = [
                'status' => 'success',
                'message' => 'Message envoyé avec succès.'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Échec d\'envoi du message.'
            ];
        }

        return $response;
    }
}
