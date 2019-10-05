<?php

require_once(__DIR__ . './Manager.php');

class AdminManager extends Manager
{
    public function getUsers($pseudo, $mail)
    {
        $db = $this->dbConnect();
        $getUsers = $db->prepare('SELECT pseudo, mail FROM members');
        $affectedLines = $getUsers->execute(array($pseudo, $mail));
        return $affectedLines;
    }


}