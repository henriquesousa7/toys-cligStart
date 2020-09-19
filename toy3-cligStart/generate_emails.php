<?php

$allFuncs = ["Adamantina" => ["ANA RITA DE CASSIA SILVA OLIVEIRA", "CARLINDO SANTOS ARAUJO",
                            "VANGELI SANDRA FEITOZA RAMOS", "JOSE EDIMILSON PEREIRA",
                            "GILMARA ARAUJO SANTANA", "IBERTO GALDINO NUNES",
                            "HELENICE FELICIANO MANFRE"],

            "Borborema" =>   ["LUCAS CASTILHO LOPES", "SILVANA BROETTO BERTOLDO", "RONALDO THIAGO MACHADO GUIMARAES",
                            "GISELIA MARIA DA CONCEICAO", "HUGO SILVESTRE DE ANDRADE", "RAFAEL DA SILVA MARQUES PEREIRA",
                            "LUZIA DE MATTOS", "LEIDIANE GONCALVES DA SILVA", "ADRIANO CARDOSO LYRA", "CELINO FERREIRA DA SILVA",
                            "LISA HELENA MINITTI ESTEVAM PAOLUCCI", "HELENA MARIA ALVES MANFRE", "JOSE GERALDO CAMARGO PEREIRA",
                            "ADRIANO ROQUE DE OLIVEIRA", "PEDRO CEZAR MARTENDAL", "ELISANGELA BARBOSA TILLER", "LEILANE DOS SANTOS OLIVEIRA",
                            "ALESSANDRA DANIELE MESQUITA", "SELMA APARECIDA DE OLIVEIRA", "IONICA DA SILVA VIEIRA", "GUSTAVO CARPES POSSAMAI"],

            "Cajamar" =>     ["OSVALDO FONSECA", "LUCIENI COSTA OLIVEIRA", "JOSE NATALINO DO ROSARIO PEREIRA",
                            "NELSON DA CRUZ SANTOS", "JOSINA PEREIRA PELEGRINO", "FRANCISCO ANTONIO DE MORAIS DA SILVA",
                            "CLARICE BUENO DA SILVA", "RACHEL GALOTE FIGUEIREDO", "JORDANA PEREIRA DE SOUZA",
                            "VALERIA ROCHA MENDES LIMA", "NILTON GOMES DE SOUSA", "Elida Paedra Alves De Sousa",
                            "ELIENE SILVA VIANA", "STEFANIA APARECIDA DE FARIA", "IRAILMA SILVA CEZAR"]];

$funcEmails = [];

foreach ($allFuncs as $filial => $funcs) {

    $allEmails = [];

    foreach ($funcs as $func) {

        $firstLetterOrName = strtolower($func[0]);
        $partsOfName = explode(' ', $func);

        $surname = strtolower(array_pop($partsOfName));

        $result = $firstLetterOrName . "_" . $surname . "@empresax.com.br";

        foreach ($funcEmails as $emails){
            foreach ($emails as $email){
                if(strcmp($result, $email) == 0){
                    $firstLetterOrName = strtolower(array_shift($partsOfName));
                    $result = $firstLetterOrName . "_" . $surname . "@empresax.com.br";
                }
            }
        }

        array_push($allEmails, $result);
    }
    $funcEmails[$filial] = $allEmails;
}
