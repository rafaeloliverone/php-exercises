<?php

const size = 10;
$cont = 1;
$h = 0;

while ($cont <= size){
    $h += 1/$cont;
    $cont++;
}

echo "$h";

