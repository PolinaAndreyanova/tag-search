<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Форма поиска</title>
</head>
<body class="content">
    <form class="content__form" action="form-handler.php" method="post">
        <h1 class="content__header">Форма поиска</h1>
        <input class="content__input" type="url" name="url" value="" placeholder="url" required /><br>
        <input class="content__input class2" type="text" name="tag" value="" placeholder="tag" required /><br>
        <input class="content__input" type="text" name="class" value="" placeholder="class" /><br>
        <button class="content__button" type="submit">Найти</button>
    </form>
</body>
</html>