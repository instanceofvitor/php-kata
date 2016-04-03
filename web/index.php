<?php
require_once __DIR__ . '/../vendor/autoload.php';
$app = new \PHPKata\Main();
$app->display();

$classMap = new ClassMap();
$classMap->display();

$classMapDirect = new ClassMapDirect();
$classMapDirect->display();

display();