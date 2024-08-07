<?php
declare(strict_types=1);

$options =[
    PDO:: ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_STRINGIFY_FETCHES=>false,
    PDO:: ATTR_EMULATE_PREPARES=>false
];


$connect_string="mysql:host=127.0.0.1;dbname=phppdo_test;charset=utf8";

return new PDO($connect_string,'root','',$options);