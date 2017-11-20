<?php
include("database.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $uname = $_POST["uname"];
   $pass = $_POST["pass"];
   $name = $_POST["name"];
   $mob_num = $_POST["mob_num"];
   $email = $_POST["email"];
   $msg = $_POST["msg"];

 $usercheck = $uname;

 $check = mysql_query("SELECT uname FROM cord_reg WHERE uname = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);


if ($uname==""  or $pass=="" or $name=="" or $mob_num=="" or $email=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
elseif ($check2 != 0) {

    die('Sorry, the username '.$_POST['uname'].' is already in use.');

        }


elseif($_POST['pass'] != $_POST['cpass']) {

    die('Your passwords did not match. ');

  }

else{

$sql="INSERT INTO cord_reg (uname, pass,name,mob_num,e_mail,msg)
VALUES
('$uname','$pass','$name','$mob_num','$email','$msg')";
 mysql_query($sql) or die(mysql_error());

 echo "Your message has been received";
 header( 'Location: cord_login.php' ) ;

 }
   }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DISC</title>
<style>
@-webkit-keyframes typing { from { width: 0; } }
@-webkit-keyframes blink-caret { 50% { border-color: transparent; } }

h2 { 
	font: bold 2em monospace;
  color:white;
	border-right: .1em solid #848484;
	width: calc(0.55em * 14); 
	width: 45ch;
	white-space: nowrap;
	overflow: hidden;
	-webkit-animation: typing 3s steps(45, end),
	           blink-caret .5s step-end infinite alternate;
}
body
{
background-image:url("bb4.jpg");
background-position: absolute;}
div.header {font-style:bold;font-family: Helvetica;font-size:20px;}
p.one {text-align:center;}

span.one {
font-family:;
font-style:bold;
font-size:28px;
display:in-line;
padding:50px;

}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
//   background-color:#DCDCDC;
}

li {
    float: left;
}

li a {

    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
	width:150px;
    text-decoration: none;
}

li a:hover {
    background-color: #DC143C;

}




div.img
{
margin:10px;
padding:30px;
image-spacing:10px;
}

<!-- volunteer now  -->

@import url(http://fonts.googleapis.com/css?family=Signika:700,300,600);

div.vol { display: flex;background-color:black; justify-content:center; align-items: center; margin:10px 0; text-align:center; background:beige; overflow:hidden; }

h1 {
 font-size:5em;
 font:bold 7.5vw/1.6 'Signika', sans-serif;
 user-select:none;
}

h1 span { display:inline-block; animation:float .2s ease-in-out infinite; }
 @keyframes float {
  0%,100%{ transform:none; }
  33%{ transform:translateY(-1px) rotate(-2deg); }
  66%{ transform:translateY(1px) rotate(2deg); }
}
body:hover span { animation:bounce .6s; }
@keyframes bounce {
  0%,100%{ transform:translate(0); }
  25%{ transform:rotateX(20deg) translateY(2px) rotate(-3deg); }
  50%{ transform:translateY(-20px) rotate(3deg) scale(1.1);  }
}

span:nth-child(4n) { color:hsl(50, 75%, 55%); text-shadow:1px 1px hsl(50, 75%, 45%), 2px 2px hsl(50, 45%, 45%), 3px 3px hsl(50, 45%, 45%), 4px 4px hsl(50, 75%, 45%); }
span:nth-child(4n-1) { color:hsl(135, 35%, 55%); text-shadow:1px 1px hsl(135, 35%, 45%), 2px 2px hsl(135, 35%, 45%), 3px 3px hsl(135, 35%, 45%), 4px 4px hsl(135, 35%, 45%); }
span:nth-child(4n-2) { color:hsl(155, 35%, 60%); text-shadow:1px 1px hsl(155, 25%, 50%), 2px 2px hsl(155, 25%, 50%), 3px 3px hsl(155, 25%, 50%), 4px 4px hsl(140, 25%, 50%); }
span:nth-child(4n-3) { color:hsl(30, 65%, 60%); text-shadow:1px 1px hsl(30, 45%, 50%), 2px 2px hsl(30, 45%, 50%), 3px 3px hsl(30, 45%, 50%), 4px 4px hsl(30, 45%, 50%); }

h1 span:nth-child(2){ animation-delay:.05s; }
h1 span:nth-child(3){ animation-delay:.1s; }
h1 span:nth-child(4){ animation-delay:.15s; }
h1 span:nth-child(5){ animation-delay:.2s; }
h1 span:nth-child(6){ animation-delay:.25s; }
h1 span:nth-child(7){ animation-delay:.3s; }
h1 span:nth-child(8){ animation-delay:.35s; }
h1 span:nth-child(9){ animation-delay:.4s; }
h1 span:nth-child(10){ animation-delay:.45s; }
h1 span:nth-child(11){ animation-delay:.5s; }
h1 span:nth-child(12){ animation-delay:.55s; }
h1 span:nth-child(13){ animation-delay:.6s; }
h1 span:nth-child(14){ animation-delay:.65s; }



tr,td{color:red;
	font-size:20px;}




.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:Coral;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.buttona{ padding: 10px 25px;
}
</style>
</head>


<body>
<center>
<h2>DEPARTMENT OF INFORMATION SCIENCE CLUB PORTAL</h2></center>
<div class="header"><p class="one"></p></div>

<p> <hr> </hr> </p>
<div>
<ul>
<strong><li><a href="home.html" style="text-decoration: none">HOME</a></li></strong>
<strong><li><a href="pooevents.php" style="text-decoration: none">EVENTS</a></li></strong>
<strong><li><a href="poogallery.php" style="text-decoration: none">GALLERY</a></li></strong>
<strong><li><p> <span class="one"> DISC<span></p></li></strong>

<li><a href="aluminfo.php" style="text-decoration: none">ALUMNI</a></li>
<li><a href="contactus.php" style="text-decoration: none">CONTACT US </a></li>
<li><a href="login.php" style="text-decoration:none">LOGIN </a></li>
</ul>
    </div>

	<h2><strong>Search for coordinator</strong></h2>
	<form action="search1.php" method="post">
Search: <input type="text" name="search" placeholder=" Search here ... "/>
<input type="submit" value="Submit" />
</form>

<div>
<form id="form1" name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table class="tbl_form" width="461" height="431">
    <tr>
      <td class="cptn" colspan="4"><div align="center">COORDINATOR REGISTRATION</div></td>
      </tr>
    <tr>
      <td class="cptn" colspan="4">Login Information </td>
    </tr>
    <tr>
    
      <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
      <td width="155" height="31" class="field">User Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <input type="text" name="uname" id="textfield" />      </td>
    </tr>
    <tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td width="144">
        <input type="password" name="pass" id="textfield2" />      </td>
      <td width="109">Min 8 Character</td>
    </tr>
    <tr>
      <td class="field">Confirm Password</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="password" name="cpass" id="textfield3" />      </td>
    </tr>
    <tr>
      <td colspan="4" >&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn">Basic Informations</td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="name" id="textfield4" />      </td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" value="91" />      </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="email" id="textfield6" />      </td>
    </tr>
    <tr>
      <td height="97" class="field">Message</td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="msg" id="textarea" cols="30" rows="5"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
        <input type="submit" class="button" name="button" id="button" value="Submit" />      </td>
    </tr>
	
	<tr>
      <td>Already Registered?Login here</td>
	  <td>
	
	<a href="cord_login.php" style="background-color:#DCDCDC;border: none;color: crimson;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 20px;margin: 4px 2px;cursor: pointer;" >login</a></td>
	    </tr>
      
    </tr>
  </table>
  </form>
  
</div>
</body>
</html>
