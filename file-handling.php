<?php

if(isset($_POST['firstname']))
{
$data=$_POST['firstname'];
$fp = fopen('Registration.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['lastname']))
{
$data=$_POST['lastname'];
$fp = fopen('Registration.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['email']))
{
$data=$_POST['email'];
$fp = fopen('Registration.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['uname']))
{
$data=$_POST['uname'];
$fp = fopen('Registration.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['remail']))
{
$data=$_POST['remail'];
$fp = fopen('Registration.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['password']))
{
$data=$_POST['password'];
$fp = fopen('Registration.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>
		Register Form
	</title>
</head>
<body>
<<form method="post">
    
    <p style="color:black;font-weight: bold;font-size: 28"> Basic Information:</p>

    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" required>
    <br>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" required>
    <br>

    <label for="gen"><b>Gender</b></label>

    <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
    <br>

  <label for="email">Email:</label>
  <input type="text" name="email" required>
  <br>

  <p style="color:black;font-weight: bold;font-size: 28"> User Account Information:</p>

  <label for="uname">User Name:</label>
  <input type="text" name="username" required>
  <br>
  <label for="password">Password:</label>
  <input type="password" name="password" required>
  <br>
  <label for="remail">Recovery Email:</label>
  <input type="text" name="remail" required>
  <br>
  <input type="Reset">
  <br>
  <input type="submit">

</form>
</body>
</html>
