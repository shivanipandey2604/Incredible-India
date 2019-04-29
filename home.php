<html>
<head>
	<meta charset="UTF-8">
	<title>INCREDIBLE INDIA</title>
	<link rel="stylesheet" href="css/styling.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* slideshow of images*/
body {
font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;
max-height:450px;
max-width:1335px;
padding: 6px 0 0;

}

/* Slideshow container */
.slideshow-container-fluid {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 0px;
  width: 0px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("gallery/multi.gif");

    /* Full height */
    height: 1700px; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body id="tp">
	<div id="header">
		
			
				<a id="logo" href="home.php"><img src="gallery/a.png" alt="LOGO" style="width:350px;float:left;"></a>
		
			<ul id="navigation" style="float:right;">
				<li class="selected">
					<a href="about.php">Home</a>
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
		
<body >
<div class="bg">
<div class="slideshow-container-fluid" >

<div class="mySlides fade">
  
  <img src="gallery/b.jpg" style="width:1220px" position="relative" 
> <span class="info"> Crown Of PALACES </span>

 
</div>

<div class="mySlides fade">
  
  <img src="gallery/c.jpg" style="width:1220px"><span class="info"> Panthera tigris </span>

 
  
</div>

<div class="mySlides fade">
  
  <img src="gallery/d.jpg" style="width:1220px"><span class="info">Kerala backwaters</span>
</div>
<div class="mySlides fade">
  
  <img src="gallery/e.jpg" style="width:1220px"><span class="info">Marine drives</span>
 
</div>
<div class="mySlides fade">
  
  <img src="gallery/n.jpg" style="width:1220px"><span class="info">Chatrapati Shivaji Terminus</span>
 
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
    <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

<div id="contents" style="padding-left:200px;">
		<div class="body">
				
				<ul id="featured">
				<h1>ATITHI DEVO BHAVA!!!</h1>
					<li >
						<div>
							<img src="gallery/g.jpg" alt="Img"> <a href="home.php"></a>

						</div>
						<div class="details"  >

							<h4>KASHMIR</h4>
							<p>
							A paradise on earth-KASHMIR.
							They say if there is heaven on Earth, it is in Kashmir, and they are right. The valley, set amidst the mighty Himalayan mountains, holds the most stunning sights for visitors
							</p>

						</div>
					</li>
					<li class="bedroom">
						<div>
							<img src="gallery/i.jpg" alt="Img"> <a href="index.php"></a>
						</div>
						<div class="details">
							<h4>NAINITAL</h4>
							<p>
							Nainital, the jewel of Uttarakhand located in the Kumaon region of the state, is often called the ‘Queen of Lakes’, and for good reason! One can find seven lakes in and around Nainital that draw travelers from far and wide.
							</p>
						</div>
					</li>
					<li class="kitchen">
						<div>
							<img src="gallery/j.jpg" alt="Img"> <a href="index.php"></a>
						</div>
						<div class="details">
							<h4>AMRITSAR</h4>
							<p>
								Religion or faith have no bar here. You could even be non-religious. Yet, the sanctity of Harmandir Sahib, popularly known as Golden Temple will touch your heart. It is located in the city of Amritsar in one of the northern states of India.
							</p>
						</div>
					</li>
					<li class="varanasi">
						<div>
							<img src="gallery/k.jpg" alt="Img"> <a href="index.php"></a>
						</div>
						<div class="details">
							<h4>VARANSI</h4>
							<p>
								Varanasi is one of the world’s oldest continuously inhabited cities and is dripping in history and spirituality. Varanasi is a spiritual city, where Hindus go to pray, wash away their sins and honour their dead on the banks of the Ganges.
							</p>
						</div>
					</li>
					<li class="jodhpur">
						<div>
							<img src="gallery/l.jpg" alt="Img"> <a href="index.php"></a>
						</div>
						<div class="details">
							<h4>JODHPUR</h4>
							<p>
								With ancient architecture framing its magnificent landscape, Jodhpur has a managed to capture the imagination of the world.  The Brahmins of the city used to live in blue coloured buildings, which is how Jodhpur earns its title as the Blue City of India.


							</p>
						</div>
					</li>
					<li class="mumbai">
						<div>
							<img src="gallery/m.jpg" alt="Img"> <a href="index.php"></a>
						</div>
						<div class="details">
							<h4>MUMBAI</h4>
							<p>
							Experiencing a rich influx of tourists throughout the year, Mumbai offers a mix of everything-from beaches to hills, historical monuments to ultra architecture. It boasts of glitzy-glamour filled lifestyle.Mumbai is commonly known as ‘The City of Dreams’.
								
							</p>
						</div>
					</li>
					<li class="Kerela">
						<div>
							<img src="gallery/o.jpg" alt="Img"> <a href="index.php"></a>
						</div>
						<div class="details">
							<h4>KERELA</h4>
							<p>
							The God’s Own Country, Kerala has some extremely beautiful tourist destinations to hold the attention of global tourists. There are hill-stations, backwaters, commercial cities, hamlets, and much more to explore. 
								
							</p>
						</div>
					</li>
					<li class="gujrat">
						<div>
							<img src="gallery/p.jpg" alt="Img"> <a href="index.php"></a>
						</div>
						<div class="details">
							<h4>GUJRAT</h4>
							<p>
							Many of those who come to visit Kutch, Gujarat, come to see the famous Great Rann, one of the largest salt marshes in the world.Kutch is famous: first and foremost it is known for its rich traditions in handicrafts. 
							</p>
						</div>
					</li>
					<li class="goa">
						<div>
							<img src="gallery/q.jpg" alt="Img"> <a href="index.php"></a>
						</div>
						<div class="details">
							<h4>GOA</h4>
							<p>
							Goa, the party capital of India, is known for its beaches, sunburn festival and lots more. Aptly named as India’s Nightlife Capital.Known as "Pearl of the Orient" and "Tourist Paradise", the state of Goa is located on the western coast.
							</p>
						</div>
					</li>
				</ul>
</div>
</div>
</div>

				
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
