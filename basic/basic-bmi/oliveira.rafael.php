<?php

$weight = 60.0;
$height = 1.65;
$result;
$BMI = $weight/$height**2;

if ($BMI < 18.5){
    $result = "Underweight";
} elseif ($BMI < 24.9) {
    $result = "Normal weight";
} elseif ($BMI < 29.9) {
    $result = "Overweight";
} else {
    $result = "Obesity";
}

echo "BMI: $BMI \n";
echo "Result: $result \n";