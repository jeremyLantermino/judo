<?php

if ( !empty($_GET['page']) ) {
$name = $_GET['page'] . '.php';
}
else {
$name = 'accueil.php';
}

include('header.php');
include($name);
include('footer.php');

?>