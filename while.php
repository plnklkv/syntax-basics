<?php
$array = [];
$i = 345;

while ($i <= 357) {
    if ($i % 2 == 0)
        $array[] = $i;
    $i++;
}

foreach ($array as $item) {
    echo $item . '<br>';
}