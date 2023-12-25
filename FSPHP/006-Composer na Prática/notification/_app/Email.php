<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mail = \stdClass::class;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->isSMTP();
        $this->mail->Host       = 'sandbox.smtp.mailtrap.io';
        $this->mail->SMTPAuth   = true;
        $this->mail->Port       = 465;
        $this->mail->Username   = '1e86ad6565f230';
        $this->mail->Password   = 'db6008217e1a9e';

        $this->mail->CharSet    = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);

        //Recipients
        $this->mail->setFrom('devmayara11@gmail.com', 'Dev Mayara Silva');
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail,$addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->errorMessage()}";
        }
    }
}
