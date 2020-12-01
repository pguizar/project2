<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="design1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        		
</head>
<body>
		<div class = "nav"> 
		  <ul>
			  <li> <a href = "registration.php" > Registration Form </a> </li>
			  <li> <a href = "newQuestionForm.php" > New Question Form </a> </li>
			</ul>
	</div>

    <form action="index.php" method="post">
        <input type="hidden" name="action" value="validate_login">

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>
