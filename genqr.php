<?php
/*
require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
$qrCode = new QrCode('life is too short to be generating QR codes');
header("Content-Type: image/png");
echo $qrCode->writeString();*/
//header("Content-Type: image/png");
//require_once('src/QrCode.php');
//header("Content-Type: image/png");
require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
$qr = new QrCode();
$qr->setText("qrCode 123@");
//->setSize("200")
//->render();

echo $qr->writeString()
?>
<!--<img src="genqr.php" alt="">-->