<?php

require_once(__DIR__ . './Manager.php');

class AdminManager extends Manager
{
    public function getUsers()
    {
        $db = $this->dbConnect();
        $getUsers = $db->prepare('SELECT * FROM members');
        $getUsers->execute(array());
        return $getUsers;
    }

    public function deleteUsers($id)
    {
        $db = $this->dbConnect();
        $delUser = $db->prepare('DELETE FROM members WHERE id = ?');
        $delUser->execute(array($id));
    }

    public function deleteComment($idComment)
    {
        $db = $this->dbConnect();
        $delComment = $db->prepare('DELETE FROM comments WHERE idComment = ?');
        $delComment->execute(array($idComment));
    }

}