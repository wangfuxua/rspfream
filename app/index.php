<?php
date_default_timezone_set('Asia/Shanghai');
require_once('./../freamwork/Main.php');
$conf=dirname(__FILE__).'/config/config.php';
Main::Run($conf);
Main::$db;