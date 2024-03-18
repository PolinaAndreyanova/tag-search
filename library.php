<?php
function PostDataHandler() : array {
    $url = $_POST["url"];
    $tag = $_POST["tag"];
    $class = $_POST["class"];

    return [$url, $tag, $class];
}

function Search(string $url) : string {
    $content = file_get_contents($url);

    return $content;
}

function CountTag(array $arData) : int {
    preg_match('', $arData[0], $arMatches); // регулярное выражение!

    return count($arMatches) - 1;
}

function CountTagWithClass(array $arData) : int {
    preg_match('', $arData[0], $arMatches); // регулярное выражение!

    return count($arMatches) - 1;
}