<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="marktplaats.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <script src="marktplaats.js"></script>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div class="header">
        <h1>De plek om nieuwe en tweedehands spullen te kopen</h1>
    </div>
  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#auto's">Auto's</a>
    <a href="#computers">Computers</a>
    <a href="#kleding">Kleding</a>
    <a href="#muziek">Muziek</a>
    <a href="#sport">Sport</a>
    <a href="#verzamelen">Verzamelen</a>
    <a href="#huis&tuin">Huis & Tuin</a>
    <div class="search-container">
      <form action="/action_page.php">
        <input type="text" name="search" placeholder="Search..">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div class="login-container">
        <a href="login/login.php" title="Go to Login">Login</a>
    </div>
    <!-- button up -->
    <div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>Top Advertenties</h2>
        <h5>Betaalde advertenties</h5>
        <div class="gallery">
          <a target="_blank" href="img/bmwx2.jpg">
            <img src="img/bmwx2.jpg" alt="Cinque Terre" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
        
        <div class="gallery">
          <a target="_blank" href="img/boot.jpg">
            <img src="img/boot.jpg" alt="boot" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
        
        <div class="gallery">
          <a target="_blank" href="img/motor.jpg">
            <img src="img/motor.jpg" alt="Northern Lights" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
        
        <div class="gallery">
          <a target="_blank" href="img/racefiets.jpg">
            <img src="img/racefiets.jpg" alt="racefiets" width="300" height="200">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
<br>
<!--slideshow-->
  <div class="row">
    <div class="leftcolumn">
    <div class="card">
      <div class="slideshow-container", background-color: blue;>
        <div id="slide1" class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img/belsimpel_banner.jpg" style="width:100%">
          <div class="text">Caption Text</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/img_snow_wide.jpg" style="width:100%">
          <div class="text">Caption Two</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/img_mountains_wide.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
    </div>
<!--portfolio gallery grid-->  
  <div class="card">
   <h3>Populaire Producten</h3>
   <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Populair</button>
    <button class="btn" onclick="filterSelection('auto')"> Auto</button>
    <button class="btn" onclick="filterSelection('mobiel')"> Mobiel</button>
    <button class="btn" onclick="filterSelection('lego')"> Lego</button>
  </div>
  
  <!-- Portfolio Gallery Grid -->
  <div class="row">
    <div class="column auto">
      <div class="content">
        <img src="img/bmw.jpg" alt="BMW" style="width:100%">
        <h4>Bmw</h4>
        <p>Sportieve Bmw</p>
      </div>
    </div>
    <div class="column auto">
      <div class="content">
      <img src="img/audi.jpg" alt="AUDI" style="width:100%">
        <h4>Audi</h4>
        <p>Sportieve Audi</p>
      </div>
    </div>
    <div class="column auto">
      <div class="content">
      <img src="img/mercedes.jpg" alt="MERCEDES" style="width:100%">
        <h4>Mercedes</h4>
        <p>Nieuwe Mercedes</p>
      </div>
    </div>
    
    <div class="column mobiel">
      <div class="content">
        <img src="img/iphone.jpg" alt="Car" style="width:100%">
        <h4>Iphone</h4>
        <p>Iphone nieuwe in doos</p>
      </div>
    </div>
    <div class="column mobiel">
      <div class="content">
      <img src="img/samsung.jpg" alt="Car" style="width:100%">
        <h4>Samsung</h4>
        <p>Samsung mobiel te koop</p>
      </div>
    </div>
    <div class="column mobiel">
      <div class="content">
      <img src="img/huawei.jpg" alt="Car" style="width:100%">
        <h4>Huawei</h4>
        <p>Huawei telefoon gebruikt</p>
      </div>
    </div>
    <div class="column lego">
      <div class="content">
        <img src="img/lego1.jpg" alt="Car" style="width:100%">
        <h4>Lego 1</h4>
        <p>Lego nieuw in doos</p>
      </div>
    </div>
    <div class="column lego">
      <div class="content">
      <img src="img/lego2.jpg" alt="Car" style="width:100%">
        <h4>Lego 2</h4>
        <p>Lego gebruikt</p>
      </div>
    </div>
    <div class="column lego">
      <div class="content">
      <img src="img/lego3.jpg" alt="Car" style="width:100%">
        <h4>Lego 3</h4>
        <p>Lego aanbieding</p>
      </div>
    </div>
  </div>
</div>
<!-- END GRID -->
<div class="card">
<form action="/action_page.php">
  <div class="container">
    <h2>Aanmelden Nieuwsbrief</h2>
  </div>

  <div class="container" style="background-color:#00BFFF">
  <input type="text" placeholder="Naam" name="name" required>
  <input type="text" placeholder="E-mail" name="mail" required>
  <label>
      <input type="checkbox" checked="checked" name="subscribe"> wekelijkse mail
  </label>
  </div>
  <div class="container">
    <input type="submit" value="Aanmelden">
  </div>
</form>
  </div>
 </div>
</div>

<!-- Footer -->
<footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>Marktplaats</h3>
      <p>Veilig handelen en hulp bij verkopen</p>
      <a href="url">Help & Info</a>
      <a href="url">Veilig Handelen</a>
      <a href="url">Gebruiksvoorwaarden</a>
      <a href="url">Privacybeleid</a>
    </div>
  
    <div class="w3-third">
      <h3>Adres</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="img/bmw.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Marktplaats</span><br>
          <span>Hoofdkantoor Amsterdam 1 </span>
        </li>
        <li class="w3-padding-16">
          <img src="img/audi.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large"></span><br>
          <span>PostNL Bezorgdienst</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>Categorieen</h3>
      <p>
        <span class="auto">Auto</span> <span class="verzamelen">Verzamelen</span> <span class="privacybeleid">Privacybeleid</span>
        <span class="computer">Computer</span> <span class="huis&tuin">Huis & Tuin</span> <span class=""></span>
        <span class="kleding">Kleding</span> <span class="veilighandelen">Veilig Handelen</span> <span class=""></span>
        <span class="muziek">Muziek</span> <span class="hulp&info">Hulp & Info</span> <span class=""></span>
        <span class="sport">Sport</span> <span class="gebruikersvoorwaarden">Gebruikersvoorwaarden</span>
      </p>
      <p>Powered by RL copyright @ 2018</p>
    </div>
  </footer>
</div>
</body>
</html>