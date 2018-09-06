<?php

namespace SomeFolder;


class Singleton
{
    protected static $instance = array();
    public static function getInstance($key)
    {
        if (null === static::$instance[$key]) {
            static::$instance[$key] = new static();
        }
        return static::$instance[$key];
    }
    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}
}