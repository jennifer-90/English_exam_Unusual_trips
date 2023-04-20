<?php

/* getContent = Obtenir du contenu */

/********************* -- AVANT -- ******************
 *                                                  *
 *                                                  *
 *  if(isset($_GET['view'])){                       *
 *      foreach(FILES_EXTENSIONS as $key)           *
 *        $file_name= $_GET['view'].$key;           *
 *                                                  *
 *      if(file_exists($file_name)){                *
 *          include_once $file_name;                *
 *      }                                           *
 *   }                                              *
 *                                                  *
 ************ -- APRES _ CREATION FCT -- ***********/

/* -- On remplace ($_GET ['view'] par notre variable "$string" -- / */

function getContent(string $string):void{

    if(is_array(FILES_EXTENSIONS)){
        foreach(FILES_EXTENSIONS as $key){
            $file_name= $string.$key;

            if(file_exists($file_name)){
                include_once $file_name;
            }
        }
    }
}
#######################################################################################################################
/*  1) Nous laissons juste la partie : "   if (isset($_GET['view'])){ }   " -->  dans le fichier "index.php"
 *  2) Et dans les {} nous ferons appel à notre fonction "getContent" */
#######################################################################################################################

