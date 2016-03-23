<?php

include 'Driver.php';
include 'Request.php';
include 'IBSng.php';

//$loginArray = [
//    'username' => 'system',
//    'password' => '123',
//    'hostname' => 'localhost',
//    'ssl' => false,
//    'port' => 80,
//];

$loginArray = [
    'username' => 'system',
    'password' => '6437',
    'hostname' => '5.135.86.77',
    'ssl' => false,
    'port' => 80,
];

$request = new Request(new IBSng($loginArray));

var_dump($request->connect());

var_dump($request->addUser('phpIBSngApi', '123456', '1Mahe', '1'));

//$request->disconnect();

//var_dump($request->getUser('elvis'));

//var_dump($request->listUser());
