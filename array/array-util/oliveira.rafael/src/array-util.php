<?php

function minimum($array) {
  $min = $array[0];
  foreach($array as $number){
    if ( $number < $min ) {
      $min = $number;
    } 
  }
  return $min;
}

function maximum($array) {
  $max = $array[0];
  foreach($array as $number){
    if ( $number > $max ) {
      $max = $number;
    } 
  }
  return $max;
}

function rangeValues($length, $last=0, $step=0){
  $list = array();

  if ($last == 0 && $step ==0 ){
    for($i = 0; $i < $length; $i++){
      array_push($list, $i);
    }
  } else if ($step == 0 && $last != 0){
    for($i = $length; $i < $last; $i++){
      array_push($list, $i);
    }
  } else {
    foreach(range($length, $last, $step) as $number){
      array_push($list, $number);
    }
  }
  
  return $list;
}

function zip(...$arrays) {
  $sizeArrays = sizeof($arrays);
  $result = array();
  
  for($cont= 0; $cont < $sizeArrays; $cont++){
    foreach($arrays as $array){
      $array[$cont] = array_push($result, $array[$cont]);
    }
  }

  return $result;
}

function uniq($array) {
  sort($array);
  $result = array();
  foreach($array as $number){
    if (!in_array($number, $result)){
      array_push($result, $number);
    }
  }
  $sortNums = sort($result);
  return $sortNums;
}

function sortNum($array) {
  $size = sizeof($array) - 1;
  $aux;

  for($i = 0; $i <= $size; $i++ ){
    for($j = 0; $j <= $size; $j++){

      if($array[$j] > $array[$i] ){

        $aux = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $aux;

      } 
    }
  }
  return $array;
} 
