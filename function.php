<?php
/*Milestone 2
Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale */
function generatePassword($lenghtPass)
{
    $characters = '.,!=_+*0123456789abcdefABCDEF';
    $charactersLen = strlen($characters);
    $passwordString = '';
    for ($i = 0; $i < $lenghtPass; $i++) {
        $passwordString .= $characters[rand(0, $charactersLen - 1)];
    }
    return $passwordString;
}
$passwordCreator = isset($_GET["password"]);
if ($passwordCreator) {
    generatePassword($_GET["password"]);
}
