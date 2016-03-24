<?php
/**
 * Connect to IBSng and send commands example
 */
use \radiusApi\Modules;

include '../bootstrap.php';

/*
 * your driver login data
 */
$loginArray = [
    'username' => 'system',
    'password' => '123',
    'hostname' => 'localhost',
    'ssl' => false,
    'port' => 80,
];

$driver = new Modules\IBSng($loginArray);
$request = new \radiusApi\Request($driver);


/**
 * create user
 * $username,$password,$group,$credit
 */
try {
    $request->connect();
    $result = $request->addUser('phpIBSngApi', '123456', '1Mahe', '1');
    var_dump($result);
} catch (\Exception $ex) {
    echo '<div>Something went wrong: <b>' . $ex->getMessage() . '</b></div><br/>' . PHP_EOL;
}

/**
 * get user information
 */
//try {
//    $request->connect();
//    $result = $request->getUser('phpIBSngApi');
//    var_dump($result);
//} catch (\Exception $ex) {
//    echo '<div>Something went wrong: <b>' . $ex->getMessage() . '</b></div><br/>' . PHP_EOL;
//}

/**
 * list all users
 */
//try {
//    $request->connect();
//    $result = $request->listUser();
//    var_dump($result);
//} catch (\Exception $ex) {
//    echo '<div>Something went wrong: <b>' . $ex->getMessage() . '</b></div><br/>'. PHP_EOL;
//}

/**
 * delete users
 */
//try {
//    $request->connect();
//    $result = $request->deleteUser('phpIBSngApi');
//    var_dump($result);
//} catch (\Exception $ex) {
//    echo '<div>Something went wrong: <b>' . $ex->getMessage() . '</b></div><br/>'. PHP_EOL;
//}


/*
 * disconnect from remote server
 */
$request->disconnect();

