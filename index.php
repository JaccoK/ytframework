<?php


require_once 'core/init.php';
	
	
//$jacco = DB::getInstance()->query("SELECT * FROM users WHERE username = ?", array('jacco'));
//print($jacco->count());

//$jacck = DB::getInstance()->get('users', array('username', '=', 'jacco'));
//print($jacck->first()->name);

//$user = DB::getInstance()->get('users', array('username', '=', 'barno'));
//print($user->first()->username);

DB::getInstance()->insert('users', array('username' => 'Floris', 'password' => 'testest', 'salt' => 'test'));

#$user = DB::getInstance()->get('users', array('username', '=', 'Floris'));

#print($user->username);

//DB::getInstance()->insert('users', array('username' => 'barno', 'password' => 'petje', 'salt' => 'salt'));

?>