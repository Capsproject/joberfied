<section id="banner">
  <link rel="stylesheet" href="style.css">
   <!-- Slider -->
  <div id="main-slider" class="flexslider">
      <ul class="slides">
          <li>
              <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.png" alt="" />
              <div class="flex-caption">
                  <!-- Add content for the first slide here -->
              </div>
          </li>
        
      </ul>
  </div>
  <!-- End Slider -->
       
   
      <div class="slider">
          <!-- Images will be added here dynamically -->
      </div>
      
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="slick/slick.min.js"></script>
      <script>
          // Fetch image data from the server
          $.getJSON('api/get_images.php', function(data) {
              const slider = $('.slider');
              data.forEach(image => {
                  slider.append(
                      `<div><img src="${image.image_url}" alt="${image.title}"></div>`
                  );
              });
  
              // Initialize the slider
              $('.slider').slick({
                  autoplay: true,
                  arrows: false
              });
          });
      </script>
  
  
    </section> 
    <section id="call-to-action-2" style="background-color: #fff; 
                                         border-width: 1px; 
                                         border-color: grey; 
                                         box-shadow: 0 1px 3px 0  #ccc;
                                         border-radius: 10px;">
      <div class="container" >
        <div class="row">
          <div class="col-md-10 col-sm-9" >
            <h3>Partner with Business Leaders</h3>
            <p>Development of successful, long term, strategic relationships between customers and suppliers, based on achieving best practice and sustainable competitive advantage. In the business partner model, HR professionals work closely with business leaders and line managers to achieve shared organisational objectives.</p>
          </div>
        
        </div>
      </div>
    </section>
    <!-------------------------------------------------------START CARD----------------------------------------------------------->
  
    <section id="content" style="background-color: #F1F0F0;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aligncenter">
            <h2 class="aligncenter">Job</h2>
          </div>
          <div class="info-blocks-in" style="margin-top: 25px;">
  
            <?php
            $sql = "SELECT * FROM `tbljob`";
            $mydb->setQuery($sql);
            $comp = $mydb->loadResultList();
  
            foreach ($comp as $job) {
              // Your PHP code here
            ?>

  
              <div class="container" style="width: 80%;">
                <div class="info-blocks-in" style="background-color: #fff; border-width: 1px; border-color: grey; box-shadow: 0 2px 3px 0 #ccc; border-radius: 10px; margin-top: 30px; padding-bottom: 30px;">
                <div class="content">
                <img src="plugins/home-plugins/img/peso_logo.png" class="logopost" alt="">
               
      
       <div class="user-details">
        <div class="user-name"><p>PESO MABINI</p></div>
        <div class="post-date"><?php echo $job->DATEPOSTED; ?></div>
      </div>
    </div>
<!--------------------CAPTION------------------------>
    <div class="container" style="width: auto;">
    <?php 
        $caption = str_replace(array('\r', '\n'), array('<br>', ''), $job->CAPTION);
        $words = explode(" ", $caption);
        $shortCaption = implode(" ", array_slice($words, 0, 10));
        $remainingCaption = implode(" ", array_slice($words, 10));
    ?>
    <div class="caption">
        <span class="short-caption"><?php echo $shortCaption; ?></span>
        <?php if (count($words) > 10): ?>
            <span class="remaining-caption" style="display: none;"><?php echo $remainingCaption; ?></span>
            <span class="read-more" style="cursor: pointer;" onclick="toggleCaption(this)"> See more</span>
        <?php endif; ?>
    </div>
</div>
<script>
    function toggleCaption(element) {
        var captionContainer = element.closest('.container');
        var remainingCaption = captionContainer.querySelector('.remaining-caption');
        var readMoreButton = captionContainer.querySelector('.read-more');

        if (remainingCaption.style.display === 'none' || remainingCaption.style.display === '') {
            remainingCaption.style.display = 'inline';
            readMoreButton.textContent = ' ';
        } else {
            remainingCaption.style.display = 'none';
            readMoreButton.textContent = ' See more';
        }
    }

    document.addEventListener('click', function (event) {
        // Check if the clicked element is not a read-more link
        if (!event.target.classList.contains('read-more')) {
            // Hide all captions if they are visible
            document.querySelectorAll('.remaining-caption').forEach(function (caption) {
                caption.style.display = 'none';
            });

            // Reset all read-more buttons to 'See more'
            document.querySelectorAll('.read-more').forEach(function (readMoreButton) {
                readMoreButton.textContent = ' See more';
            });
        }
    });
</script>
<style>
    .read-more {
        color: green;
        cursor: pointer;
    }
</style>
<!--------------------CAPTION END------------------------>

          
                
                  <div class="image-container">
                    <img class="jobphoto" src="<?php echo web_root . 'admin/vacancy/' . $job->JOBPHOTO; ?>" alt="Job Photo">
                  </div>
                  <?php
                  if (isLoggedIn()) {
                    if (isset($_GET['search'])) {
                      $COMPANYNAME = $_GET['search'];
                    } else {
                      $COMPANYNAME = '';
                    }
  
                    $sql = "SELECT * FROM `tblcompany` c, `tbljob` j 
                            WHERE c.`COMPANYID` = j.`COMPANYID` AND COMPANYNAME LIKE '%" . $COMPANYNAME . "%' 
                            ORDER BY DATEPOSTED DESC";
                    $mydb->setQuery($sql);
                    $jobList = $mydb->loadResultList();
  
                    echo '<a href="' . web_root . 'index.php?q=viewjob&search=' . $job->JOBID . '" class="btn btn-main btn-next-tab pull-right">View Details</a><br>';
                  } else {
                    echo '<a class="btn btn-main btn-next-tab pull-right login" data-target="#myModal" data-toggle="modal" href="">Login to Apply</a><br>';
                  }
                  ?>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section>
  <?php
  $sql = "SELECT * FROM `tblcompany`";
  $mydb->setQuery($sql);
  $comp = $mydb->loadResultList();
  
  function isLoggedIn() {
      return isset($_SESSION['APPLICANTID']);
  }
  
  ?>
   </div>
    </section>

  <!-------------------------TRAINING SECTION---------------------->
  
  <!-------------------------TRAINING SECTION END---------------------->
  <section id="content" style="background-color: #F1F0F0;">
      <div class="container" >
        <div class="row">     
          <div class="col-md-12 " style="background-color: #fff; 
                                         border-width: 1px; 
                                         border-color: grey; 
                                         box-shadow: 0 2px 3px 0  #ccc;
                                         border-radius: 10px;">
                                         
          <div class="aligncenter"><h2 class="aligncenter">Category</h2></div>
        <div class="info-blocks-in" style="margin-top: 25px;">
            <?php 
              $sql = "SELECT * FROM `tblcategory`";
              $mydb->setQuery($sql);
              $cur = $mydb->loadResultList();
  
              foreach ($cur as $result) {
                echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
              }
            ?>
        </div>
          </div>
        </div>
        </div>
     
    </section>    
  
    <section id="content-3-10" class="content-block data-section nopad content-3-10">
    <div class="image-container col-sm-6 col-xs-12 pull-left">
      <div class="background-image-holder">
  
      </div>
    </div>
  
    <div class="container-fluid" >
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
          <div class="editContent">
            <h3>About Peso</h3>
        
          <div class="editContent"  style="height:235px;">
            <p> 
            &nbsp;&nbsp;The Public Employment Service Office or PESO is a multi-service facility established to provide employment information and assistance to the Department of Labor and Employment (DOLE) clients and constituents of Local Government Units (LGU).<br/><br/>
  </p>
          </div> 
        </div>
      </div><!-- /.row-->
    </div><!-- /.container -->
  </section>
    
    <div class="about home-about">
          <div class="container">
              
             
                    </div>
                </div>
    