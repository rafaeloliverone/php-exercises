<?php
require_once('../database/class-host.php');

$handler = new Handler();

var_dump($handler->delete(3)); //=> int(1)
var_dump($handler->delete(2)); //=> int(0)