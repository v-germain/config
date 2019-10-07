<?php

require_once(__DIR__ . '/../model/Manager.php');
require_once(__DIR__ . '/../model/PartsManager.php');
require_once(__DIR__ . '/../model/MemberManager.php');

function listConfig()
{
    $partsManager = new PartsManager();
    $partsData = $partsManager->loadConfig();
    require('view/frontend/homeView.php');
}

function listCPU()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadCPU();
    require('view/frontend/parts/processorView.php');
}

function listPSU()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadPSU();
    require('view/frontend/parts/powerSupplyView.php');
}

function listCase()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadCase();
    require('view/frontend/parts/caseView.php');
}

function listGraph()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadGraph();
    require('view/frontend/parts/videoCardView.php');
}

function listMB()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadMB();
    require('view/frontend/parts/motherBoardView.php');
}

function listHD()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadHD();
    require('view/frontend/parts/hardDriveView.php');
}

function listMemory()
{
    $partsManager = new PartsManager();
    $partData = $partsManager->loadMemory();
    require('view/frontend/parts/memoryView.php');
}

function viewMemory($id)
    {
        $partsManager = new PartsManager();
        $partData = $partsManager->viewMemory($id);
        require(__DIR__ . '/../view/frontend/parts/memoryCommentView.php');
        return $partData;
    }

function viewHD($id)
    {
        $partsManager = new PartsManager();
        $partData = $partsManager->viewHD($id);
        require(__DIR__ . '/../view/frontend/parts/hardDriveCommentView.php');
        return $partData;
    }

function viewMB($id)
    {
        $partsManager = new PartsManager();
        $partData = $partsManager->viewMB($id);
        require(__DIR__ . '/../view/frontend/parts/motherBoardCommentView.php');
        return $partData;
    }

function viewGraph($id)
    {
        $partsManager = new PartsManager();
        $partData = $partsManager->viewGraph($id);
        require(__DIR__ . '/../view/frontend/parts/videoCardCommentView.php');
        return $partData;
    }

function viewCase($id)
    {
        $partsManager = new PartsManager();
        $partData = $partsManager->viewCase($id);
        require(__DIR__ . '/../view/frontend/parts/caseCommentView.php');
        return $partData;
    }

function viewPSU($id)
    {
        $partsManager = new PartsManager();
        $partData = $partsManager->viewPSU($id);
        require(__DIR__ . '/../view/frontend/parts/powerSupplyCommentView.php');
        return $partData;
    }

function viewCPU($id)
    {
        $partsManager = new PartsManager();
        $partData = $partsManager->viewCPU($id);
        require(__DIR__ . '/../view/frontend/parts/processorCommentView.php');
        return $partData;
    }

function addCommentProcesseur($idPross, $idContent, $idUser)
{
    $partsManager = new PartsManager();
    $affectedLines = $partsManager->addCommentProcesseur($idPross, $idContent, $idUser);
}

function addCommentCarteGraphique($idGraph, $idContent, $idUser)
{
    $partsManager = new PartsManager();
    $affectedLines = $partsManager->addCommentCarteGraphique($idGraph, $idContent, $idUser);
}

function addCommentAlimentation($idPSU, $idContent, $idUser)
{
    $partsManager = new PartsManager();
    $affectedLines = $partsManager->addCommentAlimentation($idPSU, $idContent, $idUser);
}

function addCommentBoitier($idCase, $idContent, $idUser)
{
    $partsManager = new PartsManager();
    $affectedLines = $partsManager->addCommentBoitier($idCase, $idContent, $idUser);
}

function addCommentCarteMere($idMB, $idContent, $idUser)
{
    $partsManager = new PartsManager();
    $affectedLines = $partsManager->addCommentCarteMere($idMB, $idContent, $idUser);
}

function addCommentDisqueDur($idHD, $idContent, $idUser)
{
    $partsManager = new PartsManager();
    $affectedLines = $partsManager->addCommentDisqueDur($idHD, $idContent, $idUser);
}

function addCommentMemoire($idRAM, $idContent, $idUser)
{
    $partsManager = new PartsManager();
    $affectedLines = $partsManager->addCommentMemoire($idRAM, $idContent, $idUser);
}


function getComments($idPart, $idTable)
{
    $partsManager = new PartsManager();
    $comments = $partsManager->getComments($idPart, $idTable);
    return $comments;
}

function inscription($pseudo, $mail, $password)
{
    $memberManager = new MemberManager();
    $affectedLines = $memberManager->newInscription($pseudo, $mail, $password);
    header('Location: index.php');
}

function mailExist($mail)
{
    $memberManager = new MemberManager();
    $mailExist = $memberManager->verifMail($mail);
    return $mailExist;
}

function passExist($mail)
{
    $memberManager = new MemberManager();
    $passExist = $memberManager->verifPassword($mail);
    return $passExist;
}

function pseudoExist($pseudo)
{
    $memberManager = new MemberManager();
    $pseudoExist = $memberManager->verifPseudo($pseudo);
    return $pseudoExist;
}

function userExist($mail, $password)
{
    $memberManager = new MemberManager();
    $userExist = $memberManager->verifMember($mail, $password);
    return $userExist;
}

function getUser($mail)
{
    $memberManager = new MemberManager();
    $user = $memberManager->getUser($mail);
    return $user;
}

function getProfil($id)
{
    $memberManager = new MemberManager();
    $userProfil = $memberManager->getProfil($id);
    require(__DIR__ . '/../view/frontend/profilView.php');
}

function editPseudo($id, $newPseudo)
{
    $memberManager = new MemberManager();
    $editPseudo = $memberManager->editPseudo($id, $newPseudo);
}

function editMail($id, $newMail)
{
    $memberManager = new MemberManager();
    $editMail = $memberManager->editMail($id, $newMail);
}

function editPass($mail, $newPass)
{
    $memberManager = new MemberManager();
    $editPass = $memberManager->editPass($mail, $newPass);
}
    