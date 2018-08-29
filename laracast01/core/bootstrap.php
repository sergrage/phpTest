<?php

App::bind('config', require 'config.php');

$config = App::get('config')['database'];


App::bind('database', new QueryBuilder(Connection::make($config)));