<?php

include 'Driver.php';
include 'Request.php';
include 'IBSng.php';

$loginArray = [
    'username' => 'system',
    'password' => '123',
    'hostname' => 'localhost',
    'ssl' => false,
    'port' => 80,
];

$request = new Request(new IBSng($loginArray));

$request->connect();

//$request->disconnect();

//var_dump($request->getUser('elvis'));

//var_dump($request->listUser());