<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

function formatDate($inputDate){
    $date = explode('/', $inputDate);

    $day = $date[0];
    $month = $date[1];
    $year = $date[2];

    $check = checkdate($month, $day, $year);

    if ($check == 1){
        echo strftime('%A, %d de %B de %Y', strtotime($inputDate));
        echo "\n";
    } else {
        echo "Data não válida \n";
    }

}

formatDate("02/02/2002");
formatDate("31/02/2010");

?>
