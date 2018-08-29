<?php 

$config = require 'config.php';

require 'database/DB.php';
require 'database/QueryBuilder.php';

$sql = "SELECT * FROM todos";

return QueryBuilder::query(Connector::make($config['database']), $sql);


