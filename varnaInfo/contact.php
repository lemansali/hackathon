<?php
$user_name = filter_input(INPUT_POST, 'first');
$email = filter_input(INPUT_POST, 'email');
$report = filter_input(INPUT_POST, 'report');
if (!empty($user_name)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "varnainfo";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO feedbacks (user_name, email, report)
values ('$user_name', '$email', '$report')";
if ($conn->query($sql)){
header ("Location: index.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}




 
?>