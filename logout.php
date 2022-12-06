<?php
session_start();
	session_destroy();

	echo "<script>";
		echo "window.location.assign('login.php')";
	echo "</script>";
?>