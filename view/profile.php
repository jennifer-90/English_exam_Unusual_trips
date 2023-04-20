<?php

/*  --------------------  FAIRE UN TABLEAU ----------------------- */


?>

<table>
    <thead>
        <tr>
            <th>Informations</th>
            <th>Values</th>
        </tr>
    </thead>


    <tbody>

<?php
if(!empty($_POST)) {
    /*** ==>   -- Si ces champs ne sont pas vide.... -- ***/

    foreach ($_POST as $key => $values) {
        /*** -- on fait un foreach pour pouvoir renomer nos "$key" avec le double
         * "$"  par les noms de champs tels que "login";"pwd";"email"... * -- ***/
        /*  $$key = $values;  */
        echo '<tr><td>'.$key.'</td><td>'.$values.'</td></tr>';
    }
}
else{
    echo 'Veuillez completer les champs';
    ?>

    </tbody>
</table>











<?php


    /* -------------  Une fois que ça s'arfiche, on remet notre code dans app/create.php -----------------

    puis on attaque:

    1. CONNEXION
    2. QUERY
    3. EXECUTE
    ...


    */




    /*** -- Alors on établit une connexion avec la db:  -- ***/







}


