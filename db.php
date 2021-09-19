<?php 

$db = new Mysqli;

$db->connect('localhost','root','','todo');

if(!$db){

	echo "success";
}



 ?>