<article style="
    padding: 5px 20px;
    background: #eee;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
">
    <h1><?= $profile->name;?></h1>
    <p>
        Trabalha na <?= $profile->company;?> <br>
        <a href="mailto:<?= $profile->email;?>" title="Enviar E-mail">Enviar E-mail</a>
    </p>
</article>
