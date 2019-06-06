<?php

require_once('C:\xampp\htdocs\SEASS2\regController.php');


@$op=$_REQUEST['op'];

$regController=new regController();

switch ($op) {
	case 'Register':
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		if($regController->create($firstname,$lastname,$username,$email,$password)==True){
			header("Location:success.php");
		}
		else{
			header("Location:registerationpage.php?err=1");

		}
		break;
	case 'login':
		
	default:
		header("Location:registerationpage.php");
		break;
}

?>