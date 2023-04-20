<?php


if(!empty($_POST['login'] && !empty($_POST['email']) && !empty($_POST['pwd']))) {
    /*** ==>   -- Si ces champs ne sont pas vide.... -- ***/

    foreach ($_POST as $key => $values) {
        /*** -- on fait un foreach pour pouvoir renomer nos "$key" avec le double
         * "$"  par les noms de champs tels que "login";"pwd";"email"... * -- ***/
        /*  $$key = $values;  */
        echo $key . '=>' . $values;
    }
}
    else{
        echo 'Veuillez completer les champs';







    /*** -- Alors on établit une connexion avec la db:  -- ***/







}


