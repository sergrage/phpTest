<?php 

namespace SomeFolder;

class Config extends Singleton
{
    public $config;
    public function setConfig($json)
    {
        $this->config = json_decode($json);
    }
}
