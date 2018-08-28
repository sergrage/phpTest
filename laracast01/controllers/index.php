<?php

$table = 'todos';

$todos = $query->selectAll($table, 'Task');

require 'views/index.view.php';