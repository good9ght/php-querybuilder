<?php
/*
|
| Ligando a exibição de erros
|
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;

if (!file_exists(__DIR__.'/../config.php')) {
    die('"config.php\" was not found. Please, create it and try again.');
}

App::bind('config', require __DIR__.'/../config.php');

//App::bind('db', new QueryBuilder(
//    Connection::start(App::get('config')['database'])
//));

function db() {
    return new QueryBuilder(
        Connection::start(App::get('config')['database'])
    );
}
