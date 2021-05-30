<?php
$root = $_SERVER['DOCUMENT_ROOT']; 
$host = $_SERVER['HTTP_HOST'];

define('ROOT', $root.'/askaanBiiBanque/app/');
define('HOST', 'http://'.$host.'/askaanBiiBanque/');

define('CONFIG', ROOT.'config/');
define('CONTROLLER', ROOT.'controller/');
define('MODEL', ROOT.'model/');
define('VIEW', ROOT.'view/');

define('PUBLICS', HOST.'public/');
