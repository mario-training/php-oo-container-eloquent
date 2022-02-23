<?php
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

 $capsule = new Capsule;

$capsule->addConnection([
    'driver'                  => 'sqlite',
    'url'                     => '',
    'database'                => __DIR__ . '/database/database.sqlite',
    'prefix'                  => '',
    'foreign_key_constraints' => true
]);

$capsule->setEventDispatcher(new Dispatcher(new Container));
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
