<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Register</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">INTERRUPT </a></h1>
      <h2>EVENT REGISTRATION</h2>
    </div>
    <nav>
      <ul>
        <li><a href="homenew.html">HOME</a></li>
        
      </ul>
    </nav>
  </header>
</div>

<div class="wrapper row2">
<?php
error_reporting(E_ALL ^ E_NOTICE);
$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
mysql_select_db('Register') or die(mysql_error());


//Process
if (isset($_POST['submit']))
{

$myFirstName =  $_POST['first_name'] ; //prevents types of SQL injection
$myLastName = $_POST['last_name'] ;
$myGender = $_POST['gender'] ;
$myDepartment = $_POST['department'] ;
$myYear =  $_POST['year'];
$mySemester =  $_POST['semester'] ;
$myEventname =  $_POST['event_name'] ;
$myEventfee = $_POST['event_fee'] ;
$myPhonenumber =  $_POST['phone_number'] ;
$myEmail = $_POST['mail_id'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

//$result1 = mysqli_query($con, "SELECT * FROM register WHERE user_name='$myUserName'");
//$num1 = mysql_num_rows($result1);
$result2 = mysql_query("SELECT * FROM register WHERE mail_id='$myEmail'");
$num2 = mysql_num_rows($result2);
//if($num1 > 0) {
 //  die( "<h2>User name already exists please choose different one <br><h2>Go to</h2> <a href=\"registeracc.php\"><h2>Register</h2></a>");;
//}
if($num2 > 0) {
   die( "<h2>E-Mail already exists please choose different one<br>Go to</h2> <a href=\"register.html\"><h2>Register</h2></a> ");
}
if( num2 == 0){
$sql = mysql_query("INSERT INTO register(first_name, last_name, gender,department,year,semester,event_name,event_fee,phone_number,mail_id,password) VALUES ('$myFirstName','$myLastName','$myGender','$myDepartment','$myYear','$mySemester','$myEventname','$myEventfee','$myPhonenumber','$myEmail','$myPassword')" )
        or die( "<h1>User With Same Email Id Exists..!!!<br> Registration Failed Go to <a href=\"register.html\">Register Here</a>" );
die( "<h1>You have registered for an account.<h1><br><br><h2>Go to<h2> <a href=\"login.html\"><h2>Login</h2></a>" );
   }
}
echo '<span href="#" class="button" id="toggle-login">Register An Account</span>';
echo '<div id="login">';
echo '<div id="triangle"></div>';
echo '<h1>SIGN UP</h1>';
echo'<center>';
echo '<form action="registeracc.php" method="post" onsubmit="return registerValidate(this)">';
echo "<tr><td><input class='eptn' type='text'  name='first_name' maxlength='15' pattern='[a-zA-z]+' required value='' placeholder='First Name'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='last_name' maxlength='15'pattern='[a-zA-z]+' required  value='' placeholder='Last Name'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='gender' maxlength='10' pattern='' required value='' placeholder='Gender'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='department' maxlength='10' pattern='^[a-zA-Z\.d\ ]{3,}$' required value='' placeholder='Department'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='year' maxlength='10' pattern='[1-4]' required value='' placeholder='Year'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='semester' maxlength='10' pattern='[1-8]' required value='' placeholder='Semester'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='event_name' maxlength='25' pattern='^[a-zA-Z\.d\ ]{4,}$' required value='' placeholder='Event_name'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='event_fee' maxlength='10' pattern='' required value='' placeholder='Event_fee'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='phone_number' maxlength='10' pattern='' value='' placeholder='Phone_number'></td></tr>";

echo "<tr><td><input class='eptn' type='email' name='mail_id' maxlength='30' value='' placeholder='Mail_id'></td></tr>";

echo "<tr><td><input class='eptn' type='password' name='password' maxlength='15'  value='' placeholder='Password'></td></tr>";
//echo "<tr><td><input class='eptn' type='password' name='ConfirmPassword' maxlength='15'  value='' placeholder='Confirm Password'></td></tr>";
echo "<tr><td>&nbsp;</td><td><input class='sub' type='submit' name='submit' value='Register '/></td></tr>";
echo "<tr><td colspan = '2'><p>Already have an registered? <a href='login.html'><b>Login Here</b></a></td></tr>";
echo "</tr></td></table>";
echo "</form></div>";
mysql_close($con);
?>
</div>
<div class="footer">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved -</p>
  </footer>
</div>
</body></html>