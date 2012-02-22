<?php 

// LANGUAGE SWITCHER

// See if language has changed
if(isset($_GET['lang'])){
	setcookie("lang", $_GET['lang']);
	header("Location:". $_SERVER['SCRIPT_NAME']);
}

// Check language from cookie
if(isset($_COOKIE['lang'])){
	$lang = $_COOKIE['lang'];
}else {
	$_COOKIE['lang'] = "en";
	$lang = "en";
}

?>