<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
if (!empty($name)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "wadl";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);
}

echo rand_string(8);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{ 
$sql = "INSERT INTO leader1 (name,email,AdminID)
values ('$name','$email','2')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
    echo "name should not be empty";
    die();
    }}
else{
echo "Email should not be empty";
die();
}


?>