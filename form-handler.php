<?php
include_once("library.php");

define("DATABASE", "database.csv");

$arData = PostDataHandler();

$urlContent = Search($arData[0]);

if ($arData[2]) {
    $tagCount = CountTagWithClass($arData);
} else {
    $tagCount = CountTag([$arData[0], $arData[1]]);
}

$feedback = "Тег $arData[1] " . "найден $tagCount раз";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Результаты поиска</title>
    <style>
        input {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <p><?=$feedback?></p>
    <form action="index.php" method="post">
        <input type="submit" value="На главную!" />
    </form>
</body>
</html>