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
    
    <div class = "div-page-info">
  Project-page
</div>
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
    

    <a href="#socialLinksSection" class="contact-button">Contact Me</a>
<a href  = "../be/logout.php" class ="logout-button">Log Out </a>

    
<div class = "project-container">
    
    <?php
$json_file = '../be/pics.json';

$json_data = file_get_contents($json_file);

$projects = json_decode($json_data, true);
?>

<?php foreach ($projects as $project): ?>
    <div class="project">
        <a href="https://github.com/karimitanii">
            
            <img src="<?php echo $project['link']; ?>" alt="Project Image">
        </a>
        <div class="description">
            
            <h3><?php echo $project['project_name']; ?></h3>
           
            <p><?php echo $project['description']; ?></p>
        </div>
    </div>
<?php endforeach; ?>


</div>

<div class = "github-info-proj"> 

<p>
    All the implemtation of the projects are found on my github repo. Just click on the project picture!

</p>

</div>




    
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

</div>

</body>
</html>