<?php

$query = require  'bootstrap.php';


$tasks = $query->selectAll('todo' , 'Task');


require 'index.view.php';
 

