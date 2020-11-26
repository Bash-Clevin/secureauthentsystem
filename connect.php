<?php
$errors =array();
$conn= mysqli_connect('localhost','root','','secauthsys');
if(!$conn)
{
	die("Database Connection Failed". mysql_error());
}
else{
	/*LOGIN FROM LOGIN PAGE*/
	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$pass = mysqli_real_escape_string($conn,$_POST['pass']);
		if(empty($username)){
			array_push($errors, "Please enter Username");
		}
		if(empty($pass)){
			array_push($errors, "Please enter password");
		}
		if(count($errors)==0){
			//$password=md5($pass);

			$query="select*from root where email='$username' and pass ='$pass'";
			$result =mysqli_query($conn,$query);
				if(mysqli_num_rows($result)==1){
					header('location:admin.php');
				}else{
					array_push($errors, "wrong username or Password");
				}
		}

	}
	/***sign-up****/

	// if(isset($_POST['signup'])){
	// 	$fname = mysqli_escape_string($conn,$_POST['fname']);
	// 	$sname = mysqli_escape_string($conn,$_POST['sname']);
	// 	$mail =mysqli_escape_string($conn,$_POST['email']);
	// 	$pass =mysqli_escape_string($conn,$_POST['pass']);
	// 	$pass2 =mysqli_escape_string($conn,$_POST['pass2']);
	// 	$role ='level1';
	// 	$status='0';
	// 	$unqhash=mysqli_escape_string(md5(rand(0,10000)));
	// 	$link="http://localhost/secureauthsystem/user/registration.php?email='.$mail.'&hash='.$unqhash";

	// 	if($pass !=$pass2){
	// 		array_push($errors,"passwords don't match");
	// 	}
	// 	$sql ="select*from clients where email='$mail'";
	// 	$result=mysqli_query($conn,$sql);
	// 	$rescheck=mysqli_num_rows($result);
	// 		if($rescheck >0){
	// 			array_push($errors, "user alredy exists");
	// 		}
		
	// 		if(count($errors)==0){
	// 				$pass0 =md5($pass);
	// 				$sql = "insert into clients(fname,sname,email,passwd,role,status,hash)values('$fname','$sname','$mail','$pass0','$role','$status','$unqhash')";
	// 				mysqli_query($conn,$sql);
	// 			}else{
	// 				die(mysqli_error());
	// 			}
	// //sendmail			
	// $to=$mail;
	// $subject='Your account activation';
	// $message='Hello '.$fname.', 
	// please use the link below to continue setting up your e-Authentication Account:
	// '.$link.'';

	// if(mail($to,$subject,$message)){
	// 	array_push($errors, "Mail sent ");
	// }
	// else{
	// 	array_push($errors, "Mail not sent");
	// }
	
	
	//level 2 signup

// 	if(isset($_POST['orgsignup'])){
// 		DEFINE("OPEN_SSL_CONF_PATH", "E:/xampp/apache/conf/openssl.cnf");  //replace path with your path
// 		$config=array("config" => OPEN_SSL_CONF_PATH);
// 		$countyn = mysqli_escape_string($conn,$_POST['county']);
// 		$local = mysqli_escape_string($conn,$_POST['city']);
// 		$orgname = mysqli_escape_string($conn,$_POST['company']);
// 		$comname = mysqli_escape_string($conn,$_POST['comname']);
// 		$email=mysqli_escape_string($conn,$_POST['mail']);
		
// 		$dn = array(
//     "countryName" => "Kenya",
//     "stateOrProvinceName" => "$countyn",
//     "localityName" => "$local",
//     "organizationName" => "$orgname",
//     "organizationalUnitName" => "",
//     "commonName" => "$comname",
//     "emailAddress" => "$email"
// );
// // Generate a new private (and public) key pair
// 	$privkey = openssl_pkey_new($config);

// // Generate a certificate signing request
// $csr = openssl_csr_new($dn, $privkey, $config);
// // Generate a self-signed cert, valid for 365 days
// $x509 = openssl_csr_sign($csr, null, $privkey, $days=365,$config);

// 	}

	
}
?>