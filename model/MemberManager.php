<?php

require_once(__DIR__ . './Manager.php');

class MemberManager extends Manager {

    public function verifMail($mail)
    {
        $db = $this->dbConnect();
        $reqMail = $db->prepare('SELECT * FROM members WHERE mail = ?');
        $reqMail->execute(array($mail));
        $mailExist = $reqMail->rowCount();
    }

    public function verifPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $reqPseudo = $db->prepare('SELECT * FROM members WHERE pseudo = ?');
        $reqPseudo->execute(array($pseudo));
        $pseudoExist = $reqPseudo->rowCount();
    }

    public function verifMember($pseudo, $password)
    {
        $db = $this->dbConnect();
        $reqUser = $db->prepare('SELECT * FROM members WHERE pseudo = ? AND mail = ?');
        $reqUser->execute(array($pseudo, $password));
        $userExist = $reqUser->rowCount();
    }

    public function newInscription($pseudo, $mail, $password)
    {
        $db = $this->dbConnect();
        $inscription = $db->prepare('INSERT INTO members(pseudo, mail, password) VALUES(?, ?, ?)');
        $affectedLines = $inscription->execute(array($pseudo, $mail, $password));
        return $affectedLines;
    }

    public function userView()
    {
        $db = $this->dbConnect();
        
    }

}