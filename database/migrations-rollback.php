<?php
require_once __DIR__ . '/../setup.php';


$capsule::schema()->dropIfExists('buildings');
$capsule::schema()->dropIfExists('vehicles');
$capsule::schema()->dropIfExists('people');
$capsule::schema()->dropIfExists('countries');
$capsule::schema()->dropIfExists('cities');
$capsule::schema()->dropIfExists('states');
$capsule::schema()->dropIfExists('addresss');