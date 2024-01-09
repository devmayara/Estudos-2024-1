<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__."/file.txt";

if (file_exists($file) && is_file($file)) {
    echo "<p>Existe</p>";
} else {
    echo "<p>Nao existe</p>";
}


/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if (!file_exists($file) || !is_file($file)) {
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 01".PHP_EOL);
    fwrite($fileOpen, "Linha 02".PHP_EOL);
    fwrite($fileOpen, "Linha 03".PHP_EOL);
    fwrite($fileOpen, "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.".PHP_EOL);
    fclose($fileOpen);
} else {
    var_dump(
        file($file),
        pathinfo($file)
    );
}

echo "<p>".file($file)[3]."</p>";

$open = fopen($file, "r");
while (!feof($open)) {
    echo "<p>".fgets($open)."</p>";
}

fclose($open);


/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__ . "/teste2.txt";
if (file_exists($getContents) && is_file($getContents)) {
    echo file_get_contents($getContents);
} else {
    $data = "<article><h1>Mayara</h1><p>Aluna UpInside</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($data);
}

if (file_exists(__DIR__."/teste3.txt") && is_file(__DIR__."/teste3.txt")){
    unlink(__DIR__."/teste3.txt");
}

