<?php

$func = ["ANA RITA DE CASSIA SILVA OLIVEIRA", "CARLINDO SANTOS ARAUJO",
    "VANGELI SANDRA FEITOZA RAMOS", "JOSE EDIMILSON PEREIRA",
    "GILMARA ARAUJO SANTANA", "IBERTO GALDINO NUNES",
    "HELENICE FELICIANO MANFRE"];

$funcEmails = [];

for($i = 0; $i < count($func); $i++){

    $firstLetter = strtolower($func[$i][0]);
    $partsOfName = explode(' ', $func[$i]);

    $surname = strtolower(array_pop($partsOfName));

    $result = $firstLetter . "_" . $surname . "@empresax.com.br";

    array_push($funcEmails, $result);
}
?>