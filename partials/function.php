<?php
//Funzione per generare una password casuale
function generatePassword($lunghezza)
{
    //Caratteri possibili per la password
    $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+?";
    $password = "";
    //Ciclo per generare la password
    for ($i = 0; $i < $lunghezza; $i++) {
        //Seleziona un carattere casuale dalla stringa di caratteri
        $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $password;
}

//Controllo se la lunghezza è stata inviata in GET
if (isset($_GET['lunghezza'])) {
    //Genera la password
    $password = generatePassword($_GET['lunghezza']);
    //Stampa la password
    echo $password;
}
