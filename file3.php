<?php

if ('string') {
    echo 'Условие if (\'string\') выполнилось<br>';
}

if (0) {
    echo 'Условие if (0) выполнилось<br>';
}

if (null) {
    echo 'Условие if (null) выполнилось<br>';
}

if (5) {
    echo 'Условие if (5) выполнилось<br>';
}

$number = 54;
$result = '';
$number % 2 == 0 ? $result = 'число чётное' : $result = 'число не чётное';
echo $result;
