<?php
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wadl';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$sql = "SELECT * FROM `Annotator`";
$all_categories = mysqli_query($con,$sql);

$sql2 = "SELECT * FROM `Task`";
$all_categories2 = mysqli_query($con,$sql2);
// To save the comment and the recipe that liked the visitor in the database


$id = mysqli_real_escape_string($con,$_POST['Category']);

$id2 = mysqli_real_escape_string($con,$_POST['Category1']);



if(@$_POST['submit'])  
{  
echo $s="insert into assignrawdata (AnnotatorID,TaskID,LeaderID`) values('$id','$id2','30')";  
echo '<script type="text/javascript"> alert("Data Inserted")</script>';
mysqli_query($con,$s);  
}
?>