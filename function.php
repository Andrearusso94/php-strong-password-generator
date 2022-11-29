<?php
/*Milestone 2
Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale */
function generatePassword($lenghtPass, $charctersPass, $numPass, $symbolPass)
{

    $characters = 'abcdefABCDEF';
    $num = '1234567890';
    $symbol = '!"£$%&/()=?^:.,;';

    $charactersLen = strlen($characters);
    $numLen = strlen($num);
    $symbolLen = strlen($symbol);
    $passwordString = '';

    if (isset($charctersPass, $numPass, $symbolPass)) {

        for ($i = 0; strlen($passwordString) < $lenghtPass; $i++) {
            $passwordString .= $num[rand(0, $numLen - 1)];
            $passwordString .= $characters[rand(0, $charactersLen - 1)];
            $passwordString .= $symbol[rand(0, $symbolLen - 1)];
        }
    } elseif (isset($charctersPass, $numPass)) {
        for ($i = 0; strlen($passwordString) < $lenghtPass; $i++) {
            $passwordString .= $num[rand(0, $numLen - 1)];
            $passwordString .= $characters[rand(0, $charactersLen - 1)];
        }
    } elseif (isset($charctersPass, $numPass)) {
        for ($i = 0; strlen($passwordString) < $lenghtPass; $i++) {
            $passwordString .= $num[rand(0, $numLen - 1)];
            $passwordString .= $symbol[rand(0, $symbolLen - 1)];
        }
    } else {
        echo $messege = 'hai sbagliato qualcosa';
    };


    return $passwordString;
    $passwordCreator = isset($_GET["password"], $_GET['numbers'], $_GET['characters'], $_GET['symbol']);
    if ($passwordCreator) {
        generatePassword($_GET["password"], $_GET['num'], $_GET['characters'], $_GET['symbol']);
    }
}
