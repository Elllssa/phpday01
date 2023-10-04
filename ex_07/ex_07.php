<?php
function generatewoofs($count) {
    $woofString = "";
    for ($i = 0; $i < $count; $i++) {
        $woofString .="woof";
    }
    $woofString .= "\n";
    return $woofString;
}

