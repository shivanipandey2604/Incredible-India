<html>
<head>
	<meta charset="UTF-8">
	<title>INCREDIBLE INDIA</title>
	<link rel="stylesheet" href="css/styling.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  font-family: cursive;
}

.flip-box {
  background-color: transparent;
  width: 500px;
  height: 400px;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {

  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
}
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("gallery/pp.jpeg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgd {
    /* The image used */
    background-image: url("gallery/gold.gif");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>

	</head>
	<body id="tp" >
	<div id="header">

		
			
				<a id="logo" href="home.php"><img src="gallery/a.png" alt="LOGO" style="width:350px;float:left;"></a>
		
			<ul id="navigation" style="float:right;">
				<li class="selected">
					<a href="home.php">Home</a>
				</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li>&nbsp;&nbsp;
					<a href="about.php">About</a>
				</li>
				<li>&nbsp;&nbsp;
					<a href="gallery.php">  Gallery</a>
				</li>
				<li>&nbsp;&nbsp;
					<a href="blog.php">Blog</a>
				</li>
				<li>&nbsp;&nbsp;
					<a href="contact.php">  Contact</a>
				</li>
			</ul>
			</div>
			</body>
			<body>
			<div class="bg">
			

			<h1 style="text-align:center" >ZONAL</h1>
			
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="row" style="text-align:center;font-size:24px">
  <div class="column" >
    <img src="gallery/b.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor"><span class="infor">click me</span>
    NORTHERN-INDIA
  </div>
  <div class="column">
    <img src="gallery/m.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  WESTERN-INDIA</div>
  <div class="column">
    <img src="gallery/mno.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  SOUTHERN-INDIA</div>
  <div class="column">
    <img src="gallery/t.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  EASTERN-INDIA</div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="gallery/b.jpg" style="width:100%;height:70%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="gallery/m.jpg" style="width:100%;height:70%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="gallery/mno.jpg" style="width:100%;height:70%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="gallery/t.jpg" style="width:100%;height:70%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="gallery/b.jpg" style="width:100%" onclick="currentSlide(1)" alt="North-India">
    </div>
    <div class="column">
      <img class="demo cursor" src="gallery/m.jpg" style="width:100%" onclick="currentSlide(2)" alt="West-India">
    </div>
    <div class="column">
      <img class="demo cursor" src="gallery/mno.jpg" style="width:100%" onclick="currentSlide(3)" alt="South-India">
    </div>
    <div class="column">
      <img class="demo cursor" src="gallery/t.jpg" style="width:100%" onclick="currentSlide(4)" alt="East-India">
    </div>
  </div>
</div>
<script src="jquery-1.9.1.min"></script>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script></div><div class="bgd">
<br><br><br><br><br><br><br><br><br><br>
<br><div class="flip-box" style="float:left;padding-right:30px">
  <div class="flip-box-inner" >
    <div class="flip-box-front" style="width:500px;height:400px;align:center;padding-right:30px">
<img src="gallery/ke.jpg" style="width:500px;height:400px;color:white;">
      <h3>Kerela</h3>
    </div>
    <div class="flip-box-back" style="padding-right:30px;background-color:black;color:white;font-size:22px;">
    The God’s Own Country, Kerala has some extremely beautiful tourist destinations to hold the attention of global tourists. There are hill-stations, backwaters, commercial cities, hamlets, and much more to explore. 
      <h3>Kerela</h3>
    </div>
  </div>
</div>

<div class="flip-box" style="float:left;padding-left:300px">
  <div class="flip-box-inner">
    <div class="flip-box-front" style="width:500px;height:400px;float:left;"  >
   <img src="gallery/p.jpg"  style="width:500px;height:400px;">
      <h3>Gujrat</h3>
    </div>
    <div class="flip-box-back" style="width:500px;height:400px;float:right;background-color:black;color:white;font-size:22px;"  >
     Many of those who come to visit Kutch, Gujarat, come to see the famous Great Rann, one of the largest salt marshes in the world.Kutch is famous: first and foremost it is known for its rich traditions in handicrafts.
      <h3>Gujrat</h3>
    </div>
  </div>
</div>



</div>
<div class="bgd">
<br><br>
<br><div class="flip-box" style="float:left;padding-right:30px">
  <div class="flip-box-inner" >
    <div class="flip-box-front" style="width:500px;height:400px;align:center;padding-right:30px">
<img src="gallery/sik.jpg" style="width:500px;height:400px;color:white;">
      <h3>Sikkim</h3>
    </div>
    <div class="flip-box-back" style="padding-right:30px;background-color:black;color:white;font-size:22px;">
    Sikkim is a tiny but gorgeous Himalayan state tucked away in the North-eastern part of India. From the frozen lakes in the North, the tea plantations in the West, and the mighty Kanchendzonga ranges looming throughout, Sikkim is a land of life and love.
      <h3>Sikkim</h3>
    </div>
  </div>
</div>

<div class="flip-box" style="float:left;padding-left:300px">
  <div class="flip-box-inner">
    <div class="flip-box-front" style="width:500px;height:400px;float:left;"  >
   <img src="gallery/uk.jpg"  style="width:500px;height:400px;">
      <h3>Uttarakhand</h3>
    </div>
    <div class="flip-box-back" style="width:500px;height:400px;float:right;background-color:black;color:white;font-size:20px;"  >
   The majestic Himalayas have a unique charm and their exquisiteness is simply unparalleled. Uttarakhand, also known as ‘Dev Bhoomi’ truly is a paradise on earth helmed with green mountains in Garhwal and snow-capped mountains in the Kumaon region. It is a perfect match for the nature and adventure enthusiasts, offering varied options from precarious trekking routes, camping or tranquillity.
      <h3>Uttarakhand</h3>
    </div>
  </div>
</div>



</div>

<br>
<br><br>



<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Visit India</h4>
					<a href="gallery.php"><marquee><img src="gallery/jjj.jpg" alt="Img"></marquee></a>
					<p>
						4885 Wilson Street<br> Victorville, CA 92392<br><br> 760-962-9541<br><br> <a href="index.html">info@incrediblecreations.com</a>
					</p>
				</div>
				<div>
					<h4>Recent Blog Posts</h4>
					<ul class="posts">
						<li>
							<span class="time">Apr 16</span>
							<img src="gallery/b.jpg" style="height:80px;width:80px;">
								
						</li>
						<li>
							<span class="time">Apr 15</span>
							<p>
								<a href="blog.php">5 Star Hotels We Supply</a> And we love the challenge of doing something diferent and something special.
							</p>
						</li>
						<li>
							<span class="time">Apr 14</span>
							<p>
								<a href="blog.php">How To Pick The Right hotel For You</a> What’s more, they’re absolutely free! You can do a lot with them.
							</p>
						</li>
					</ul>
				</div>
				<div>
					<form action="#" method="post" id="newsletter">
						<h4>Join Our Newsletter</h4>
						<input type="text" value="Enter Email Address Here For Updates" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						<input type="submit" value="Sign up" class="btn2" />
					</form>
					<div id="connect">
						<h4>Social Media</h4>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
					</div>
				</div>
			</div>
			<ul class="navigation" style="float:right">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
			<p id="footnote">
				<marquee>© Copyright 2023. All Rights Reserved.</marquee>
			</p>
		</div>
	</div>
</body>
</html>

 

