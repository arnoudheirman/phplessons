<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/02/2017
 * Time: 11:07
 */
$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/Request.php';
require 'core/database/QueryBuilder.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);