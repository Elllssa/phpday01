<?php
function my_swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a="VarA";
$b="VarB";
my_swap($a, $b);
echo "$a $b";