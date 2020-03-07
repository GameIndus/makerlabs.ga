<?php 
session_start();
setlocale (LC_TIME, 'fr_FR.utf8','fra');
ini_set('memory_limit', '-1'); 

$page = (isset($_GET['p'])&&!empty($_GET['p'])) ? addslashes(htmlentities($_GET['p'])) : 'index';
if($page=='home') $page = 'index';

$page = (file_exists('views/'.$page.'.php')) ? $page : '404';
$content_for_layout = false;

// Custom vars
$header = ($page=='index') ? true : false;


ob_start();
require 'views/'.$page.'.php';
$content_for_layout = ob_get_clean();

require 'core/template.php';


?>