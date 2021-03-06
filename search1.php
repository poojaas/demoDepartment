
<html>
<head>
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

tr,td{color:white;}
body{color:white;}
</style>

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

<strong><li><a href="aluminfo.php" style="text-decoration: none">ALUMNI</a></li></strong>
<strong><li><a href="contactus.php" style="text-decoration: none">CONTACT US </a></li></strong>
<strong><li><a href="login.php" style="text-decoration:none">LOGIN </a></li></strong>
</ul>
    </div>
</body>
</html>
<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "discDb";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from vol_reg  where uname LIKE '%$search%' OR name LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";	
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">uname</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">pass</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">mob_num</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">e_mail</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">msg</td></tr>";				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['uname'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['pass'];
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo "$".$results['name'];
                                echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['mob_num'];
                                echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['e_mail'];
                                echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['msg'];
                                 echo "</td>
                                 <td style=\"border-style:solid;border-width:1px;border-color:#98bf21; color:white;\">";
								
            }                  echo "</td></tr>";
				echo "</table>";		
        } else {
            echo 'Nothing Foundp';
        }
?>