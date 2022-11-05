<?php
//1
$array1 = [
    1,
    3,
    2
];
sort($array1);
echo implode(':', $array1) . '<br>';

//2
$array2 = [
    1,
    2,
    3,
    4,
    5
];
$sliceArray = array_slice($array2, 1, 3);
foreach ($sliceArray as $item){
    echo $item . ' ';
}

//3
echo '<br>';
$array3 = [
  0,
  2,
  3,
  1,
  2
];
$diffArray = array_unique($array3);
foreach ($diffArray as $item){
    echo $item . ' ';
}