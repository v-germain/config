<?php

require_once('./Manager.php');

class HomePageManager extends Manager
{
    public function loadHomePage()
    {
        $db = $this->dbConnect();
        
    }
}