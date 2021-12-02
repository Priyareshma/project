
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    </head></html>
<?php
$conn = mysqli_connect('localhost', 'newuser','password', 'sample2');
$email=$_GET['email'];
$id=$_GET['rejectionid'];
$sql="delete from useraccount where email='$email' and id=$id";
$result=mysqli_query($conn,$sql);
echo "<center><p style=color:red;><b>User Mail and their Details get Rejected</b></p><center>";
echo '<a href="admin.php" class="btn btn-success">OK</a>';
?>