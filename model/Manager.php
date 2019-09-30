<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=project5;charset=utf8', 'v-germain', '');
        return $db;
    }
}