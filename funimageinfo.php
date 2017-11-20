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
    width: 100%;
    height: auto;
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
    width: 24.99999%;
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


<h1><u>HOME</u></h1>

<!--1-->
<div class="p">
<div class="responsive">
  <div class="gallery">
    
     <a href="funex.php" target="infodes"> <img src="madads.png" alt="Trolltunga"  width="300" height="200"></a>
<div class="middle">
    
  </div>
  </div>
</div>

<!--
<div class="responsive">
  <div class="gallery">
  
      <a href="dance.php" target="infodes"> <img src="groupdance.jpg" alt="Forest" width="600" height="400"></a>
    <div class="middle">
  </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
     <a href="medley.php" target="infodes"> <img src="medley.jpg" alt="Northern Lights" width="400" height="200"></a>
    <div class="middle">
    
  </div>
   </div>
   </div>