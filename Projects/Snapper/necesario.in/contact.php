<?php

   $server = "localhost";
   $username = "root";
   $password ="";

   $con = mysqli_connect($server,$username,$password);

   if(!$con){
       die("connection to this databse failed due to" . mysqli_connect_error());
   }

  // echo "Success connecting to db";


   $name = $_REQUEST['name'];
   $email=$_REQUEST['email'];
   $product=$_REQUEST['product'];
   $message=$_REQUEST['message'];
   
   $sql = "INSERT INTO `contact`.`contact`(`name`, `email`, `product`, `message`, `dt`)
    VALUES ('$name', '$email', '$product', '$message', current_timestamp())";


   //echo $sql;

   if($con->query($sql)==true)
   {
    //   echo "Successfully Inserted";
   }
   else{
       echo "ERROR: $sql <br> $con->error";
   }

   $con->close();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <title>Thank you</title>

    <link href="https://getbootstrap.com/docs/4.3/getting-started/introduction/" rel="stylesheet">

</head>
<body>

<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap');
html,body {
    font-family: 'Raleway', sans-serif;  
}
.thankyou-page ._header {
    background: #fee028;
    padding: 100px 30px;
    text-align: center;
    background: #fee028 url(https://codexcourier.com/images/main_page.jpg) center/cover no-repeat;
}
.thankyou-page ._header .logo {
    max-width: 200px;
    margin: 0 auto 50px;
}
.thankyou-page ._header .logo img {
    width: 100%;
}
.thankyou-page ._header h1 {
    font-size: 65px;
    font-weight: 800;
    color: white;
    margin: 0;
}
.thankyou-page ._body {
    margin: -70px 0 30px;
}
.thankyou-page ._body ._box {
    margin: auto;
    max-width: 80%;
    padding: 50px;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -moz-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
    -webkit-box-shadow: 0 0 35px rgba(10, 10, 10,0.12);
}
.thankyou-page ._body ._box h2 {
    font-size: 32px;
    font-weight: 600;
    color: #4ab74a;
}
.thankyou-page ._footer {
    text-align: center;
    padding: 50px 30px;
}

.thankyou-page ._footer .btn {
    background: #4ab74a;
    color: white;
    border: 0;
    font-size: 14px;
    font-weight: 600;
    border-radius: 0;
    letter-spacing: 0.8px;
    padding: 20px 33px;
    text-transform: uppercase;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="thankyou-page">
    <div class="_header">
        <h1>Thank You!</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <p>
                Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.
            </p>
        </div>
    </div>
    <div class="_footer">
        <a class="btn" href="index.html">Back to homepage</a>
    </div>
</div>
</body>
</html>