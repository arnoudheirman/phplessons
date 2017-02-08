<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/02/2017
 * Time: 11:07
 */
require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
$config = require 'config.php';

return new QueryBuilder(
    Connection::make($config['database'])
);