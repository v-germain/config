<?php

require_once(__DIR__ . './Manager.php');

class MemberManager extends Manager {

    public function verifMail($mail)
    {
        $db = $this->dbConnect();
        $reqMail = $db->prepare('SELECT * FROM members WHERE mail = ?');
        $reqMail->execute(array($mail));
        $mailExist = $reqMail->rowCount();
        return $mailExist;
    }

    public function verifPassword($mail)
    {
        $db = $this->dbConnect();
        $reqPass = $db->prepare('SELECT password FROM members WHERE mail = ?');
        $reqPass->execute(array($mail));
        $passExist = $reqPass->fetch();
        return $passExist;
    }

    public function verifPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $reqPseudo = $db->prepare('SELECT * FROM members WHERE pseudo = ?');
        $reqPseudo->execute(array($pseudo));
        $pseudoExist = $reqPseudo->rowCount();
        return $pseudoExist;
    }

    public function verifMember($mail, $password)
    {
        $db = $this->dbConnect();
        $reqUser = $db->prepare('SELECT * FROM members WHERE mail = ? AND password = ?');
        $reqUser->execute(array($mail, $password));
        $userExist = $reqUser->rowCount();
        return $userExist;
    }

    public function newInscription($pseudo, $mail, $password)
    {
        $db = $this->dbConnect();
        $inscription = $db->prepare('INSERT INTO members(pseudo, mail, password) VALUES(?, ?, ?)');
        $affectedLines = $inscription->execute(array($pseudo, $mail, $password));
        return $affectedLines;
    }

    public function getUser($mail)
    {
        $db = $this->dbConnect();
        $reqUser = $db->prepare('SELECT * FROM members WHERE mail = ?');
        $reqUser->execute(array($mail));
        $user = $reqUser->fetch();
        return $user;
    }

    public function getProfil($id)
    {
        $db = $this->dbConnect();
        $reqProfil = $db->prepare('SELECT id, pseudo, mail FROM members WHERE id = ?');
        $reqProfil->execute(array($id));
        $userProfil = $reqProfil->fetch();
        return $userProfil;  
    }

    public function editPseudo($id, $newPseudo)
    {
        $db = $this->dbConnect();
        $editPseudo = $db->prepare('UPDATE members SET pseudo = :newPseudo WHERE id = :id');
        $editPseudo->execute(array(
            'newPseudo' => $newPseudo,
            'id' => $id
        ));
    }

    public function editPass($mail, $newPass)
    {
        $db = $this->dbConnect();
        $editMail = $db->prepare('UPDATE members SET password = :newPass WHERE mail = :mail');
        $editMail->execute(array(
            'newPass' => $newPass,
            'mail' => $mail
        ));
    }
    
}