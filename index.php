<?php
include 'header.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<div id="main-content">
    <h2>All Records</h2>
     <?php
    $conn=mysqli_connect("localhost","root","","crud") or die("conaection faild");

    $sql="SELECT * FROM students JOIN studentclass 
           where students.sclass=studentclass.Cid";

    $result=mysqli_Query($conn,$sql) or die('result not show');
    if(mysqli_num_rows($result)>0){
    ?> 
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row["Sid"] ?></td>
                <td><?php echo $row["sname"] ?></td>
                <td><?php echo $row["sadrress"] ?></td>
                <td><?php echo $row["Cname"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row["Sid"];  ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row["Sid"];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</div>
<?php mysqli_close($conn) ?>
</div>
</body>
</html>
