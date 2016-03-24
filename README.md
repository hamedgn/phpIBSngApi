phpIBSngApi 
===================

Powerful Modular PHP api for connecting to famous **Radius** servers and create/delete/get/list users.

> TODO
> - FreeRadius/RouterOS Drivers
> - Better documentation
> - Laravel Service Provider
> - Driver for non-radius servers **Directadmin Virtualmin PowerAdmin htaccess** 

----------


Examples
-------------
For more examples pelase see "examples" folder.

```php
<?php
    use \radiusApi\Modules;
    include '../bootstrap.php';
    
    /*
     * create your driver login data
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
     */
    try {
        $request->connect();
        $result = $request->addUser('phpIBSngApi', '123456', '1Mahe', '1');
        var_dump($result);
    } catch (\Exception $ex) {
        echo '<div>Something went wrong: <b>' . $ex->getMessage() . '</b></div><br/>' . PHP_EOL;
        
    }
```

	

####  How to Contribute

 1. Fork and edit
 2. Submit pull request

####  The MIT License (MIT)