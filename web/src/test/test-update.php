<?php
require_once('../database/class-host.php');

$handler = new Handler();

var_dump($handler->update('Google DNS', '8.8.8.8', 2)); //=> int(1)
var_dump($handler->update('Google DNS', '8.8.2.8', 2)); //=> int(0)