<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Website</title>
    <link rel="stylesheet" href="style.css" />
   <script src="https://kit.fontawesome.com/b811c36675.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php 
      include_once './include/header.php';
    ?>
    <section>
      <!-- banner text -->
      <div class="text-container">
        <p>Hello everyone</p>
        <p>I'm Nguyen Phu Khang</p>
        <p>Jack of all Trades Developer</p>
        <button class="hire-button">Hire Me</button>
      </div>
      <!-- banner -->
      <img src="./image/eli-removebg-preview.png"  class="model" alt="" />
    </section>
    <!-- About container -->
    <div class="about-container">
      <img src="./image/about.jpg" alt="" />
      <div class="about-text">
        <p>About Me</p>
        <p>Developer & Designer</p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam
          consequatur aliquid perferendis molestias consequuntur ipsam, aut
          saepe obcaecati fuga optio temporibus voluptate accusantium quo
          impedit asperiores accusamus nulla quidem ab.
        </p>
        <a href="./about.html"><button>See More</button></a>
        
      </div>
    </div>
    <div class="services">
      <div class="services-text">
        <p>Details</p>
        <p>Lorem ipsum dolor sit amet.</p>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim
          deserunt eligendi doloremque dignissimos quis totam natus aliquid vero
          autem aut?
        </p>
      </div>
      <!-- box -->
      <div class="box-container">
        <div class="box-1">
          <span>1</span>
          <p class="heading">Lorem, ipsum.</p>
          <p class="details">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vel
            blanditiis nulla corporis adipisci amet quidem, non quia quam
            repellat.
          </p>
          <button>Read More</button>
        </div>
        <div class="box-2">
          <span>2</span>
          <p class="heading">Lorem, ipsum.</p>
          <p class="details">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vel
            blanditiis nulla corporis adipisci amet quidem, non quia quam
            repellat.
          </p>
          <button>Read More</button>
        </div>
        <div class="box-3">
          <span>3</span>
          <p class="heading">Lorem, ipsum.</p>
          <p class="details">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vel
            blanditiis nulla corporis adipisci amet quidem, non quia quam
            repellat.
          </p>
          <button>Read More</button>
        </div>
      </div>
    </div>
    <div class="contact-me">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      <button>Contact me</button>
    </div>
    <?php 
      include_once './include/footer.php';
    ?>
  </body>
</html>
