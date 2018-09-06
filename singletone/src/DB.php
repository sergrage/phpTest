<?php

namespace SomeFolder;

use PDO;

class DB extends Singleton
{
    public $handler;

    protected function __construct()
    {
        $config = Config::getInstance('config');
       
        $this->handler = new PDO($config->config->dsn, 
                                 $config->config->user,
                                 $config->config->pass);
    }
}