<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year) {
    $age = date("Y") - $year;
    return "<p>Você tem {$age} anos!</p>";
};
echo $myAge(1995);

$priceBrl = function ($price) {
    return number_format($price, 2, ",", ".");
};
echo "<p>O projeto custa R$ {$priceBrl(3600)}. Vamos fechar?</p>";


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 400;
function showDates($days)
{
    $saveDate = [];
    for ($day = 1;$day < $days;$day++) {
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}
echo "<div style='text-align: center'>";
foreach (showDates(0) as $date) {
    echo "<small class='tag'>{$date}</small>". PHP_EOL;
}
echo "</div>";

// CORRETO::
function generatorDate($days)
{
    for ($day = 1;$day < $days;$day++) {
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}
echo "<div style='text-align: center'>";
foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>". PHP_EOL;
}
echo "</div>";
