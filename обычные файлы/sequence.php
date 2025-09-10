<?php

$elements = '1 2 3';
$k = 2;

$items = explode(' ', trim($elements));

$frequency = array_count_values($items);

function sequenceGen ($items, $k, $current = []) {
    if(count($current) === $k) {
        echo implode(' ', $current) . "<br>";
        return;
    }
    foreach($items as $item) {
        sequenceGen($items, $k, array_merge($current, [$item]));
    }

}

sequenceGen($items, $k);
?>

