<?php


/********** -- Création de notre fonction DE CONNEXION [- "connect()" -] *********/

function connect(){

    global $connect;                    /*** --- Création de notre variable rattachée à notre fonction connect --- ***/
    if(is_a($connect, 'PDO')){    /*** ---Si $connect est un objet(=PDO)...   --- ***/
        return $connect;                /*** --- alors on "charge" cette variable  --- ***/
    } else {                            /*** --- sinon...   --- ***/

        try{                            /*** --- try = essaye ---  ***/
            $connect= new PDO('mysql: dbname='.DB_NAME.'; host'.DB_HOST.';charset=utf8', DB_USER,DB_PWD);


        } catch(PDOException $e){           /*** --- on met "$e" pour le "e" de exception --> PDOException ***/
            die('Erreur'.$e->getMessage()); /*** --- die = on stop tout ! --> Mets fin au script qui est en court.
                                            --> on met un message "Erreur" qu'on concatène avec notre " $e "qui est un
                                            "PDOException = classe objet
                                               + "getMessage qui va afficher l'erreur avec l'explication   ---***/

        }
        return $connect;  /*** si le "try" se passe bien --> return $connect  ***/
    }
}