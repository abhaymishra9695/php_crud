<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$stu_id=$_POST['sid'];

$stu_name=$_POST['sname'];

$stu_address=$_POST['saddress'];

$stu_class=$_POST['sclass'];

$stu_phone=$_POST['sphone'];

$conn=mysqli_connect("localhost","root","","crud") or die("conaection faild");

$sql="UPDATE students SET sname='{$stu_name}',sadrress='{$stu_address}',sclass='{$stu_class}',phone='{$stu_phone}' Where Sid='{$stu_id}' ";
echo $sql;         
$result=mysqli_query($conn,$sql) or die('result not show');

               
// header("Location: http://localhost/crud/index.php");

// mysqli_close($conn);

?>