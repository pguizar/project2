<?php

require('pdo.php');

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (strlen($password) > 8) {

	echo "First Name: $firstName <br>";
	echo "Last Name: $lastName <br>";
	echo "Birthday: $birthday <br>";
	echo "Email: $email <br>";
	echo "Password: $password <br>";

	$query = 'INSERT INTO registration (fName, lName, birthday, email, password) VALUES (:fName, :lName, :birthday, :email, :password)';

	/*create pdo statement*/
	$statement = $db=prepare[$query];

	$statement =bindValue(':email', $email);
	$statement =bindValue(':fname', $firstName);
	$statement =bindValue(':lname', $lastName);
	$statement =bindValue(':birthday', $birthday);
	$statement =bindValue(':password', $password);

	$statement=execute();

	$stament=closeCursor();
	} else {
		echo "form is invalid";
	}
?>