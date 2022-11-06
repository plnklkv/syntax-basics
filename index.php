<?php

$header = file_get_contents(__DIR__ . '\Text\header.txt');
$headerText = file_get_contents(__DIR__ . '\Text\headerText.txt');
$sidebarText = file_get_contents(__DIR__ . '\Text\sidebarText.txt');
$contentText = file_get_contents(__DIR__ . '\Text\contentText.txt');
$footerText = file_get_contents(__DIR__ . '\Text\footerText.txt');

require __DIR__ . '\Php\header.php';
require __DIR__ . '\Php\sidebar.php';
require __DIR__ . '\Php\content.php';
require __DIR__ . '\Php\footer.php';
