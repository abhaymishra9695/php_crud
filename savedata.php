<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
// if(strlen(($_POST['sname'])>0){
//   $stu_name=$_POST['sname'];}
// // }else{
//   echo '<P style="color:red">field filling is requerd</p>';
   
   
// }
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];


// -



$conn=mysqli_connect("localhost","root","","crud") or die("conaection faild");

$sql="INSERT INTO students (`sname`,sadrress,sclass, phone) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')";
echo $sql;         
$result=mysqli_query($conn,$sql) or die('result not show');
echo $result;
               
header("Location:http://localhost:8080/learnPHP/project/crud_html/index.php");

mysqli_close($conn);

?>