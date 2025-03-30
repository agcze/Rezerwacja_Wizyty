<?php
$host='127.0.0.1:3308';
$user='root';
$pass='';
$db='fryzjer';

$sql= new mysqli($host,$user,$pass,$db);
$sql->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
$sql->query("SET CHARSET utf8");




?>