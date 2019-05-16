<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    <div class="header">
        <h1>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-briefcase"></i> My Business Manager
        </h1>
    </div>

<form class="login" action="login.php?q=1" method="POST" style="width: 30% ">
    <h2>Login</h2>
    <input type="email" placeholder="Email Address" name="email" id="email" style="width: 100%" required="" />
    <br><br>
    <input type="password" placeholder="Password" name="password" id="password" style="width: 100%" required="" />
    <br>
    <br>
    <label>
         Remember Me
      <input type="checkbox" checked="checked" name="remember">
    </label>
    <br>
    <br>
    <a href="reset.html">Forgot your Password?</a>
    <div  style="float: right;">
    <button class="btn">Reset</button>
    <a href="HomePage.html"><button class="submit">Login</button></a>
</div>
<?php if(@$_GET['q']==1)
{
    $email=$_POST['email'];
    $password=md5($_POST['password']);
     include_once 'dbConnection.php';
        $list = mysqli_query($con,"SELECT password FROM users WHERE email='$email'") or die('Error');
        if($row = mysqli_fetch_array($list)) 
        {
        if($password = $row['password'])
        {
            header("location:home.html");
        }
            echo "<h2 style='color: red;'>Invalid Details</h2>";
        }        
}
        ?>
</form>
  <div class="footer">
    <a class="footer" href="" style="margin-left: 80px;">About Us</a>
    <a class="footer" href="">Contact Us</a>
    <a class="footer" href="Feedback.html">Feedback</a>
    <i class="fab fa-reddit-alien" style="margin-right: 100px;"></i>
    <i class="fab fa-instagram"></i>
    <i class="fab fa-facebook-f"></i>
</div>
</body>
</html>