<?php 
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel = "stylesheet" type = "text/css" href = "signup.css" />
  </head>
<body>
<div class="head">

</div>
  <div class="login-box">
    <img src="06.jpg"  width="100px" height="100px">
    <h1>Sign up </h1>
        <form>
          First name:   Last name:<br>
          <input type="text" name="first_name" placeholder="firstname">&emsp;
          <input type="text" name="last_name" placeholder="lastname">
          <br><br>
          Email id:<br>
          <input type="text" size="35" name="Email_id" placeholder="Email">
          <br><br>
           User Name:<br>
          <input type="text"  name="user_name" placeholder="name">
          <br><br>
          Password: Confirm Password:<br>
          <input type="password" name="pass" placeholder="password">&emsp;
          <input type="password" name="pass" placeholder="Confirm password">
          <br><br>
          Phone:<br>
          <input type="text" name="phone" placeholder="phone">
          <br><br>
          <input type="submit" name="sub" value=" sign_up">
          
        </form>
  </div>
</body>
</html>
