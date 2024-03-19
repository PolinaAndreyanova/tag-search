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