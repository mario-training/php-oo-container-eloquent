<?php
include __DIR__ . '/../setup.php';

$capsule::schema()->create('buildings', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->timestamps();
});
$capsule::schema()->create('vehicles', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->timestamps();
});
$capsule::schema()->create('people', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->timestamps();
});
$capsule::schema()->create('countries', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->timestamps();
});
$capsule::schema()->create('cities', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->timestamps();
});

$capsule::schema()->create('states', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->timestamps();
});

$capsule::schema()->create('addresss', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->timestamps();
});