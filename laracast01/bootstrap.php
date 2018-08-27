<?php

require __DIR__ . '/database/Connection.php';
require __DIR__ . '/database/QueryBuilder.php';

return new QueryBuilder(Connection::make());