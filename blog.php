<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>INCREDIBLE INDIA</title>
    <link rel="stylesheet" href="css/styling.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*slideshow*/

body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("gallery/chem.gif");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
body {
    background-color: #f2f2f2;
}



em {
    color: #232027;
}

.wrapper {
    width: 80%;
    margin: 30px auto;
}

div.gallery {
    margin-top: 30px;
}

div.gallery ul {
    list-style-type: none;
    margin-left: 35px;
}

/* animation */
div.gallery ul li, div.gallery li img {
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}
div.gallery ul li, div.gallery li div {
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}

div.gallery ul li {
    position: relative;
    float: left;
    width: 230px;
    height: 230px;
    margin: 5px;
    padding: 5px;
    z-index: 0;
}

/* Make sure z-index is higher on hover */
/* Ensure that hover image overlapped the others */
div.gallery ul li:hover {
    z-index: 5;
}

/* Image is position nicely under li */
div.gallery ul li img {
    position: absolute;
    left: 0;
    top: 0;
    border: 1px solid #dddddd;
    padding: 5px;
    width: 230px;
    height: 230px;
    background: #f0f0f0;
}

div.gallery ul li img:hover {
    width: 400px;
    height: 400px;
    margin-top: -130px;
    margin-left: -130px;
    top: 65%;
    left: 65%;
}

p.attribution {
    font-family: 'Consolas';
    color: #000;
    clear: both;
    text-align: center;
    line-height: 25px;
    padding-top: 30px;
}

p.attribution a {
    color: #4c8d7c;
}

/* Responsive hack */
@media only screen and (min-width: 499px) and (max-width: 1212px) {
    .wrapper {
        width: 500px;
    }
}

@media only screen and (max-width: 498px) {
    .wrapper {
        width: 300px;
    }

    div.gallery ul {
        list-style-type: none;
        margin: 0;
    }
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

<body>
<div class="bg">
<br>
<br>
<h1> Places to visit</h1>
    <div class="wrapper">
        <div class="gallery">
            <ul>
                <li><img src="gallery/b.jpg"></li>
                <li><div style="background-color:black;font-size:16px;color:white;height:230px;width:230px;">TAJ-MAHAL
                <br>The queen of palaces.The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra.</li>
                <li><img src="gallery/d.jpg"></li>
                <li><div style="background-color:black;font-size:16px;color:white;height:230px;width:230px;">Kerela
                <br>The God’s Own Country, Kerala has some extremely beautiful tourist destinations to hold the attention of global tourists. There are hill-stations, backwaters, commercial cities, hamlets, and much more to explore. 
                                </li>
                <li><img src="gallery/n.jpg"></li>
                <li><div style="background-color:black;font-size:16px;color:white;height:230px;width:230px;">Chatrapati Shivaji terminus
                <br>Chhatrapati Shivaji Maharaj Terminus, formerly known as Victoria Terminus, is a historic railway station and a UNESCO World Heritage Site in Mumbai, Maharashtra, India which serves as the headquarters of the Central Railways</li>
                <li><img src="gallery/e.jpg"></li>
                <li><div style="background-color:black;font-size:16px;color:white;height:230px;width:230px;">Marine-drives
                <br>Marine Drive is a 3.6-kilometre-long Boulevard in South Mumbai in the city of Mumbai, India. It is a 'C'-shaped six-lane concrete road along the coast, which is a natural bay. The road links Nariman Point to Babulnath and Malabar Hill.</li>
                <li><img src="gallery/j.jpg"></li>
                <li><div style="background-color:black;font-size:16px;color:white;height:230px;width:230px;">Golden temple
                <br>The Golden Temple, also known as Darbar Sahib (Punjabi pronunciation: [dəɾbɑɾ sɑhɪb] or Sri Harmandir Sahib ("abode of God"), "exalted holy court"), is a Gurdwara located in the city of Amritsar, Punjab, India.It is the holiest Gurdwara and the most important pilgrimage site of Sikhism.</li>
                <li><img src="gallery/m.jpg"></li>
                <li><div style="background-color:black;font-size:16px;color:white;height:230px;width:230px;">Gateway Of India
                <br>The Gateway of India is an arch monument built during the 20th century in Mumbai, India.[2] The monument was erected to commemorate the landing of King George V and Queen Mary at Apollo Bunder on their visit to India in 1911.</li>
            </ul>
            </div>
            </div>
            </div>
            <div class="bg">
            </div>
        

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