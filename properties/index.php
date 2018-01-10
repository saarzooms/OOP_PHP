<?php
class User{
	private $id;
	private $username;
	private $email;
	private $password;

	public function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
	}

	public function register(){
		echo 'User Registered<br/>';
	}

	public function login(){
		$this->auth_user();
	}

	public function auth_user(){
		echo $this->username. ' is authenticated<br/>';
	}

	public function __destruct(){
		echo $this->username.'-Destructor Called<br/>';
	}
}
echo "create user<br/>";
$User = new User('brad', '1234');

$User->register();
//$User->login();
echo "create user1<br/>";
$User1 = new User('brad1', '1234');
$User->login();
echo "create user3<br/>";
$User3 = new User('brad2', '1234');