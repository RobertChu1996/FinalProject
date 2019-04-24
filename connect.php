<?php


$username2 = $_POST['user'];
$password2 = $_POST['pass'];


$servername = "localhost";
$username = "root";
$password = "Rexxar30??";
$DB = "final";

$conn = new mysqli($servername, $username, $password, $DB);


if ($conn->connect_error)
{

die("Connection failed" . $conn->connect_error);

}


$sql = "SELECT User, Pass FROM loginform where user = $username2";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if($row["User"] === $username2 && $row["Pass"] === $password2)
{


include 'classeslist.html';

}
else{

  include 'hi.php';

}






 ?>
