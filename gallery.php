<html>
<head>
	<meta charset="UTF-8">
	<title>INCREDIBLE INDIA</title>
	<link rel="stylesheet" href="css/styling.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
* {
    box-sizing: border-box;
}
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("gallery/giphy.gif");

    /* Full height */
    height: 790px; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
/*slideshow*/
body
{
    background-color: #000;
    padding: 2%;
    color: #ccc;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 1em;
}

a
{
    color: #0CC5DA;
    text-decoration: none;
}

a:hover
{
    color: #DCE808;
    text-decoration: underline;
}

p
{
  margin: 0 auto;
  width: 960px;
  margin-top: 1%;
  text-align: center;
}

p.larger
{
  font-size: 1.1em;
}

.container
{padding-top: 3px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
}

.container span
{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
}

.container ul, .container li
{
    padding: 0;
    margin: 0;
    list-style: none;
}

.container li
{
    display: none;
}

.container li.active
{
    display: inline;
}
/*end*/

body {
    margin: 0;
    font-family: Arial;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style>
<script src="jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){
  var width = 960;
    height = 538;
    var numberOfBlinds = 20;
    var margin = 2;
    var color = '#000';
  gapHeight = 100;

    var container = $('#container');

    container.width(width).height(height);
    var blindWidth = width / numberOfBlinds;

  images = new Array();
    $('ul li', container).each(function() {
    images.push($(this)); 
  });

  images[0].addClass('active');
  activeImage = 0;

  for (var i = 0; i < numberOfBlinds; i++) {
    var tempEl = $(document.createElement('span'));
    var borders = calculateBorders();

    tempEl.css({
      'left': i * blindWidth,
      border: margin + 'px solid ' + color,
      borderTop: borders.borderWidthTop + 'px solid ' + color,
      borderBottom: borders.borderWidthBottom + 'px solid ' + color,
      'height': height,
      'width': blindWidth
    });
                
    container.prepend(tempEl);
  };

  blinds = $('span', container);
  setTimeout(animateBorders, 1000);
});

function calculateBorders() {
  var random = Math.floor((Math.random()*9)+1);
  var borderWidthTop = (random / 10) * gapHeight;
  var borderWidthBottom = gapHeight - borderWidthTop;

  return {borderWidthTop: borderWidthTop, borderWidthBottom: borderWidthBottom};
}

function animateBorders() {
  var changeOccuredOnce = false;

  blinds.animate({
    borderTopWidth: height / 2,
    borderBottomWidth: height / 2
  }, 1000, function() {
    if(!changeOccuredOnce) {
      images[activeImage].removeClass('active');
      activeImage = (activeImage + 1) % images.length;
      images[activeImage].addClass('active');
      setTimeout(animateBorders, 3000);
      changeOccuredOnce = true;
    }

    var borders = calculateBorders();

    $(this).delay(300).animate({
      borderTopWidth: borders.borderWidthTop,
      borderBottomWidth: borders.borderWidthBottom
    }, 1000);
  });
}
</script>
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
	
<body >
<div class="bg">

<!-- Header -->


<div class="container" id="container" >
        <ul>
            <li class="active"><img src="gallery/b.jpg" alt="" /></li>
            <li><img src="gallery/cd.jpg" alt="" /></li>
            <li><img src="gallery/bc.jpg" alt="" /></li>
            <li><img src="gallery/z.jpg" alt="" /></li>
        </ul>
</div>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br><br>
<br>
<br></div><div>
<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="gallery/z.jpg" style="width:100%">
    <img src="gallery/b.jpg" style="width:100%">
    <img src="gallery/c.jpg" style="width:100%">
    <img src="gallery/d.jpg" style="width:100%">
    <img src="gallery/e.jpg" style="width:100%">
    <img src="gallery/cd.jpg" style="width:100%">
    <img src="gallery/g.jpg" style="width:100%">
  </div>
  <div class="column">

   <img src="gallery/de.jpg" style="width:100%">
    <img src="gallery/h.jpg" style="width:100%">
    <img src="gallery/i.jpg" style="width:100%">
    <img src="gallery/j.jpg" style="width:100%">
    <img src="gallery/j (2).jpg" style="width:100%">
    <img src="gallery/k.jpg" style="width:100%">
    <img src="gallery/l.jpg" style="width:100%">
  </div>  

 
  <div class="column">
  

    <img src="gallery/m.jpg" style="width:100%">
    <img src="gallery/n.jpg" style="width:100%">
    <img src="gallery/o.jpg" style="width:100%">
    <img src="gallery/p.jpg" style="width:100%">
    <img src="gallery/q.jpg" style="width:100%">
    <img src="gallery/r.jpg" style="width:100%">
    <img src="gallery/s.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="gallery/bc.jpg" style="width:100%">
    <img src="gallery/u.jpg" style="width:100%">
    <img src="gallery/v.jpg" style="width:100%">
    <img src="gallery/w.jpg" style="width:100%">
    <img src="gallery/x.jpg" style="width:100%">
    <img src="gallery/y.jpg" style="width:100%"> 
    <img src="gallery/ab.jpg" style="width:100%">
   
  </div>
</div></div>
<br>

<br>
<br>
<br>
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
 
