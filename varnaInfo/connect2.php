<?php
$user_name = filter_input(INPUT_POST, 'first');
$user_lastname = filter_input(INPUT_POST, 'last');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$address = filter_input(INPUT_POST, 'address');
$report = filter_input(INPUT_POST, 'message');
$signals = filter_input(INPUT_POST, 'signals');
if(isset($_POST['submit']))

{
$name = $_POST['name'];

$gender = $_POST['signals'];

$result = mysqli_query($mysqli,"insert into data values('','$name','$signals')");
}

if (!empty($user_name)){
if (!empty($user_lastname)){
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
$sql = "INSERT INTO report (user_name, user_lastname, email, phone, address, report, signals)
values ('$user_name','$user_lastname', '$email', '$phone', '$address', '$report', '$signals')";
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



if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){
 
     $query = "insert into reports(name) values('".$name."')";

     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}

 
?>