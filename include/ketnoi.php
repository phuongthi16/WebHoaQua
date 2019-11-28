<?php
	$ung=mysql_connect("localhost","root","") or die('Khong The Ket Noi Voi May Chu');
	$strSQL=mysql_select_db('traicay',$ung);
	mysql_query("SET NAMES 'utf8'");
?>