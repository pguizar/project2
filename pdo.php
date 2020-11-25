<?php
$hostname = 'sql.njit.edu';
$username = 'pg479';
$password = 'Pg123456789!';
$dsn = "mysql:host=sql1.njit.edu;dbname=$username";
try {
    $db = new PDO($dsn, $username, $password);

    echo "Connected to database";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>