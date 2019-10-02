<?php

require_once(__DIR__ . './Manager.php');

class MemberManager extends Manager {

    public function verifMail($mail)
    {
        $db = $this->dbConnect();
        $reqmail = $db->prepare('SELECT * FROM members WHERE mail = ?');
        $reqmail->execute(array($mail));
        $mailexist = $reqmail->rowCount();
    }

    public function verifPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $reqpseudo = $db->prepare('SELECT * FROM members WHERE pseudo = ?');
        $reqpseudo->execute(array($pseudo));
        $pseudoexist = $reqpseudo->rowCount();
    }

    public function newInscription($pseudo, $mail, $password)
    {
        $db = $this->dbConnect();
        $inscription = $db->prepare('INSERT INTO members(pseudo, mail, password) VALUES(?, ?, ?)');
        $affectedLines = $inscription->execute(array($pseudo, $mail, $password));
        return $affectedLines;
    }

}