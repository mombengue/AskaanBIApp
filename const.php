<?php
$root = $_SERVER['DOCUMENT_ROOT']; 
$host = $_SERVER['HTTP_HOST'];

define('ROOT', $root.'/askaanbi/app/');
define('HOST', 'http://'.$host.'/askaanbi/');

define('CONFIG', ROOT.'config/');
define('CONTROLLER', ROOT.'controller/');
define('MODEL', ROOT.'model/');
define('VIEW', ROOT.'view/');

define('PUBLICS', HOST.'public/');
