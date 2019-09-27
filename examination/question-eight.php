<?php

function repeat($text, $numRepeat){
    
    $cont = 0;
    $textFill = str_pad($text, 10, $text);
    $formatText = str_split($textFill);

    foreach($formatText as $letter){
        if($letter == "a"){
            $cont++;
        }
    }

    echo "$cont";


}

repeat('a',10);


?>