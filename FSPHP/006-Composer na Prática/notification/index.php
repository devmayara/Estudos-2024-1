<?php
require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail(
    "Assunto de Teste",
    "<p>Esse é um e-mail de <b>teste!</b></p>",
    "mayara@email.com",
    "mayara email",
    "devmayara11@gmail.com",
    "Developer MAYARA"
);

var_dump($novoEmail);
