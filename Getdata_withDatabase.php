<?php
$con=new mysqli("localhost","root","","student_db");
$sql = "SELECT * FROM mytable";
$result = mysqli_query($con, $sql);
$rowCount=mysqli_num_rows($result);
echo "Total Row Count:".$rowCount;
foreach($result as $item){
    $name=$item['STUDENT_NAME'];
    $roll=$item['ROLL_NO'];
    $address=$item['Address'];
    $email=$item['Email_id'];
    echo $name."<br>".$roll."<br".$address."<br>".$email;
    echo "<br><br>";
}
?>