<?php
require_once('../database/class-host.php');

$handler = new Handler();


// print_r($handler->read(3));
//=>
// array(3) {
//   ["id"]=>  string(1) "2"
//   ["name"]=>  string(10) "dns google"
//   ["address"]=>  string(7) "8.8.8.8"
// }

var_dump($handler->readByNameAddress("dns google", "8.8.8.8"));
//=>
// array(3) {
//   ["id"]=>  string(1) "2"
//   ["name"]=>  string(10) "dns google"
//   ["address"]=>  string(7) "8.8.8.8"
// }

// var_dump($handler->readAll());
//=>
// array(2) {
//   [0]=>array(3) {
//     ["id"]=>string(1) "1"
//     ["name"]=>string(14) "www.google.com"
//     ["address"]=>string(14) "216.58.222.100"
//   }
//   [1]=>array(3) {
//     ["id"]=>string(1) "2"
//     ["name"]=>string(10) "dns google"
//     ["address"]=>string(7) "8.8.8.8"
//   }
// }

// var_dump($handler->readOrCreate("dns google", "8.8.8.8"));
//=>
// array(3) {
//   ["id"]=>  string(1) "2"
//   ["name"]=>  string(10) "dns google"
//   ["address"]=>  string(7) "8.8.8.8"
// }

// var_dump($handler->readOrCreate("dns google", "8.8.4.4")); //=> string(1) "3"