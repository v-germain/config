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

    public function loadPSU()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, brand, name, descr, wattage, modular, price FROM alimentation ORDER BY price DESC');
        return $req;
    }

    public function loadCase()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, brand, name, descr, size, price FROM boitier ORDER BY price DESC');
        return $req;
    }

    public function loadGraph()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, brand, name, descr, chipset, memory, price FROM cartegraphique ORDER BY price DESC');
        return $req;
    }

    public function loadMB()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, brand, name, descr, format, socket, price FROM cartemere ORDER BY price DESC');
        return $req;
    }

    public function loadHD()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, brand, name, descr, cache, price FROM disquedur ORDER BY price DESC');
        return $req;
    }

    public function loadMemory()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, brand, name, descr, speed, size, frequency, price FROM memoire ORDER BY price DESC');
        return $req;
    }
}