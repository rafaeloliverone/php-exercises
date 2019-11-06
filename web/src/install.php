<?php
require_once('./database/class-host.php');

$sql = file_get_contents('./database/schema.sql');

$handler = new Handler();

$handler->loadDatabase($sql);

header('location:index.php');

?>
