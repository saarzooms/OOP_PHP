<?php

class First{
	public $id = 23;
	protected $name = 'John Doe';
	private $pwd = '123';

	public function saySomething($word){
		echo $word.'<br/>';
	}
	public function displayPwd(){
		echo 'from first';
		echo $this->pwd.'<br/>';
	}
}

class Second extends First{
	public function getName(){
		echo $this->name.'<br/>';
	}
	public function display(){
		echo $this->pwd.'<br/>';
	}
	/* public function displayPwd(){
		echo 'from second';
		echo $this->pwd.'<br/>';
	} */
}

$second = new Second;

echo $second->getName();
$second->display();
echo '<br/>';
$second->displayPwd();

//echo $second->saySomething('Hello World');