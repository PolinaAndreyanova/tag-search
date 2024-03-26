<?php
define("DATABASE", "database.csv");

function PostDataHandler(): array 
{
    $url = $_POST["url"];
    $tag = $_POST["tag"];
    $class = $_POST["class"];

    $urlContent = file_get_contents($url);

    return [$urlContent, $tag, $class, $url];
}

function CountTag(string $regex, string $content): int 
{
    preg_match_all($regex, $content, $arMatches, PREG_SET_ORDER);

    return count($arMatches);
}

function SaveHistory(array $arRequest): void 
{
    $database = fopen(DATABASE, "a") or Die("Ошибка!");

    fputcsv($database, $arRequest);

    fclose($database);
}

function GetHistory(): array
{
    $arHistory = [];

    $db = fopen(DATABASE, "rt") or Die("Ошибка!");

    for ($i = 0; $arData = fgetcsv($db, 100); $i++) {
        $arHistory[] = $arData;
    }

    fclose($db);

    return $arHistory;
}