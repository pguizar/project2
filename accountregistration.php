<?php

require('pdo.php');

$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$birthday = filter_input(INPUT_POST, 'birthday');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

echo "First Name: $firstName <br>";
echo "Last Name: $lastName <br>";
echo "Birthday: $birthday <br>";
echo "Email: $email <br>";
echo "Password: $password <br>";

$query = 'INSERT INTO accounts (email, fname, lname, birthday, password) VALUES (:fname, :lname, :birthday, :email, :password)';

	$statement = $db->prepare($query);

	$statement->bindValue(':fname', $firstName);
	$statement->bindValue(':lname', $lastName);
	$statement->bindValue(':birthday', $birthday);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':password', $password);
	$statement->execute();

	$statement->closeCursor();

	if (empty($_POST["firstName"])) {
	    $nameErr = "<p class='error'>First Name is required </p><br>";
	      echo $nameErr ;
	    }
	if (empty($_POST["lastName"])) {
	    $nameErr = "<p class='error'>Last Name is required </p><br>";
	      echo $nameErr ;
	    }
	if (empty($_POST["birthday"])) {
	    $nameErr = "<p class='error'>Birthday is required </p><br>";
	      echo $nameErr ;
	    }

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    echo(" <p class='error'>Email is invalid </p><br> ");
	  } else { 
	    echo (" ");
	  }

	if (empty($_POST["password"])) {
	    $nameErr = "<p class='error'>Password is required. </p> ";
	      echo $nameErr ;
	    }
	if(strlen($password) < 8) {
	    echo ("<p class='error'>Password should be at least 8 characters in length. </p> ");}

	
?>

