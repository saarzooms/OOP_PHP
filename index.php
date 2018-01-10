<?php
class Post{
	private $fname;
	private $uname;

	public function __set($name, $value){
		echo 'Setting '.$name.' to <strong>'.$value.'</strong><br />';
		$this->name = $value;
	}

	public function __get($name){
		echo 'Getting '.$name.' <strong>'.$this->name.'</strong><br />';
	}

	public function __isset($name){
		echo 'Is '.$name.' set?<br />';
		return isset($this->name);
	}
}

$post = new Post;
$post->fname = 'Testing';
echo $post->fname;
$post->uname = 'arzoo';
echo $post->uname;
//var_dump(isset($post->fname));