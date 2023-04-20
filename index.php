<?php


require_once 'config_const.php';

require_once 'view/header.html';
require_once 'view/menu.php';




require_once 'view/footer.html';


if(isset($_GET['view'])){
    foreach(FILES_EXTENSIONS as $key)
        $file_name= $_GET['view'].$key;

    if(file_exists($file_name)){
        include_once $file_name;
    }
}
