<?php 


$tasks = $app['database']->selectAll('todo' , 'Task');


require 'views/index.view.php';
