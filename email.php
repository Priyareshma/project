<?php
$conn = mysqli_connect('localhost', 'newuser','password', 'sample2');
if (isset($_POST["email"])){
    $sql="select * from useraccount where email='".$_POST["email"]."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
$token = rand(100000,999999);
$query="update useraccount set token=$token,createdtime=TIME(NOW()+ INTERVAL 5 MINUTE) where email='$email';";
mysqli_query($conn,$query);
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
$mail->addAddress($email,$firstname);
$mail->Subject  =  'OTP For Registration Portal';
$mail->IsHTML(true);
$mail->Body    = '<i><center>Welcome to Registration Portal</center></i><br>Your Registeration will get complete after Entering this OTP to Verify your Email. <br>Your OTP Number is<b>'.$token.'</b><br>
Thank You For your Registration.';
echo '<script>alert("Check Your Email box and Enter your OTP Number.")</script>';
if($mail->Send())
{
    header('location:otp.php?email='.$email);
}
else
{
echo "Mail Error - >".$mail->ErrorInfo;
}
    }
else
{
echo "OTP will be send to your Email";
}
}
?>