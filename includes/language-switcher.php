<?php 

// LANGUAGE SWITCHER

// See if language has changed via url variable
if(isset($_GET['lang'])){
	setcookie("lang", $_GET['lang']);
	header("Location: http://".$_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']);
}

// Get language from cookie
if(isset($_COOKIE['lang'])){
	$lang = $_COOKIE['lang'];
}else {
	$_COOKIE['lang'] = "en";
	$lang = "en";
}

?>