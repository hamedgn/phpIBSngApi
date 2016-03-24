<?php namespace radiusApi;


class Request
{
    protected $driver = null;

    public function __construct(DriverInterface $driver)
    {
        $this->driver = $driver;

    }

    protected function loadDriver($name, $args)
    {
        if (!$this->driver)
            throw new Exception ('No driver specified');

        if (!method_exists($this->driver, $name)) {
            throw new Exception('driver does not support ' . $name . '()');
        }
        return call_user_func_array(array($this->driver, $name), $args);
    }

    public function __call($name, $args)
    {
        return $this->loadDriver($name, $args);
    }

}