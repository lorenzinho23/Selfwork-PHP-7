<?php

// 1) Lunghezza 
function controlloLunghezza($stringa)
{
    if (strlen($stringa) >= 8) {
        return true;
    } else {
        echo "La password non è abbastanza lunga\n";
        return false;
    }
}
// $primaRegola = controlloLunghezza($password);
// var_dump($primaRegola);

// 2) Maiuscole
function controlloMaiuscole($stringa)
{
    for ($i = 0; $i < strlen($stringa); $i++) {
        if (ctype_upper($stringa[$i])) {
            return true;
        }
    }
    echo "La password non contiene lettere maiuscole\n";
    return false;
}
// $secondaRegola = controlloMaiuscole($password);
// var_dump($secondaRegola);

// 3) Numeri
function controlloNumeri($stringa)
{
    for ($i = 0; $i < strlen($stringa); $i++) {
        if (is_numeric($stringa[$i])) {
            return true;
        }
    }
    echo "La password non contiene numeri\n";
    return false;
}
// $terzaRegola = controlloNumeri($password);
// var_dump($terzaRegola);

// 4) Caratteri speciali
function controlloCaratteriSpeciali($stringa)
{
    $caratteriSpeciali = ['!', '@', '$', '?'];
    for ($i = 0; $i < strlen($stringa); $i++) {
        if (in_array($stringa[$i], $caratteriSpeciali)) {
            return true;
        }
    }
    echo "La password non contiene caratteri speciali\n";
    return false;
}
// $quartaRegola = controlloCaratteriSpeciali($password);
// var_dump($quartaRegola);

function controlloPassword($stringa)
{
    $primaRegola = controlloLunghezza($stringa);
    $secondaRegola = controlloMaiuscole($stringa);
    $terzaRegola = controlloNumeri($stringa);
    $quartaRegola = controlloCaratteriSpeciali($stringa);

    if ($primaRegola && $secondaRegola && $terzaRegola && $quartaRegola) {
        echo "La password è valida\n";
        return true;
    } else {
        return $primaRegola && $secondaRegola && $terzaRegola && $quartaRegola;
    }
}

do {
    $password = readline("Inserisci la tua password: \n");
} while (!controlloPassword($password));
