<?php include 'header.php'; 
if(isset($_POST['deletebtn'])){
    $conn=mysqli_connect("localhost","root","","crud") or die("conaection faild");
    $stu_id=$_POST['sid'];
    $sql="DELETE FROM students 
    where Sid = {$stu_id}"; 
     $result=mysqli_Query($conn,$sql) or die('result not show');
     header("Location: http://localhost:8080/learnPHP/php%20mysql/crud_html/index.php");
}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
