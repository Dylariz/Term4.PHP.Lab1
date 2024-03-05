<?php
$str = "";
$count = 0;
for ($i = 10; $i <= 23; $i++) {
    if ($i >= 12 && $i <= 15) {
        $str .= $i . " " . $i . " ";
        $count += 2;
    } elseif ($i != 16) {
        $str .= $i . " ";
        $count++;
    }
    if ($count % 17 == 0) {
        $str .= "<br>";
    }
}

// Вывод
for ($t = 0; $t < 100; $t++) {
    echo $str;
}
?>