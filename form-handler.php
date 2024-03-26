<?php
include_once("library.php");

$arData = PostDataHandler();

if ($arData[2]) {
    $regex = '/<' . $arData[1] . '[^>]*class="[^"]*' . $arData[2] . '[\s"][^"]*"[^>]*>/m';
} else {
    $regex = '/<' . $arData[1] . '[^>]*>/m';
}

$tagCount = CountTag($regex, $arData[0]);

$feedback = "Тег $arData[1] " . "найден $tagCount раз";

SaveHistory([$arData[3], $arData[1], $arData[2], $tagCount]);

$arHistory = GetHistory();
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
    <table border="1" cellpadding="0" cellspacing="0">
        <?php for ($i = 0; $i < count($arHistory); $i++): ?>
            <tr>
            <?php for ($j = 0; $j < 4; $j++): ?>
                <td align="center" valign="middle" width="25%"><?=$arHistory[$i][$j]?></td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>