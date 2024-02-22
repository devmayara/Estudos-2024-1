<?php

use Source\Core\Email;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.05 - Sintetizando e abstraindo");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ synthesize ]
 */
fullStackPHPClassSession("synthesize", __LINE__);

$email = (new Email())->bootstrap(
    "Olá mundo! Esse é meu envio via componente no FSPHP",
    "<h1>Olá mundo!</h1></br><p>Essa é uma mensagem via rotina da aplicação.</p>",
    "",
    ""
);

$email->attach(__DIR__ . "/../source/Core/Email.php", "Email.php");

if ($email->send()) {
    echo message()->success("E-mail enviado com sucesso");
} else {
    echo $email->message();
}

