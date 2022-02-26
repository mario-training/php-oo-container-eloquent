<?php
include __DIR__ . '/../setup.php';

$capsule::schema()->create('buildings', function ($table) {
    $table->uuid('id')->default(('uuid_generate_v4()'));
    $table->primary('id');
    $table->string('name')->unique();
    $table->timestamps();
});
$capsule::schema()->create('vehicles', function ($table) {
    $table->uuid('id')->default(('uuid_generate_v4()'));
    $table->primary('id');
    $table->string('name')->unique();
    $table->timestamps();
});
$capsule::schema()->create('people', function ($table) {
    $table->uuid('id')->default(('uuid_generate_v4()'));
    $table->primary('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->string('gender',2)->default("f");
    $table->date('birth_date');
    $table->date('death_date')->nullable();
    $table->decimal('height', 2, 2);
    $table->decimal('weight', 2, 2);
    $table->timestamps();
});
$capsule::schema()->create('countries', function ($table) {
    $table->uuid('id')->default(('uuid_generate_v4()'));
    $table->primary('id');
    $table->string('name')->unique();
    $table->string('abbreviation', 10);
    $table->timestamps();
});
$capsule::schema()->create('cities', function ($table) {
    $table->uuid('id')->default(('uuid_generate_v4()'));
    $table->primary('id');
    $table->uuid('state_id');
    $table->string('name');
    $table->timestamps();
});

$capsule::schema()->create('states', function ($table) {
    $table->uuid('id')->default(('uuid_generate_v4()'));
    $table->primary('id');
    $table->uuid('country_id');
    $table->string('abbreviation', 3);
    $table->string('name')->unique();
    $table->timestamps();
});

$capsule::schema()->create('addresss', function ($table) {
    $table->uuid('id')->default(('uuid_generate_v4()'));
    $table->primary('id');
    $table->uuid('city_id');
    $table->string('neighborhood');
    $table->string('street');
    $table->string('number')->default('s/n');
    $table->json('additional_info')->nullable();
    $table->timestamps();
});