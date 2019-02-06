<?php 

$config = require 'config.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return New QueryBuilder(
	Connection::make($config['database'])
);
