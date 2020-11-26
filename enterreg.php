<?php
session_start();
if(!isset($_SESSION['registration']['fname'])&&(!isset($_SESSION['registration']['idno']))){
	header("Location:index.php?page=registration.php");
}
	
	
?>