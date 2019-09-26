<?php

function formatString($text){

    $textReplace = str_replace(" ", "", $text);
    $textUpperCase = strtoupper($textReplace);
    $textSplited = str_split($textUpperCase);
    $textJoined = join("-", $textSplited);

    echo $textJoined;
    echo "\n";

}

formatString("hello World");

?>