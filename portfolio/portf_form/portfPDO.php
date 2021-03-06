<?php
//setup for PDO
$host = "ip address should work";
$user = "DB user";
$pass = "their pswd";
$db_name = "NAME of Database";

//setup DSN
$dsn = "sqlsrv:host=$host;dbname=$db_name";

//executes connection
try {
    $conn = new PDO($dsn, $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdoMsg2 = '<br><br><i class="fa fa-smile-o" style="font-size:24px;"></i>DB connected';
}
//catches any errors in above and displays error message
catch(PDOException $e)
{
    $pdoMsg2 = '<br><br><i class="fa fa-frown-o" style="font-size:24px;"></i>' . $e->getMessage() . '</p>';
    exit;
}
?>