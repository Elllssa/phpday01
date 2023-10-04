<?php
function my_swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

