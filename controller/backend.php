<?php

require_once(__DIR__ . '/../model/Manager.php');
require_once(__DIR__ . '/../model/AdminManager.php');

function listUsers($pseudo, $mail)
{
    $adminManager = new AdminManager;
    $affectedLines = $adminManager->getUsers($pseudo, $mail);
    require(__DIR__ . '/../view/backend/adminView.php');
}
