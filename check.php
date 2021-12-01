<?php
$conn = mysqli_connect('localhost', 'newuser','password', 'sample2');
if (isset($_POST["email"])){
    $sql="select email from useraccount where email='".$_POST["email"]."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo'<span class="text-danger"><i class="fa fa-remove" style="font-size:24px"></i>Email address Already exist.Try with New Email. </center></span>';
    }
        
    else{
             echo'<span class="text-success"><i class="fa fa-check" style="font-size:24px"></i>New Email Address.Proceed <center></span>'; 
            include('email.php');

    }
}
?>
