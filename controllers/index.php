<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/02/2017
 * Time: 12:10
 */
$tasks  = $app['database']->selectAll('todos', 'Task');




require 'views/index.view.php';