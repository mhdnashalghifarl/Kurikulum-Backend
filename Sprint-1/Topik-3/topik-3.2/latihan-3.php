<?php

for ($r=1; $r <= 9; $r++) { 
    for ($i=1; $i <= 9; $i++) {
        echo "(" . $r . ", " . $i . ")";
    }
    echo "<br>";
}

for ($r=1; $r <= 9; $r++) { 
    for ($i=1; $i <= 9; $i++) {
        if ($r + $i == 10 || $r == $i || $r > $i && $r+ $i > 10 || $r < $i && $r + $i < 10) {
            echo "&nbsp+&nbsp";
        } else {
            echo "&nbsp&nbsp-&nbsp";
        }
    }
    echo "<br>";
}   