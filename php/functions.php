<?php
	require_once('php/connection.php');

	// wrapper function for insertion
	function insertNewEntry () {
		global $con;
		
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$message 	= $_POST['message'];

		$statement 	= $con->prepare("INSERT INTO gbook (name, email, message) VALUES (?,?,?)");
		
		if ($statement->execute([$name, $email, $message])) {
			return header('Location: '.$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/guestbook?success');
		} else {
			return header('Location: '.$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/guestbook?error');
		}
	}

	// wrapper function for getting entries
	function getAllEntries () {
		global $con;

		$sth = $con->prepare("SELECT * FROM gbook");
		$sth->execute();
		$RES = $sth->fetchAll();

		if ($RES) {
			return $RES;
		} else {
			header('Location: '.$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/guestbook?error');
		}
	}


	// calls
	if (isset($_POST)) {
		//return insertNewEntry();
	}
	


