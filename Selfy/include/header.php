<?php 
    $navlinks=['home', 'about','resume'];  // array navlink chứa các title của cái nav
    $current_page=basename($_SERVER['SCRIPT_NAME'],".php"); 
    //biến current_page dùng để xác định xem m đang mở tab nào
    // vd: m đang mở tab home có đuôi file là "index.php" => $current_page="index"

    function outputNavLinks($navlinks,$current_page){
      $output=""; // biến in ra kết quả 
    // dòng foreach loop này dùng để chạy qua các phần tử của mảng $navlinks khá giống js hồi trc
     foreach ($navlinks as $item) {
       $href=$item;
       if($item == "home") {
          $href = 'index';
      }
      $class="";
      if ($href==$current_page) { // dòng này xác định xem nếu tab m đang mở trùng cái biến $href thì sẽ gán $class="active"
        $class="active";
      }
        $output.="<li><a href='{$href}.php' class='{$class}'> ". ucfirst($item) ."</a></li>";
     }  
     echo $output;
    }


?>
    <header>
      <nav class="navigation">
        <a href="" class="logo">
          <img src="./image/gintama_logo.png" width="25%" alt="" />
        </a>
        
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <ul class="menu">
          <!-- <li><a href="./index.php" class="active">Home</a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./resume.php">Resume</a></li> -->
          <?php 
            outputNavLinks($navlinks,$current_page);
          ?>
        </ul>
        
          <nav class="nav-2">
            <ul class="menu-2">
              <!-- <li><a href="./index.php" class="active">Home</a></li>
              <li><a href="./about.php">About</a></li>
              <li><a href="./resume.php">Resume</a></li> -->
              <?php 
                outputNavLinks($navlinks,$current_page);
              ?>
            </ul>
          </nav>
      </nav>
    </header>