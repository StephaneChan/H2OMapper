<html>
<head>
<style type="text/css">
 input{
 border:1px solid lightgray;
 border-radius:5px;
 }
 h1{
  color: #145252;
  font-size:24px;
  text-align:center;
 }
 h3{
  color: darkcyan;
  font-size:18px;
  font-family: verdana;
  text-align:center;  
 }
 body{
  padding-top: 5%;
  background-color: aliceblue;
 }
 table, input{
  font-size: 18px;
  font-family: verdana;
 }
</style>
</head>
<body>

<h1>H2O Mapper<h1>
<h3>Sign In</h3>
<form action='main.php' method='post'>

<table cellspacing='8' align='center'>
<tr><td>Username:</td><td><input type='text' name='username'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='password'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Log In'/></td></tr>

</table>

</form>
<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','stef2294') or die(mysql_error());
 mysql_select_db('h2omapper') or die(mysql_error());

 //username: waterlogger
 //password: chubbybunnies
 $name=$_POST['username'];
 $pwd=$_POST['password'];
 if($name!=''&&$pwd!='')
 {
   $sql= "select * from userauth where username='".$name."' and password='".$pwd."'";
   $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
   if(mysqli_num_rows($result) == 1)
   {
    $_SESSION['username']=$name;
    header('location:main.php');
   }
   else
   {
    echo'Username or password is incorrect';
   }
 }
 else
 {
  echo'Please enter your username and password';
 }
 
}

?>
</body>
</html>
