<?php

require_once(__DIR__ . '/../model/Manager.php');
require_once(__DIR__ . '/../model/AdminManager.php');

function listUsers()
{
    $adminManager = new AdminManager;
    $getUsers = $adminManager->getUsers();
    require(__DIR__ . '/../view/backend/adminView.php');
}

function delUser($id)
{
    $adminManager = new AdminManager;
    $delUser = $adminManager->deleteUsers($id);
    echo utf8_decode('Membre supprimé! <a href="index.php?action=admin">Retour</a>');
}
