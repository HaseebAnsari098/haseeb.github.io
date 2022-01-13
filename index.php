<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haseeb Ansari</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <h1>Haseeb</h1>
      </div>
      <input type="checkbox" id="chk">
      <label for="chk" class="check">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="contact.html">Contact us</a></li>
        <li><a href="project.html">Projects</a></li>
        <li><a href="https://www.fiverr.com/haseebdevelop?up_rollout=true" class="btn">Hire me</a></li>
      </ul>
    </nav>
    <main>
      <div class="box1">
       <div class="hero">
         <h1>Hello,</h1>
         <h1>My name is,</h1>
         <h1><span>Haseeb Ansari</span></h1>
         <button class="cssbuttons-io-button"> Download CV
          <div class="icon">
            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
          </div>
       </div> 
      </div>
      <div class="box2">
        <img src="bg.png" alt="">
      </div>
      <div class="down">
        <div class="box">
          <a href="#about"><span></span>
          <span></span>
          <span></span>
        </a>
          </div>
      </div>
    </main>
  </header>  

  <!-- about -->

  <section id="about">>
    <div class="about-box" id="about-box">
      <div class="sec-1">
      <img src="side.png" alt="">
    </div>
    <div class="sec-1">
      <h1 class="h1">About Us</h1>
      <p>
        Welcome to Haseeb Ansari, your number one source for all things. We're dedicated to giving you the very best of web development, with a focus on SEO, Responsives, High ranking
        
        <br>
        Founded in 2018 by Haseeb Ansari, Haseeb Ansari has come a long way from its beginnings in Pakistan. When Haseeb first started out,their passion for  so that Haseeb Ansari can offer you . We now serve customers all over , and are thrilled that we're able to turn our passion into our own website.
        <br>
        
      WeI hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
      </p>
    </div>
  </section>

  <!-- services -->

  <section id="services">
    <div class="title">
      <h1>Why People Believe in <span> Us </span></h1>
      <p>
        Always render more and better service than
        is expected of you, no matter what your ask may be</p>
    </div>
    <div class="service-box">
      <div class="col-1">
        <i class="fas fa-laptop"></i>
        <h1>Web Design</h1>
      </div>      
      <div class="col-1">
        <i class="fas fa-code"></i>
        <h1>Web development</h1>
      </div>
      <div class="col-1">
        <i class="fas fa-brush"></i>
        <h1>Web development</h1>
      </div>
      <div class="col-1">
        <i class="fas fa-server"></i>
        <h1>Server</h1>
      </div>
      <div class="col-1">
        <i class="fas fa-search"></i>
        <h1>SEO</h1>
      </div>
      <div class="col-1">
        <i class="fas fa-mobile-alt"></i>
        <h1>Responsive Design</h1>
      </div>
    </div>
  </section>

<!-- footer -->

<footer>
  <h1>Haseeb Ansari</h1>
  <span></span> 
  <div class="social">
    <a href="https://www.facebook.com/profile.php?id=100049949230369"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/haseebansari662/"><i class="fab fa-instagram"></i></a>
    <a href="https://twitter.com/entrepreneurtr6"><i class="fab fa-twitter"></i></a>
    <a href="https://github.com/HaseebAnsari098"><i class="fab fa-github"></i></a>
  </div>
  <p>&copy;Haseeb Ansari Production.</p>
</footer>
<div class="loader-container">

  <img src="loader.gif" alt="">
</div>


<script>
function loader(){
document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut(){
setInterval(loader, 3000);
}

window.onload = fadeOut;
</script>
<style>
.loader-container{
  position: fixed;
  top:0; left:0;
  height:100%; 
  width:100%;
  z-index: 10000;
  background:#fff;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.loader-container img{
  width:35rem;
}

.loader-container.fade-out{
  top:-110%;
  opacity:0;
}

.fade-out{
  position: fixed;
  top:0; left:0;
  height:100%; 
  width:100%;
  z-index: 10000;
  background:#fff;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.fade-out img{
  width:35rem;
}

.fade-out.fade-out{
  top:-110%;
  opacity:0;
}
</style>
</body>
</html>