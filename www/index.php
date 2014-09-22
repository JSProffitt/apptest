<?php
require 'vendor/autoload.php';

$app = new Slim\Slim();

$// Connect using the Laravel Database component
use Illuminate\Database\Capsule\Manager as Capsule;
 
// Make a new connection
/*$app->db = $cf->make(array(
    'driver'    => 'mysql',
    'host'      => 'in2k.mobiusnm.com',
    'port'      => 3306,
    'database'  => 'inwilmingtonde',
    'username'  => 'mobiusAdmin',
    'password'  => 'Neptune12',
    'prefix'    => '',
    'charset'   => "utf8",
    'collation' => "utf8_unicode_ci",
));*/

$result = $app->db->table('eventsTbl')->select('title')->get();

$app->run();
?>