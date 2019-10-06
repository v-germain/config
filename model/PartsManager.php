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

    public function loadMemory($id)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM memoire ORDER BY price DESC');
        return $req;
    }

    public function viewMemory($id)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM memoire WHERE id = ?');
        return $req;
    }

    public function viewHD($id)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM disquedur WHERE id = ?');
        return $req;
    }

    public function viewMB($id)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM cartemere WHERE id = ?');
        return $req;
    }

    public function viewGraph($id)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM cartegraphique WHERE id = ?');
        return $req;
    }

    public function viewCase($id)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM boitier WHERE id = ?');
        return $req;
    }

    public function viewPSU($id)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM alimentation WHERE id = ?');
        return $req;
    }

    public function viewCPU($id)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM processeur WHERE id = ?');
        return $req;
    }
}