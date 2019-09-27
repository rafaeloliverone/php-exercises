<?php

function sequency($start, $stop){
    $result = [];

    for($i = $start; $i <= $stop; $i++){
        $result[] = $i;
    }

    $reversed = array_reverse($result);
    $textJoined = array_merge($result, $reversed);

    echo join("", $textJoined);
    echo "\n";
}

sequency(10,13);

?>
