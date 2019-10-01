<?php

require_once(__DIR__ . '/../model/Manager.php');
require_once(__DIR__ . '/../model/PartsManager.php');

function listConfig()
{
    $partsManager = new PartsManager();
    $partsData = $partsManager->loadConfig();
    require('view/homeView.php');
}

function listCPU()
{
    $partsManager = new PartsManager();
    $cpuData = $partsManager->loadCPU();
    require('view/ProcessorView.php');
}