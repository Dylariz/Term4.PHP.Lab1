<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <caption>Таблица умножения</caption>
        <thead>
            <tr>
                <th>&nbsp;</th>
                <?php
                // Генерация заголовков столбцов
                for ($col = 1; $col <= 10; $col++) {
                    echo "<th>{$col}</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Генерация строк таблицы
            for ($row = 1; $row <= 10; $row++) {
                echo "<tr>";
                echo "<th>{$row}</th>";
                for ($col = 1; $col <= 10; $col++) {
                    $result = $row * $col;
                    echo "<td>{$result}</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>