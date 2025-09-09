<?php
$con=new mysqli("localhost","root","","student_db");
$NAME = isset($_GET['n']) ? $_GET['n'] : '';
$ROLL = isset($_GET['r']) ? $_GET['r'] : '';
$Address = isset($_GET['a']) ? $_GET['a'] : '';
$Email = isset($_GET['e']) ? $_GET['e'] : '';
if($con->connect_error){
    echo ("Connect Faild".$con->connect_errno);
}else 
    echo"Connect to Data base Succesfully";

$sql="INSERT INTO mytable(STUDENT_NAME,ROLL_NO,Address,Email)VALUES('$NAME','$ROLL','$Address','$Email')";
$result=mysqli_query($con,$sql);

if($result){
    echo "<br> Data Insert Succesfully";
}else 
    echo "\n Qury Error";

 
?>
 
 

 

