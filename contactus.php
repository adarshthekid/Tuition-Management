<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
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
        <h1>Contact Us</h1>
        <h3>Home>Contact Us</h3>
        <div class="loc">
          <h2>Info</h2>
          <div class="short-info">
            <p><i class="fa-solid fa-phone"></i>&nbsp;+91&nbsp;9619052737</p>
            <p><i class="fa-solid fa-envelope"></i>&nbsp;greducation@gmail.com</p>
            <p><i class="fa-solid fa-house"></i>&nbsp;Farid Nagar, Bhandup West, Mumbai-400078</p>
          </div>
        </div>
       </div>
       <div class="dev">
        <div class="details">
        <form class="form" action="actions/contact.php" method="post" id="form">
      <div class="control">
        <label>Name:</label><br>
        <input type="text" name="Name" id="name" placeholder="Enter your Fullname">
      </div>
      <div class="control">
        <label>Email:</label><br>
        <input type="Email" name="Email" id="email" placeholder="Enter your Email">
      </div>
      <div class="control">
        <label>Phone Number:</label><br>
        <input type="number" name="Phone" id="phone" placeholder="Enter your Phone number">
      </div>
      <div class="control">
      <label for="category" class="form-label">Category</label><br>
          <select class="form-select" name="Category" id="category" aria-placeholder="Category:" required>
            <option value="" disabled selected>Select category</option>
            <option value="School">School</option>
            <option value="Science">Science</option>
            <option value="Commerce">Commerce</option>
          </select>
      </div>
        <div class="control">
          <label for="boards" class="form-label">Board</label><br>
          <select class="form-select" name="Board" id="boards" required>
            <option value="" disabled selected>Select board:</option>
            <option value="Maharashtra State Board">Maharashtra State Board</option>
            <option value="CBSE">CBSE</option>
          </select>
        </div>
        <div class="control">
          <label for="standards" class="form-label">Standards</label><br>
          <select class="form-select" name="Std" id="standards" required>
            <option value="" disabled selected>Select standards:</option>
            <option value="8">8th</option>
            <option value="9">9th</option>
            <option value="10">10th</option>
            <option value="11">11th</option>
            <option value="12">12th</option>
          </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
         </form>  
</div>
</div>
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
</body>
</html>