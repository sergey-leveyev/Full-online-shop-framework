<?php

define('VG_ACCES', true);


header('Content-Type:text/html;charset-utf-8');
session_status();


require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';

use core\base\exceptions\RouteException;
use core\base\controllers\RouteController;

try{
    RouteController::getInstance();
}catch (RouteException $e){
    exit($e->getMessage());
}