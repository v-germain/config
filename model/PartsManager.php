<?php

require_once(__DIR__ . './Manager.php');

class PartsManager extends Manager
{
    public function loadConfig()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT name FROM config');
        return $req;
    }

    public function loadCPU()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM processeur ORDER BY price DESC');
        return $req;
    }

    public function loadPSU()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM alimentation ORDER BY price DESC');
        return $req;
    }

    public function loadCase()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM boitier ORDER BY price DESC');
        return $req;
    }

    public function loadGraph()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM cartegraphique ORDER BY price DESC');
        return $req;
    }

    public function loadMB()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM cartemere ORDER BY price DESC');
        return $req;
    }

    public function loadHD()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM disquedur ORDER BY price DESC');
        return $req;
    }

    public function loadMemory()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM memoire ORDER BY price DESC');
        return $req;
    }

    public function viewMemory($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM memoire WHERE id = :id');
        $req->execute(array(
            'id' => $id
        ));
        $partData = $req->fetch();
        return $partData;
    }

    public function viewHD($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM disquedur WHERE id = :id');
        $req->execute(array(
            'id' => $id
        ));
        $partData = $req->fetch();
        return $partData;
    }

    public function viewMB($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM cartemere WHERE id = :id');
        $req->execute(array(
            'id' => $id
        ));
        $partData = $req->fetch();
        return $partData;
    }

    public function viewGraph($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM cartegraphique WHERE id = :id');
        $req->execute(array(
            'id' => $id
        ));
        $partData = $req->fetch();
        return $partData;
    }

    public function viewCase($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM boitier WHERE id = :id');
        $req->execute(array(
            'id' => $id
        ));
        $partData = $req->fetch();
        return $partData;
    }

    public function viewPSU($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM alimentation WHERE id = :id');
        $req->execute(array(
            'id' => $id
        ));
        $partData = $req->fetch();
        return $partData;
    }

    public function viewCPU($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM processeur WHERE id = :id');
        $req->execute(array(
            'id' => $id
        ));
        $partData = $req->fetch();
        return $partData;
    }

    public function addCommentProcesseur($idPross, $idContent, $idUser)
    {
        $idTable = 1;
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO comments(idPart, content, commentDate, idTable, idUser) VALUES(:idPross, :idContent, NOW(), :idTable, :idUser)');
        $comment->execute(array(
            'idPross' => $idPross,
            'idContent' => $idContent,
            'idTable' => $idTable,
            'idUser' => $idUser
        ));
    }

    public function addCommentCarteGraphique($idGraph, $idContent, $idUser)
    {
        $idTable = 2;
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO comments(idPart, content, commentDate, idTable, idUser) VALUES(:idGraph, :idContent, NOW(), :idTable, :idUser)');
        $comment->execute(array(
            'idGraph' => $idGraph,
            'idContent' => $idContent,
            'idTable' => $idTable,
            'idUser' => $idUser
        ));
    }

    public function addCommentAlimentation($idPSU, $idContent, $idUser)
    {
        $idTable = 3;
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO comments(idPart, content, commentDate, idTable, idUser) VALUES(:idPSU, :idContent, NOW(), :idTable, :idUser)');
        $comment->execute(array(
            'idPSU' => $idPSU,
            'idContent' => $idContent,
            'idTable' => $idTable,
            'idUser' => $idUser
        ));
    }

    public function addCommentBoitier($idCase, $idContent, $idUser)
    {
        $idTable = 4;
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO comments(idPart, content, commentDate, idTable, idUser) VALUES(:idCase, :idContent, NOW(), :idTable, :idUser)');
        $comment->execute(array(
            'idCase' => $idCase,
            'idContent' => $idContent,
            'idTable' => $idTable,
            'idUser' => $idUser
        ));
    }

    public function addCommentCarteMere($idMB, $idContent, $idUser)
    {
        $idTable = 5;
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO comments(idPart, content, commentDate, idTable, idUser) VALUES(:idMB, :idContent, NOW(), :idTable, :idUser)');
        $comment->execute(array(
            'idMB' => $idMB,
            'idContent' => $idContent,
            'idTable' => $idTable,
            'idUser' => $idUser
        ));
    }

    public function addCommentDisqueDur($idHD, $idContent, $idUser)
    {
        $idTable = 6;
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO comments(idPart, content, commentDate, idTable, idUser) VALUES(:idHD, :idContent, NOW(), :idTable, :idUser)');
        $comment->execute(array(
            'idHD' => $idHD,
            'idContent' => $idContent,
            'idTable' => $idTable,
            'idUser' => $idUser
        ));
    }

    public function addCommentMemoire($idRAM, $idContent, $idUser)
    {
        $idTable = 7;
        $db = $this->dbConnect();
        $comment = $db->prepare('INSERT INTO comments(idPart, content, commentDate, idTable, idUser) VALUES(:idRAM, :idContent, NOW(), :idTable, :idUser)');
        $comment->execute(array(
            'idRAM' => $idRAM,
            'idContent' => $idContent,
            'idTable' => $idTable,
            'idUser' => $idUser
        ));
    }

    public function getComments($idPart, $idTable)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT comments.*, members.pseudo FROM comments JOIN members ON comments.idUser = members.id WHERE idTable = :idTable AND idPart = :idPart');
        $comments->execute(array(
            'idTable' => $idTable,
            'idPart' => $idPart
        )); 
        return $comments;
    }
}