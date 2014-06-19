<?php

	if ( !empty($_GET['page']))
	{
		$name = $_GET['page'];
	}
	else 
	{
		$name = 'ajoutactu.php';
	}

	include('header1.php');
	include($name);
	include('footer1.php');

?>