<?php
//1
$a = 3;
$b = 5;
$c = $a;
$a = $b;
$b = $c;
echo $a;
echo '<br>';
echo $b;
echo '<br>';

//2
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo $a;
echo '<br>';
echo $b;