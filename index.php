<?php


require_once 'config_const.php';
require_once 'lib/output_fct.php';

require_once 'view/header.html';
require_once 'view/menu.php';










if(!empty($_GET['view'])){
    getContent($_GET['view']);
}

require_once 'view/footer.html';

