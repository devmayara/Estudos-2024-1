<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    require __DIR__ . "/../vendor/autoload.php";

    $seo = new \Source\Support\Seo();
    echo $seo->render(
        "Full Stack PHP",
        "A melhor e mais completa formação php do Brasil",
        "https://www.upinside.com.br/fsphp",
        "https://www.upinside.com.br/fsphp/images/cover.png"
    );
    ?>
</head>
<body>
    <h1><?= $seo->title; ?></h1>
    <p><?= $seo->description; ?></p>

    <?= "<pre>" . print_r($seo->data(), true) . "</pre>"; ?>
</body>
</html>