<?php 
include "ttt1/conn.php";
session_start();
if(isset($_SESSION['email'])) 
    header('location:index.php');

    if(isset($_POST['sub'])) {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "SELECT * FROM `tbl_user` WHERE  `user_email`='$email' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION["user"] = $row['user_name'];
            $_SESSION["email"] = $row['user_email'];
            header('location:index.php');
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel = "stylesheet" type = "text/css" href = "login.css" />
  </head>
  <div>
<body>

  <div class="login-box">
    <img src="4nb.jpg"  width="100px" height="100px">
    <h1>login </h1>
        <form>
          user name or Email id:<br>
          <input type="text" name="user name" placeholder="user id or emailid">
          <br><br>
          Password:<br>
          <input type="password" name="pass" placeholder="password">
          <br><br>
          <input type="submit" name="sub" value=" submit">
          <a href="product.html">Product</a>
        </form>
  </div>
  </div>
</body>
</html>
