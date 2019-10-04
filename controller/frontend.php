<?php

require_once(__DIR__ . '/../model/Manager.php');
require_once(__DIR__ . '/../model/PartsManager.php');
require_once(__DIR__ . '/../model/MemberManager.php');

function listConfig()
{
    $partsManager = new PartsManager();
    $partsData = $partsManager->loadConfig();
    require('view/homeView.php');
}

function listCPU()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadCPU();
    require('view/parts/processorView.php');
}

function listPSU()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadPSU();
    require('view/parts/powerSupplyView.php');
}

function listCase()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadCase();
    require('view/parts/caseView.php');
}

function listGraph()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadGraph();
    require('view/parts/videoCardView.php');
}

function listMB()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadMB();
    require('view/parts/motherBoardView.php');
}

function listHD()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadHD();
    require('view/parts/hardDriveView.php');
}

function listMemory()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadMemory();
    require('view/parts/memoryView.php');
}

function inscription($pseudo, $mail, $password)
{
    $memberManager = new MemberManager();
    $affectedLines = $memberManager->newInscription($pseudo, $mail, $password);
    echo('Votre compte a bien été créé! <a href="index.php?action="displayConnexion">Se connecter</a>');
}

function mailExist($mail)
{
    $memberManager = new MemberManager();
    $mailExist = $memberManager->verifMail($mail);
    return $mailExist;
}

function pseudoExist($pseudo)
{
    $memberManager = new MemberManager();
    $pseudoExist = $memberManager->verifPseudo($pseudo);
    return $pseudoExist;
}

function userExist($pseudo, $password)
{
    $memberManager = new MemberManager();
    $userExist = $memberManager->verifMember($pseudo, $password);
    return $userExist;
}

function getUser($pseudo, $password)
{
    $memberManager = new MemberManager();
    $user = $memberManager->getUser($pseudo, $password);
    return $user;
}

function getProfil($id)
{
    $memberManager = new MemberManager();
    $userProfil = $memberManager->getProfil($id);
    require(__DIR__ . '/../view/profilView.php');
}