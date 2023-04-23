<?php

$url = 'index.php?view=view/create';


/* -- Création du code qui va permettre de récupérer les infos du formulaire et de créer un nouveau user dans la DB -- */



/********** Si les champs ne sont pas vide ... **********/

if(!empty($_POST['login']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !empty($_POST['pwd'])){

    /* Concernant le champs "email" --> "filter_var" --> permet de valider si une chaîne de caractères représentant une
    adresse e-mail est valide ou non.
    Le 2ème paramètres de cette fct native:
        --> FILTER_VALIDATE_EMAIL = signifie que la fct va valider la valeur selon les règles de validation pour
            une adresse e-mail. */





    if (userExists('login', $_POST['login'])) {
        $_SESSION['alert'] = 'L\'utilisateur existe déjà!';
        header('Location: ' . $url);
        die;
    }






    /* -- foreach qui permet de renomer les $key par le nom des champs (login,pwd,email... via le double "$" de "key"-- */
    foreach($_POST as $key => $values){
        $$key = $values;
    }

                /*********** -- équivaut à : -- ********
                *    $login = $_POST['login'];         *
                *    $pwd = $_POST['pwd'];             *
                *    $email = $_POST['email'];         *
                *    $country = $_POST['country'];     *
                ****************************************/



    /********** alors on établit la connexion avec la db...(Toujours dans le "if") **********/

    /* 1) -- --- --- --- CONNEXION --- --- --- */

    /* -- On rappel la "global $connect" pour vérifier si on a une connexion avec la db -- */
    $connect = connect();   /* -- Ou -->   $connect = connect(); -- */

    /* 2) -- --- --- --- PREPARATION DE LA REQUETE --- --- --- */

    /* -- On affecte à une nouvelle variable la requête SQL -- */
    $sql = "INSERT INTO user (login, email, pwd, created) VALUES ( ?, ?, ?, NOW())";


    /* -- On affecte à une autre variable des paramètres qui seront utilisés lors de l'exécution*/
    /* -- A) - "trim" = Enlève les blancs au début & à la fin d'une chaine de caractère (ex: faute de frappe par le user
    -- */
    /* -- B) - "password_hash" comprends 2 paramètres:
                --> "la valeur qu'on veut modifier
                --> "la manière dont on veut le modifier
    */
    $param = [
            trim($login),
            $email,
            password_hash($pwd, PASSWORD_DEFAULT)
    ];


    /* 3) -- --- --- --- QUERY --- --- --- */

    /* -- On affecte à une nouvelle variable "$insert" notre fonction de connexion qui va devenir un PDOStatement -- */
    /* -- $connect est une variable de type objet, ce qui nous peremt de lui donner une méthode -- */
    /* -- !!! prepare() = Méthode d'objet pour éviter les injection sql
            --> dans les () - on met notre requête sql -- */
    $insert = $connect -> prepare($sql);


    /* 4) -- --- --- --- EXECUTION --- --- --- */

    /* -- "$insert" est un PDOStatement = représente une instruction SQL préparée qui est prête à être exécutée sur une
    base de données. -- */

    /* -- L'utilisation de PDOStatement permet de prévenir les attaques de sécurité comme les injections SQL en
    empêchant les utilisateurs malveillants d'injecter du code malveillant dans tes requêtes SQL. -- */

    /* -- On exécute tout -- */
    $insert->execute($param);


    /* 5) -- --- --- --- RECUPERATION DES DONNEES --- --- --- */

    if($insert->rowCount()){

        $user_id = $connect->lastInsertId();
        /* --  lastInsertId():
                    --> Récupère l'id généré lors de l'insertion d'une nouvelle ligne dans une table de la db
                    --> On utilisera cette nvlle variable pour récupérer une photo envoyé par l'utilisateur    -- */

        /* -- echo 'Vous êtes inscrit'; -- -->  On va le remplacer par un message via la superglobal: "$_SESSION" -- */
        $_SESSION['alert'] = 'Utilisateur '. $login . 'a été créé avec succès';
        $_SESSION['alert-color'] = 'success';
        $url = 'index.php?view=view/login';







    } else{
        /* -- echo 'problème de création d\'utilisateur, veuillez recommencer'; -- */
        $_SESSION['alert']= ' problème de création d\'utilisateur, veuillez recommencer';
        }



} /********** Mais si c'est ces champs sont vides.... (Toujours dans le tout 1er "if") **********/
else{
    /* -- echo'Veuillez complèter les champs'; --*/
    $_SESSION['alert'] = 'Veuillez complèter les champs';
    }
header('Location: ' . $url);
die;



