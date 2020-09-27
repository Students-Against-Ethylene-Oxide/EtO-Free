<header>
  <button id="menu-icon" onclick='changeThis.call(this); change("nav");' ontouchstart='change("menu-icon"); change("nav");'>
    <div id="bar1"></div>
    <div id="bar2"></div>
    <div id="bar3"></div></button>

  <a id="logo" href="index.php"> <img src="assets/images/logo.png" /> <h1> EtO-Free Skincare </h1> </a>

  <span id="topnav">
    <a href="index.php" class="toplinks"> Home </a>
    <a href="about.php" class="toplinks"> About </a>
    <a href="eto.php" class="toplinks"> What is ethylene oxide? </a>
    <a href="reviews.php" class="toplinks"> Product Reviews </a>
    <a href="companies.php" class="toplinks"> EtO-Free Companies </a>
  </span>

  <button id="search" onclick="change('menu-icon'); change('nav'); document.getElementById('search-input').click();" ontouchstart="change('menu-icon'); change('nav'); document.getElementById('search-input').click();"><i class="fa fa-search"></i></button>
</header>

<nav id="nav">
  <!-- <span> <input id="search-input" type="text" placeholder="Search" /><button type="submit"> <i class="fa fa-search"></i> </button> </span> -->
  <span> <a class="navlinks" href="index.php"> Home </a> </span>
  <span> <a class="navlinks" href="about.php"> About </a> </span>
  <span> <a class="navlinks" href="eto.php"> What is ethylene oxide? </a> </span>
  <span> <a class="navlinks" href="reviews.php"> Product Reviews </a> </span>
  <span> <a class="navlinks" href="companies.php"> EtO-Free Companies </a> </span>
</nav>
