<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <header>
    <div class="container">
      <div class="logo">
      <a href="index.php">
      <img src="imgs/GR.png" alt="GR EDUCATION">
      </div>
      <div class="list">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About US</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="addmission.php">Addmission</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="loginpage.php"><i class="fa-solid fa-user"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="about">
        <h1>Gallery</h1>
        <h3>Home>Gallery</h3>
    </div>
    <div class="gallery"></div>
      <div class="buttons">
        <button class="active"data-name="All">All</button>
        <button data-name="2021">2021-22</button>
        <button data-name="2022">2022-23</button>
        <button data-name="Functions">Functions</button>
       </div>

       <div class="image-card">
        <div class="card" data-name="2021">
          <img src="imgs/people.jpg">
        </div>

        <div class="card" data-name="2022">
          <img src="imgs/people3.jpg">
        </div>

        <div class="card" data-name="Fuctions">
          <img src="imgs/people2.jpg">
        </div>

        <div class="card" data-name="Fuctions">
          <img src="imgs/people4.jpg">
        </div>

        <div class="card" data-name="Fuctions">
          <img src="imgs/people5.jpg">
        </div>

        <div class="card" data-name="Fuctions">
          <img src="imgs/people.jpg">
        </div>

        <div class="card" data-name="Fuctions">
          <img src="imgs/people2.jpg">
        </div>

       </div>
    </div>
    </header>
    <footer class="footer ">
    <div class="fo-logo">
      <div class="dese">
        <img src="imgs/GR.png" alt="GR EDUACTION"></img>
        <p id="solo">We Belive In Quality Education</p><br>
        <p class="de">Discipline + Deication + Education = Success</P>
      </div>
      <div class="dese">
        <h5>LET US HELP</h5>
        <a href="addmission.php">Addmission Form</a><br><br>
        <a href="contactus.php">Have any query</a><br><br>
        <a href="#">Courses</a>
      </div>
      <div class="dese">
        <h5>Moments of GR Education</h5>
        <a href="gallery.php">Happy Moments of GR</a><br><br>
        <a href="#">Testimonials</a><br><br>
        <a href="aboutus.php">About GR</a>
      </div>
      <div class="dese">
        <h5>Contact US</h5>
          <p><i class="fa-solid fa-house"></i>&nbsp;Farid Nagar, Bhandup West, Mumbai-400078</p><br>
          <p><i class="fa-solid fa-envelope"></i>&nbsp;greducation@gmail.com</p><br>
          <p><i class="fa-solid fa-phone"></i>&nbsp;+91&nbsp;9619052737</p>
      </div>
    </div>
    <hr>
    <div class="end">
     <p>Copyright <i class="fa-regular fa-copyright"></i> 2024 | All Rights Reserved to GR Education | Designed & Developed by<span>&nbsp;ADARSH</span><br><br>
     <i class="fa-solid fa-house" id="house"></i><i class="fa-brands fa-facebook" id="face"></i><i class="fa-brands fa-whatsapp" id="whats"></i><i class="fa-brands fa-instagram" id="in"></i>
    </div>
</footer> 
    <script src="script.js"></script>
</body>
</html>