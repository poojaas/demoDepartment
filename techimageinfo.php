<!DOCTYPE html>
<html>
<head>
<style>

div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
  <!--  width: 100%;
    height: auto;-->
}

div.desc {
    padding: 15px;
    text-align: center;
}




.responsive:hover .image {
  opacity: 0.3;
}

.responsive:hover .middle {
  opacity: 1;
}
.responsive {
    position: relative;
    
}

.text {
  color: black;
  font-size: 16px;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  background-color:pink;
  }




.o{display:block;}













* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    
	 margin-left: 4%; 
	 margin-right: 3%;
	 margin-bottom: 3em;
}

 body{
	 background-color:orange;
 }
 
 h2{
	 margin:9%;
	 font-size:50px;
	 color:red;
	 align:center;
 }


</style>
</head>
<body>


<a href="home.html"><h1>HOME</h1></a>

<!--1-->
<div class="p">
<div class="responsive">
  <div class="gallery">
    
     <a href="debug.php" target="infodes"> <img src="debug.jpg" alt="Trolltunga"  width="300px" height="200px"></a>
<div class="middle">
    
  </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
  
      <a href="codevent.php" target="infodes"> <img src="coding1.jpg" alt="Forest" width="300px" height="200px"></a>
    <div class="middle">
  </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
     <a href="techconnect.php" target="infodes"> <img src="event1.jpg" alt="Northern Lights" width="250px" height="200px" float="center"></a>
    <div class="middle">
    
  </div>
   </div>
   </div>