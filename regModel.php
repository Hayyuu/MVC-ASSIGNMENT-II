<?php

class regModel{
	 private $username;
	 private $firstname;
	 private $lastname;
	 private $email;
	 private $password;
	 function regMode(){
	 	$this->username=$username;
	 	$this->firstname=$firstname;
	 	$this->lastname=$lastname;
	 	$this->email=$email;
	 	$this->password=$password;
	 }

	 function get_username(){
	 	return $this->username;
	 }
	 function set_username($username){
	 	$this->username=$username;
	 }
	 function get_firstname(){
	 	return $this->firstname;
	 }
	 function set_firstname($username){
	 	$this->firstname=$firstname;
	 }
	function get_lastname(){
	 	return $this->lastname;
	 }
	 function set_lastname($username){
	 	$this->lastname=$lastname;
	 }
	 function get_email(){
	 	return $this->email;
	 }
	 function set_email($username){
	 	$this->email=$email;
	 }
	function get_password(){
	 	return $this->password;
	 }
	 function set_password($username){
	 	$this->password=$password;
	 }
}


?>