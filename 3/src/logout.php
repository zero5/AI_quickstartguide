<?php
	session_start();
	session_unset($_SESSION['login']);

	header("Refresh:0; url=login.php");
?>