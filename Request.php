<?php


class Request
{
    protected $driver = null;

    public function __construct(Driver $driver)
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

        return $this->driver->{$name}($args[0]);
    }

    public function __call($name, $args)
    {
        return $this->loadDriver($name, $args);

    }

}