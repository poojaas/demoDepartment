<?php
session_start();

?>

<html>
<head>
<title>VOLUNTEERS Details</title>

<style>
body
{ background-image:url('b2.jpg');
}
div
{
height:665px;
width:1350px;
float:left;
margin-top:
}
#a
{
background:#761816;
height:40px;
width:1350px;
}
#a ul 
{
list-style:none;
float:left;
margin:0px 15px 0px 15px;
padding-right:10px;
border-right:groove;
height:40px;

}
#a ul li 
{

color:white;
font-size:25px ;
padding-right:20px;
float:left;


}
#a ul li a
{
color:white;
}

 
#b
{

height:100px;
width:760px;
float:left;
margin-left:300px;
margin-top:20px;
}
#c
{
margin-top:80px;
} 





</style>

</head>
<body>
<h1>welcome to DISC</h1>
<div id="c">
<table border="50" cellpadding="5" cellspacing="0" height="80" width="1200" align="center" >
<tr><th colspan="11">volunteer DETAILS</th></tr>
<tr>
<center>
<th>User Name</th>
<th>password</th>
<th>Name</th>
<th>mobile no</th>
<th>Email</th>
<th>msg</th>


</center>
</tr>
<?php
include('database.php');


$y=mysql_query("select * from `vol_reg`");
while($z=mysql_fetch_array($y))
{
?>
<tr>

<td align="center"><?php
echo "<br>".$z[0];?></td>
<td align="center"><?php
echo "<br>".$z[1];?></td>
<td align="center"><?php
echo "<br>".$z[2];?></td>
<td align="center"><?php
echo "<br>".$z[3];?></td>
<td align="center"><?php
echo "<br>".$z[4];?></td>
<td align="center"><?php
echo "<br>".$z[5];?></td>
<td align="center"><a href="edit.php?M_id=<?php echo $z[2]; ?>">Edit</a></td>
<td align="center"><a href="delete.php?a=<?php echo $z[2]; ?>">Delete</a></td>
</tr>
<?php
}
?>

</table></div></div>
</body>
</html>
