<?php
 header('Content-Type: application/json; charset=utf-8');
 $con=mysqli_connect("localhost","root","","Student_db");
 $sql="SELECT*FROM stuinfo";
 $result=mysqli_query($con,$sql);
 $row=mysqli_num_rows($result);


 $data=array();
 foreach($result as $item){
   $name=$item['Student_Name'];
   $roll=$item['Roll_No'];
   $address=$item['Address'];
   $email=$item['Email_id'];

   $userInfo['Student_Name']=$name;
   $userInfo['Roll_No']=$roll;
   $userInfo['Address']=$address;
   $userInfo['Email_id']=$email;
   array_push($data,$userInfo);
    
 }
 echo json_encode($data);


?>