<?php
    session_start();
    define('APP_ROOT', dirname(__FILE__));
    define('DS', DIRECTORY_SEPARATOR);
    require_once(APP_ROOT. DS . 'config' . DS . 'config.php');
    // require_once(APP_ROOT . DS . 'DBCONN.php');
    // require_once(APP_ROOT. DS . 'actions' . DS . 'functions.php');
?>