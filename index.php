<?php
require('pdo.php');
require('accounts_db.php');
//require('questions_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_login';
    }
}
switch ($action) {
    case 'show_login': { 
        include('login.php');
        break;
    }
    case 'validate_login': {
    	$email = filter_input(INPUT_POST, 'email');
    	$password = filter_input(INPUT_POST, 'password');
    	if ($email == NULL || $password == NULL){
    		echo 'Email and password not included';
    	} 
    	else {
    		$userId = validate_login($email, $password);
    		if ($userId == false) {
                //echo "Invalid login";
    			header('Location: registration.php');
    		} 
    		else if ($userId == true){
                echo "Valid login";
    			//header("Location: .?action=display_questions&userId=$userId");
    		}	
    	}
    	break;
    }
    case 'display_registration': {
        include('registration.php');
        break;
    }
    case 'display_questions': {
        /*$userId = filter_input(INPUT_GET, 'userId');
        if ($userId == NULL || $userId < 0) {
            header('Location: .?action=display_login');
        } else {
            $questions = get_users_questions($userId);
            include('display_questions.php');

        }*/
        break;
    }
}



?>
