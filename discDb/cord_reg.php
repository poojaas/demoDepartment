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

</head>


<body>
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
        <input type="submit" name="button" id="button" value="Submit" />      </td>
    </tr>
  </table>
  </form>
  
</div>
</body>
</html>
