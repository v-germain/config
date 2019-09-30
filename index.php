<?php
require('controller/frontend.php');
try {
    if (isset($_GET['action'])) {
        require('view/homeView.php');
    }
    else {
        require('view/homeView.php');
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}