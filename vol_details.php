<?php
session_start();

?>

<html>
<head>
<title>VOLUNTEERS Details</title>

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


<!--deatils style-->



body
{ background-image:url('bb4.jpg');
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


tr{color:white;}


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
