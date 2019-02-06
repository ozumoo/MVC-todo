<?php

$query = require  'bootstrap.php';

require 'Task.php';


$tasks = $query->selectAll('todo' , 'Task');


require 'index.view.php';
 

