<?php
include_once("../be/session_security.php");
$fullname = $_SESSION["firstname"] . ' ' . $_SESSION['lastname'];

?>



<html>
  <head>
    <title>Karim Itani-Portfolio</title>
    <link rel="stylesheet" href="../css/Styling.css" />
    <link rel="stylesheet" href="../css/icons.css" />
  </head>
  <body>
    <div class = "div-page-info">
  Home-page
  
</div>
<div class = "hello-php">     <li><b>Hello, <?php echo htmlspecialchars($fullname); ?>!</b></li> </div>
    <div class = "row" id="header">
      <div id="dropdown-menu">
        <span> <i class = "ico plus-ico"></i></span>
        <div class = "dropdown-content">
          <ul>
                        
            <a href="home.php">
                        <li><i class="ico ico-l home-ico"></i>Home</li>
                        </a>
                        <a href="aboutme.php">
                            <li><i class="ico ico-l aboutme-ico"></i>About me </li>
                        </a>
                        <a href="cv.php">
                            <li><i class="ico ico-l cv-ico"></i>CV</li>
                        </a>
                        <a href = "project.php">
                          <li> <i class ="ico ico-l projects-ico"></i>Projects</li>
                        </a>
                        
          </ul>
        </div>
      </div>
    </div>

    <div class= "profile-pic-frame">
      <img src = "../images/1694984816618.jpeg" class ="profile-pic">
    </div>

           


    <div class = "home-container">
      <p> Hello my name is karim itani and welcome to my Portfolio website.There are 4 sections in this website with each section giving you an insight about my work Experience or my life. Browse and Enjoy!</p>
    </div>


    <a href="#socialLinksSection" class="contact-button">Contact Me</a>
    <a href  = "../be/logout.php" class ="logout-button">Log Out </a>
    
    <div class = " parent-social-links">
    <div class="social-links" id ="socialLinksSection">
    <h2>Social links and contact info</h2>
    <ul>
        <li>
            <a href="https://www.linkedin.com/in/karim-itani-267201217/"><i class="ico ico-l linkedin-ico"></i></a>
        </li>
        <li>
            <a href="https://github.com/karimitanii"><i class="ico ico-l github-ico"></i></a>
        </li>
        <li>
            <a href="mailto:karimitani33@gmail.com"><i class="ico ico-l email-ico"></i></a>
            <span class="contact-info"></span>
        </li>
        <li>
            <a><i class="ico ico-l phone-ico"></i></a>
            <span class="contact-info">+961 81729931</span>
        </li>
    </ul>
</div>
</div>

    </body>

    </html>