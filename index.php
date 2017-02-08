<?php

require 'core/bootstrap.php';
require 'Task.php';

//$router = new Router;
//require 'routes.php';
//

//
//
//var_dump($uri);
//
//require $router->direct($uri);

require Router::load('routes.php')->direct(Request::uri());

//$animals = ['dog', 'cat'];

/**
 * @param $value
 */
/*$task = new Task('Go to the store');

var_dump($task);
$task->complete();
var_dump($task->isComplete());*/


/*$tasks = [
    new Task('Go to the store'),
    new Task('Finish up'),
    new Task('Clean')
];*/




