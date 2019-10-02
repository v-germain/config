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
    require('view/processorView.php');
}

function listPSU()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadPSU();
    require('view/powerSupplyView.php');
}

function listCase()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadCase();
    require('view/caseView.php');
}

function listGraph()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadGraph();
    require('view/videoCardView.php');
}

function listMB()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadMB();
    require('view/motherBoardView.php');
}

function listHD()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadHD();
    require('view/hardDriveView.php');
}

function listMemory()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadMemory();
    require('view/memoryView.php');
}

function inscription($pseudo, $mail, $password)
{
    echo('finaltoto');
    $memberManager = new MemberManager();
    $affectedLines = $memberManager->newInscription($pseudo, $mail, $password);
    echo('Votre compte a bien été créé! <a href="#">Se connecter</a>');
}

function mailExist($mail)
{
    $memberManager = new MemberManager();
    $mailexist = $memberManager->verifMail($mail);
    return $mailexist;
}

function pseudoExist($pseudo)
{
    $memberManager = new MemberManager();
    $pseudoexist = $memberManager->verifPseudo($pseudo);
    return $pseudoexist;
}