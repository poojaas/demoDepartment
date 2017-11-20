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
    height: auto; -->
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

<h1><u>HOME</u></h1>



<!--1-->
<div class="p">
<div class="responsive">
  <div class="gallery">
    
     <a href="gameex.php" target="infodes"> <img src="treasurehunt.jpg" alt="Trolltunga"  width="200" height="150" overflow="hidden"></a>
<div class="middle">
    
  </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
  
      <a href="mini-militia.php" target="infodes"> <img src="mini-militia.jpg" alt="Forest" width="200" height="150" overflow="hidden"></a>
    <div class="middle">
  </div>
  </div>
</div>




<div class="responsive">
  <div class="gallery">
    
     <a href="picandact.php" target="infodes"> <img src="picandact.jpg" alt="Northern Lights" width="200" height="150" align="center" float="left"  overflow="hidden"></a>
    <div class="middle">
    
  </div>
   </div>
   </div>
   
   
   </body>
   </jtml>
   
   