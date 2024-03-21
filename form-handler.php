<?php
include_once("library.php");

$arData = PostDataHandler();

if ($arData[2]) {
    $regex = '/<' . $arData[1] . '[^>]*class="[^"]*' . $arData[2] . '[^"]*"[^>]*>/m';
} else {
    $regex = '/<' . $arData[1] . '[^>]*>/m';
}

$tagCount = CountTag($regex, $arData[0]);

$feedback = "Тег $arData[1] " . "найден $tagCount раз";

SaveHistory([$arData[3], $arData[1], $arData[2], $tagCount]);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Результаты поиска</title>
</head>
<body class="content">
    <form class="content__form" action="index.php" method="post">
        <p class="content__feedback"><?=$feedback?></p>
        <button class="content__button" type="submit">На главную</button>
    </form>
</body>
</html>