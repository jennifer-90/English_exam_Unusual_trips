<?php

session_name('WEB' . date('Ymd'));
session_start(['cookie_lifetime' => 3600]);

require_once 'config.php';
require_once 'lib/output_fct.php';
require_once 'lib/pdo.php';

$connect = connect();

require_once 'view/header.html';
require_once 'view/menu.php';



if (!empty($_SESSION['alert'])) {
    if (!empty($_SESSION['alert-color'])
        && in_array($_SESSION['alert-color'], ['danger', 'info', 'success', 'warning']) // white-list
    ) {
        $alertColor = $_SESSION['alert-color'];
        unset($_SESSION['alert-color']);
    } else {
        $alertColor = 'danger';
    }
    echo '<div class="alert alert-' . $alertColor . '">' . $_SESSION['alert'] . '</div>';
    // only once
    unset($_SESSION['alert']);
}





############################ -- Call to function for files && extensions -- ####################################

if(!empty($_GET['view'])){
    getContent($_GET['view']);
}
################################################################################################################

require_once 'view/footer.html';

