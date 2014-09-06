<?php
	$con = mysql_connect("localhost","root","");
	if(!$con)die("Connot be connected.");
	$dbcon = mysql_select_db("ibiponi",$con);
	if(!$dbcon) die("Cannot be selected.");
?>