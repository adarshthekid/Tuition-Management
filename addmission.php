<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admission.css">
    <link rel="stylesheet" href="stylesheet.css">
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
        <h1>Addmission</h1>
        <h3>Home>Addmission</h3>
    </div>
    <div class="bob">
        <div class="contain">
            <header>Addmission Form</header>
            <form class="form" action="actions/admissionform.php" method="post" id="form">
                <div class="form-first">
                    <div class="details-personal">
                        <span class="title">Personal Details</span>
                        <div class="fields">
                            <div class="input-fields">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First Name" required name="FirstName">
                            </div>

                            <div class="input-fields">
                            <label>Surename</label>
                            <input type="text" placeholder="Enter Last Name" required name="SureName">
                            </div>

                            <div class="input-fields">
                            <label>Date of Brith</label>
                            <input type="Date" placeholder="Enter Last Name" required name="Date">
                            </div>

                            <div class="input-fields">
                            <label>Gender</label>
                            <select class="select" name="Gender" id="standards" required>
                               <option value="" disabled selected>Select gender:</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                             </select>
                           </div>

                            <div class="input-fields">
                            <label>Father Name</label>
                            <input type="text" placeholder="Enter Father Name" required name="FatherName">
                            </div>

                            <div class="input-fields">
                            <label>Mother Name</label>
                            <input type="text" placeholder="Enter Mother Namer" required name="MotherName">
                            </div>

                            <div class="input-fields">
                            <label>Email</label>
                            <input type="email" placeholder="Enter email" required name="Email">
                            </div>
                        </div>
                    </div>

                    <div class="details-personal">
                        <span class="title">Contact Details & Address</span>
                        <div class="fields">
                            <div class="input-fields">
                            <label>Father Number</label>
                            <input type="number" placeholder="Enter Father Number" required name="FatherNumber">
                            </div>

                            <div class="input-fields">
                            <label>Mother Number</label>
                            <input type="number" placeholder="Enter Mother Number" required name="MotherNumber">
                            </div>

                            <div class="input-fields">
                            <label>Parent Email</label>
                            <input type="email" placeholder="Enter Parent email" required name="ParentEmail">
                            </div>

                            <div class="input-fields">
                            <label>Address</label>
                            <input type="text" placeholder="Enter address" required class="a" name="Address">
                            </div>

                            <div class="input-fields">
                            <label>Pin Code</label>
                            <input type="number" placeholder="Enter Pin Code" required name="PinCode">
                            </div>

                        </div>
                    </div>

                    <div class="details-personal">
                        <span class="title">Academic Details</span>
                        <div class="fields">

                        <div class="input-fields">
                            <label>Standard</label>
                            <select class="select" name="Std" id="standards" required>
                               <option value="" disabled selected>Select standards:</option>
                                <option value="8">8th</option>
                                <option value="9">9th</option>
                                <option value="10">10th</option>
                                <option value="11">11th</option>
                                <option value="12">12th</option>
                             </select>
                           </div>


                            <div class="input-fields">
                            <label>College & School Name</label>
                            <input type="text" placeholder="Enter name" required name="College_name">
                            </div>

                            <div class="input-fields">
                            <label>College & School Address</label>
                            <input type="text" placeholder="Enter address" required name="Clg_Address">
                            </div>

                            <div class="input-fields">
                            <label>Pin Code</label>
                            <input type="number" placeholder="Enter Pin Code" required name="Clg_Pincode"><br>
                          </div>   
                    </div> 
                    <button class="btn btn-primary" type="submit">Submit form</button> 
                  </div>
            </form>
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
 
</body>
</html>