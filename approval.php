<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    </head></html>
<?php
$conn = mysqli_connect('localhost', 'newuser','password', 'sample2');
$email=$_GET['email'];
$id=$_GET['approvalid'];
$sql="select * from useraccount where email='$email' and id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
require_once('phpmail/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
// enable SMTP authentication
$mail->SMTPAuth = true;                  
$mail->Username = "reshma.zeoner@gmail.com";
$mail->Password = "Priya12345";
$mail->SMTPSecure = "ssl";  
$mail->Host = "smtp.gmail.com";
$mail->Port = "465";
$mail->From='reshma.zeoner@gmail.com';
$mail->FromName='reshma';
//$mail->SMTPDebug=2;
$mail->addAddress($email);
$mail->Subject  =  'Approval Mail';
$mail->IsHTML(true);
$mail->Body    = '<i><center>Hello,This is from Registration Portal</center></i><br>Your Registeration will be completed after Verifying all your Details.<br>
Thank You For your Registration.';
if($mail->Send())
{
    echo "<center><p style=color:green;><b>Mail get Approved</b></p><center>";
}
else
{
echo "Mail Error - >".$mail->ErrorInfo;
}
}
echo '<a href="admin.php" class="btn btn-success">OK</a>';
?>
