<?php
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(
    "sandbox.smtp.mailtrap.io",
    "1e86ad6565f230",
    "db6008217e1a9e",
    465,
    "devmayara11@gmail.com",
    "Developer Mayara Silva"
);

$novoEmail->sendMail(
    "Assunto de Teste",
    "<p>Esse é um e-mail de <b>teste!</b></p>",
    "mayara@email.com",
    "mayara email",
    "mayara@gmail.com",
    "MAYARA SILVA"
);

var_dump($novoEmail);
