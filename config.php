<?php
 
//mysql user details
mysql_connect('localhost', 'root', 'sky');
mysql_select_db('test');

//admin username
$admin='akashrajputsky';

//Optional Configuration 
$url_home = 'index.php';
$design = 'default';


//initialization
include('init.php');
?>