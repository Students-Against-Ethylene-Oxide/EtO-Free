<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> EtO-Free Skincare </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="javascript.js"></script>
  <script type="text/javascript" src="jquery.js"></script>
  <link type="text/html" data-src="about.html" />
  <link type="text/html" data-src="eto.html" />
  <link type="text/html" data-src="reviews.html" />
</head>

<body>
  <header>
    <button id="menu-icon" onclick='change("menu-icon"); change("nav");' ontouchstart='change("menu-icon"); change("nav");'>
      <div id="bar1"></div>
      <div id="bar2"></div>
      <div id="bar3"></div></button>

    <a id="logo" href="index.html"> <img src="assets/images/logo.png" /> <h1> EtO-Free Skincare </h1> </a>

    <span id="topnav">
      <a href="index.html" class="toplinks"> Home </a>
      <a href="about.html" class="toplinks"> About </a>
      <a href="eto.html" class="toplinks"> What is ethylene oxide? </a>
      <a href="reviews.html" class="toplinks"> Reviews </a>

      <span id="search-box"
        onmouseover="change('topnav'); change('search-box'); document.getElementById('search-bar').click();"
        onmouseout="change('topnav'); change('search-box');">
        <button type="submit"><i class="fa fa-search"></i></button>
        <input id="search-bar" type="text" placeholder="Search" />
      </span>
    </span>

    <button id="search" onclick="change('menu-icon'); change('nav'); document.getElementById('search-input').click();" ontouchstart="change('menu-icon'); change('nav'); document.getElementById('search-input').click();"><i class="fa fa-search"></i></button>
  </header>

  <nav id="nav">
    <!-- <span> <input id="search-input" type="text" placeholder="Search" /><button type="submit"> <i class="fa fa-search"></i> </button> </span> -->
    <span> <a class="navlinks" href="index.html"> Home </a> </span>
    <span> <a class="navlinks" href="about.html"> About </a> </span>
    <span> <a class="navlinks" href="eto.html"> What is ethylene oxide? </a> </span>
    <span> <a class="navlinks" href="reviews.html"> Reviews </a> </span>
  </nav>

  <div class="home-page">
    <div>
      <h2> Welcome to EtO-Free Skincare!</h2>
      <p>
        We're just starting out, so please forgive our lack of content. We will be coming out with reviews and information on ethylene-oxide free products very soon! Until then, please enjoy our introductory video:
      </p>
    </div>

    <div>
      <iframe src="https://www.youtube.com/embed/-k3uZn9sFIY" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </iframe>
    </div>

    <div id="myDiv">

    </div>
  </div>

<?php echo readfile("javascript.js"); ?>
  <footer>
    <h5> Questions? Comments? Concerns? Life problems? Contact us at <a class='links' href="mailto:ethyleneoxide.free@gmail.com"> ethyleneoxide.free@gmail.com </a> <br><br>
    <em>EtO-Free is a SAEtO-sponsored group. For more information, please visit the website <a class="links" href="https://saeto.org" target="_blank">here.</a></em></h5>

    <span><a href="https://www.facebook.com/StudentsAgainstEthyleneOxide/" target="_blank"><i class='fa fa-facebook-square'></i></a> <a href="https://www.instagram.com/eto.free/" target="_blank"><i class='fa fa-instagram'></i></a> <a href="https://twitter.com/ethyleneofree" target="_blank"><i class='fa fa-twitter'></i></a> <a href="https://www.youtube.com/channel/UCCn6rB_FHHjlK51wkFqOHdQ" target="_blank"><i class="fa fa-youtube-play"></i></a></span>
  </footer>

</body>

</html>
