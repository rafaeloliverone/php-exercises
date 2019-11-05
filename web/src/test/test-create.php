<?php
require_once('../database/class-host.php');

$handler = new Handler();

$handler->create('dns twitter', '9.9.9.9');

var_dump($handler->create('dns twitter', '9.9.9.9')); // string(1) "2"