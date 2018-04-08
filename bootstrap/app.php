<?php

use Cart\App;
use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new App;

$capsule = new Capsule;
$capsule->addConnection([
	'database' => 'cart',
	'username'=> "root",
	'password' => "some_secure_password",
	'driver' => 'mysql',
	'host' => "localhost",
    'port'=> 3306,
	'charset' => 'latin1',
	'collation' => 'latin1_swedish_ci',
	'prefix' => '',
	'socket' => ''
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="";
// $dbname="cart";

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


require __DIR__ . '/../app/routes.php';

