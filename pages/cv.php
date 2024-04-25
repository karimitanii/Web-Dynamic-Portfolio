<?php
include_once("../be/session_security.php");

?>

<html>
  <head>
    <title>Karim Itani-Portfolio</title>
    <link rel="stylesheet" href="../css/Styling.css" />
    <link rel="stylesheet" href="../css/icons.css" />
  </head>
  <body>

  
    <div class = "holder">
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

<div class="wrapper-cv">
<div class="content rounded-container">
      <h1>Education:</h1>
      <p>
        Sep 2022-Present&nbsp;&nbsp;&nbsp;&nbsp;Lebanese American University<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bachelor of Science in Computer Science
      </p>
      <p>
        2007-2022&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ras Beirut International School<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Life Sciences BAC
      </p>
    </div>

    <div class="content rounded-container">
      <h1>Experience:</h1>
      <p>
        Sep 2023 &nbsp;&nbsp;&nbsp;&nbsp; Teaching assistant <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contributed to teaching first year Computer Science students at <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the Lebanese American University.
      </p>
    </div>

    <div class="content rounded-container">
      <h1>Technical Skills:</h1>
      <p>
        <h3>Languages:</h3>
        <ul style = "font-size: large;">
          <li>Java</li>
          <li>C</li>
          <li>Python</li>
          <li>HTML</li>
          <li>PHP</li>
          <li>JavaScript</li>
          <li>SQL</li>
          <li>CSS</li>
          <li>arm v8</li>
        </ul>
        <h3>Developer Tools:</h3><ul style = "font-size: large;">
          <li>Visual Studio Code</li>
          <li>Visual Studio</li>
          <li>Eclipse</li>
          <li>IntelliJ</li>
          <li>Spyder</li>
          <li>Oracle</li>
          
        </ul>
        <h3>Operating Systems:</h3><ul style = "font-size: large;">
          <li>Windows</li>
          <li>Kali linux</li>
          <li>Ubunto</li>
          
          
        </ul>
      </p>
    </div>

    <div class="content rounded-container">
      <h1>Soft Skills:</h1>
      <ul style = "font-size: large;">
          <li>Leadership Qualities</li>
          <li>Patient</li>
          <li>Problem Solver</li>
          <li>Tech Inquisitive</li>
          <li>Self-aware</li>
          <li>Collabrative</li>
          <li>Accountable</li>
          <li>Eloquent</li>

          
          
          
        </ul>
    </div>

    <div class="content rounded-container">
      <h1>Languages Spoken:</h1>
      <ul style = "font-size: large;">
          <li>English</li>
          <li>Arabic</li>
          
          
          
        </ul>
    </div>

    </div>

<div class = "div-page-info">
  CV-page
</div>











</div>

  <a href="../offical-cv/Karim Itani- cv.docx" class="download-button">Click here to download my official CV!</a>


  </body>








  </html>
