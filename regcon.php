<?php
session_start();
if(!isset($_SESSION['registration']['fname'])){
	//$_SESSION['registration']['name'] =array();
	$_SESSION['registration']['fname'] = "";
	$_SESSION['registration']['sname'] = "";
	$_SESSION['registration']['tname'] = "";
	$_SESSION['registration']['idno'] = "";
	$_SESSION['registration']['dat'] = "";
	$_SESSION['registration']['phone'] = "";
	$_SESSION['registration']['address'] = "";

	//session_destroy();
}

//$_SESSION['registration']['name'] = array('fname'=> $_POST['fname'],'sname'=>$_POST['sname'],'tname'=>$_POST['tname'],'idno'=>$_POST['idno'],'dat'=>$_POST['dat'],'phone'=>$_POST['phone'],'address'=>$_POST['address']);


?>