<?php

function get_users_questions ($userId) {
	global $db;

	$query = 'SELECT * FROM questions WHERE ownerid = :userId';
	$statement = $db->prepare($query);
	$statement->bindValue(':userId', $userId);
	$statement->execute();

	$questions = $statement->fetchAll();
	$statement->closeCursor();

	return $questions;
}

?> 
