<?php
// Для корректной работы данной программы в фвйле php.ini Должны быть раскомментированны поля extensions_dir и extension=intl
// Число передается как GET параметр веб-сервера по ключу "number"
if (isset($_GET["number"]) && !empty($_GET["number"])){
    $number = (int) $_GET["number"];
}
else{
    exit("Некорректно введены данные");
}
$result = (new MessageFormatter('en-us', '{n, spellout}'))->format(['n' => $number]);
echo $result;
?>