<?php
 $st_id= $_GET['id'];


 $conn=mysqli_connect("localhost","root","","crud") or die("conaection faild");

//  $sql="ALTER TABLE students
//   DROP COLUMN * where Sid=$st_id ";

$sql="DELETE  FROM students 
where Sid = {$st_id}"; 
 $result=mysqli_Query($conn,$sql) or die('result not show');
header("Location: http://localhost:8080/learnPHP/php%20mysql/crud_html/index.php");


?>