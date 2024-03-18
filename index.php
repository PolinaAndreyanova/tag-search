<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Форма поиска</title>
    <style>
        input {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form action="form-handler.php" method="post">
        URL: <input type="url" name="url" value="" required /><br>
        tag: <input type="text" name="tag" value="" required /><br>
        class: <input type="text" name="class" value="" /><br>
        <input type="submit" value="Найти!" />
    </form>
</body>
</html>