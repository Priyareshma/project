<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<body>
        <form method="post">
    <center>
  <div class="form-group">
      <div class="col-md-2">
    <label for="">Enter Your Registered Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your registered email">
      </div>
    </div>
  <button type="submit" class="btn btn-success" name="submit">Send OTP</button>
        </center>
    
</form>
    </body>
        </head>
    </html>
<?php

if(isset($_POST['submit'])&&($_POST['email']))
{
    $email=$_POST['email'];
}
include('email.php');

?>