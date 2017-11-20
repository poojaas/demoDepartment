<!DOCTYPE html>
<title> tech images</title>
<head>
<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
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



.responsive {
    padding: 0 6px;
	 width:44%;
   height:66%;
    float: left;
	 margin-left: 4%; 
	 margin-right: 3%;
	 margin-bottom: 3em;
}

</style>
</head>
<body>


<div class="p">
<div class="responsive">
  <div class="gallery">
    
 <a href="debug.php" target="infodes"> <img src="debug.jpg" alt="Trolltunga"  width="600" height="400"></a>
</div>
</div>

<div class="responsive">
  <div class="gallery">
  
    <a href="codevent.php" target="infodes"> <img src="coding1.jpg" alt="Forest" width="600" height="400"></a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
      <a href="techconnect.php" target="infodes"><img src="event1.jpg" alt="Northern Lights" width="600" height="400""></a>
   </div>
</div>
</div>



</body>
</html>