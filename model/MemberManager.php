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

    public function verifPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $reqPseudo = $db->prepare('SELECT * FROM members WHERE pseudo = ?');
        $reqPseudo->execute(array($pseudo));
        $pseudoExist = $reqPseudo->rowCount();
        return $pseudoExist;
    }

    public function verifMember($pseudo, $password)
    {
        $db = $this->dbConnect();
        $reqUser = $db->prepare('SELECT * FROM members WHERE pseudo = ? AND password = ?');
        $reqUser->execute(array($pseudo, $password));
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

    public function getUser($pseudo, $password)
    {
        $db = $this->dbConnect();
        $reqUser = $db->prepare('SELECT * FROM members WHERE pseudo = ? AND password = ?');
        $reqUser->execute(array($pseudo, $password));
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

    public function editMail($id, $newMail)
    {
        $db = $this->dbConnect();
        $editMail = $db->prepare('UPDATE members SET mail = :newMail WHERE id = :id');
        $editMail->execute(array(
            'newMail' => $newMail,
            'id' => $id
        ));
    }
    

}