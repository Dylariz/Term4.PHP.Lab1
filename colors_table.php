<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Цвета HTML</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <thead>
            <th>Номер</th>
            <th>Цвет</th>
            <th>Код цвета</th>
        </thead>
        <tbody>
            <?php
            $colors = [
                ['красный', '#FF0000'],
                ['зеленый', '#00FF00'],
                ['синий', '#0000FF']
            ];
            foreach ($colors as $index => $color) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td style='background-color:{$color[1]}'>" . $color[0] . "</td>";
                echo "<td>" . $color[1] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>