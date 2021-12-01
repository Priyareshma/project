<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    </head></html>
<?php
$message = '';
$timestamp =  $_SERVER["REQUEST_TIME"];// record the current time stamp 
$verify=$_SERVER["REQUEST_TIME"]+300; // 300 refers to 300 seconds
if(isset($_POST['email'])&&($_POST['otp']))
{
    $otp=$_POST['otp'];
   $conn = mysqli_connect('localhost', 'newuser','password', 'sample2');
    $sql="select * from useraccount where email='".$_POST["email"]."'";
   $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $row['token'];
    $id=$row['id'];
    if(($_POST['otp'])==($row['token'])&&($timestamp<$verify))
{
$query="update useraccount set otp=$otp where email='".$_POST["email"]."' and id=$id";
mysqli_query($conn,$query);
        $message = '<center><label class="text-success" style="font-size:24px"><i class="fa fa-check" style="font-size:24px"></i><i> Valid OTP Number</i></label></center>';
    echo $message; 
echo '
<script type="text/javascript">
$(document).ready(function(){

  swal({
    position: "top-end",
    type: "success",
    title: "Your Registration has been saved Successfully!!",
    showConfirmButton: true,
  })
});
</script>
';
}
else
{

    $message = '<center><label class="text-danger" style="font-size:24px"><i class="fa fa-remove" style="font-size:24px"></i><i> Invalid OTP Number Try Again with new Registration</i></label></center>';
    echo $message;  
}   
   echo'
    <br><center><a href="index.php" class="btn btn-secondary">Home Page</a></center>';
}
?>