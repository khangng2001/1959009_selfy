<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="style-resume.css">
    <script src="https://kit.fontawesome.com/b811c36675.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body> 
    <?php 
        include_once './include/header.php';
    ?>
    <div class="grid-container">
        <div class="left-section"></div>
        <div class="middle-section">
            <div class="basic-information">
                <h1>Nguyen Phu Khang</h1>
                <ul>
                    <li><i class="fas fa-user"></i>19</li>
                    <li><i class="fas fa-map-marked-alt"></i>HCM City</li>
                    <li><i class="fas fa-building"></i>Jack of all Trades Developer</li>
                    <li><i class="fas fa-mobile"></i>+84 448569</li>
                </ul>
            </div>

            <div class="bio">
                <h2>Bio</h2>
                <div class="dash"> </div>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe voluptatibus cupiditate animi eius consectetur minima ab. Nemo nihil eaque quae.</p>
                <div class="educational-background">
                    <h2>Education</h2>
                     <div class="dash"></div>
                      <ul>
                             <li>Lorem ipsum dolor sit amet.</li><br>
                             <li>Lorem ipsum dolor sit amet.</li><br>
                             <li>Lorem ipsum dolor sit amet.</li><br>
                         </ul>
                </div>
            </div>
        </div>
        <div class="right-section">
            <div class="skills">
                <h2>Skills</h2>
                <ul>
                    <li>Lorem, ipsum. 
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star"></i></span>    
                    </li>

                    <li>Lorem, ipsum. 
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>    
                    </li>

                    <li>Lorem, ipsum. 
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star  checked"></i></span>
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star checked"></i></span>    
                    </li>

                    <li>Lorem, ipsum. 
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star checked"></i></span>
                        <span><i class="fas fa-star"></i></span>    
                    </li> 
                </ul>
            </div>

            <div class="accounts">
              <h2>Accounts</h2>
              <a href="https://www.facebook.com/profile.php?id=100006123491446"> <i class="fab fa-facebook-square" style="margin-right:10px;font-size:35px;opacity:0.3; "></i></a>
            
             <!-- <i class="fab fa-twitter-square" style="margin-right:10px;font-size:35px;opacity:0.3; "></i> -->
             <a href="https://www.instagram.com/khang__ng/"><i class="fab fa-instagram" style="margin-right:10px;font-size:35px;opacity:0.3; "></i></a>
            
            </div>
            <div class="experience">
                <h2>Experience</h2>
                <div class="dash"></div>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eligendi.</li><br>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eligendi.</li><br>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eligendi.</li><br>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eligendi.</li><br>
                </ul>
            </div>
        </div>
    </div>
    
</body>
</html>