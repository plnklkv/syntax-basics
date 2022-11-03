<?php
//1
echo '1. ';
function getMinNumber(float $a, float $b, float $c){
    if($a < $b && $a < $c)
        return $a;
    if($b < $c)
        return $b;
    return $c;
}
echo getMinNumber(2.5, 0.5, 50.2);

//2
echo '<br>2. ';
function multiply2(int &$a, int &$b){
    $a *= 2;
    $b *= 2;
}
$a = 25; $b = 5;
multiply2($a, $b );
echo ("$a, $b");

//3
echo '<br>3. ';
function factorial(int $a){
    if($a == 0)
        return 1;
    return $a * factorial($a-1);
}
$a = 6;
echo factorial($a);

//4
echo '<br>4. ';
function outputNumbers(int $a) : void{
    if($a == 0) {
        echo $a;
        return;
    }
    outputNumbers($a - 1);
    echo ', ' . $a;
}
outputNumbers(20);