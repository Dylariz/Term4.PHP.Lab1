<?php

for ($t = 0; $t < 100; $t++) {
    $count = 0;
    for ($i = 10; $i <= 23; $i++) {
        if ($i >= 12 && $i <= 15) {
            echo $i . " " . $i . " ";
            $count += 2;
        } elseif ($i != 16) {
            echo $i . " ";
            $count++;
        }
        if ($count % 17 == 0) {
            echo "<br>";
        }
    }
}
?>