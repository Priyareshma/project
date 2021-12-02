
<?php
$conn = mysqli_connect('localhost', 'newuser','password', 'sample2');
$email=$_GET['email'];
$sql="select  * from useraccount where email='$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$email=$row['email'];
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<form method="post" action="otpverify.php">
    <body>
    <center>
  <div class="form-group">
      <div class="col-md-2">
    <label for="">Enter Your OTP number</label>
    <input type="number" class="form-control" id="otp" name="otp" placeholder="Enter OTP">
    <small  class="form-text text-muted">We'll never share your Secret OTP with anyone else.</small>
      </div>
    </div> 
  <input type="hidden" name="email" value="<?php echo $row['email']; ?>" /> 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <a href="resendotp.php" class="btn btn-success">Resend OTP</a>
        </center>
    </body>
</form>
        </head>
    </html>
<?php

if(isset($_POST['submit']))
{
    $otp=$_POST['otp'];
    $email=$_POST['email'];
}

?>
