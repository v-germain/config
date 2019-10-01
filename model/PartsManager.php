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
        $req = $db->query('SELECT id, brand, name, descr, corecount, coreclock, socket, price FROM processeur ORDER BY price DESC');
        return $req;
    }
}