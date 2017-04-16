<?php get_header(); ?>


<!-- MAIN HERO IMAGE -->

<div class="container-fulid flex" id="main-hero" style="background-image: radial-gradient(circle farthest-corner at 10% 90%, transparent, rgba(46, 53, 61, 0.37) 36%), url(<?php echo get_template_directory_uri() ?>/images/background/main-hero.jpeg);">


  <div class="centered">
    <h2 class="header-title title_1">Up and coming</h2>
    <h2 class="header-title title_2">
      <strong class="important-text">Fish and chips</strong> restaurant</h2>
      <h2 class="header-title title_3">in <strong>Rotorua</strong></h2>
      <a href="#" class="btn action-button">Primary call to action</a>
  </div>
</div>




<!-- WELCOME SECTION -->

<div class="flex" id="welcome">

  <div class="container text-center">
    
    <h2 class="welcome-title">Welcome</h2>
    <h3 class="welcome-tagline">Some cool tag line</h3>

    <div class="hr">
      <div class="hr-fa">
        <i class="fa fa-cutlery" aria-hidden="true"></i>
      </div>
    </div>

    <div class="flex flex-box-wrap">

      <div class="flex-box-1">
        <img src="<?php echo get_template_directory_uri() ?>/images/tiles/Fish-N-Chips.png;" alt="">
        <h2>Header</h2>
        <h3>Header</h3>
        <a href="#" class="btn action-button">read more</a>
      </div>

      <div class="flex-box-2">
        <img src="<?php echo get_template_directory_uri() ?>/images/tiles/Fish-N-Chips.png;" alt="">
        <h2>Header</h2>
        <h3>Header</h3>
        <a href="#" class="btn action-button">read more</a>
      </div>

      <div class="flex-box-3">
        <img src="<?php echo get_template_directory_uri() ?>/images/tiles/Fish-N-Chips.png;" alt="">
        <h2>Header</h2>
        <h3>Header</h3>
        <a href="#" class="btn action-button">read more</a>
      </div>

    </div>
  </div>
  
</div>

<!-- weekly special section -->

<div id="specials" style="background: url(<?php echo get_template_directory_uri() ?>/images/background/special.jpeg)no-repeat center center fixed; height: 400px;">
  <div class="overlay">

    <div class="specials-content text-center">
      <h2 class="title-1">sushi for 2, Pay for 1!</h2>
      <h3 class="title-2">This week we can offer you a <strong>2 for 1</strong> coupon!</h2>
      <p>Mention “<strong>2for1</strong>” in the online reservation form. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra orn.</p>
      <a href="#" class="btn action-button">Order now</a>
    </div>

  </div>

</div>

<!-- About the food, food culture  -->

<div class="container flex" id="about">
  <div class="column_1">
    <img class="image-on-white" sizes="(max-width: 479px) 85vw, (max-width: 767px) 90vw, (max-width: 991px) 45vw, 460px" src="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5fbcb6d29ffc62000572_Sushi-5.jpg" srcset="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5fbcb6d29ffc62000572_Sushi-5-p-500x328.jpeg 500w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5fbcb6d29ffc62000572_Sushi-5-p-800x525.jpeg 800w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5fbcb6d29ffc62000572_Sushi-5.jpg 1000w"></div><div class="w-col w-col-6">
  </div>

  <div class="column_2 text-center">
    <h3 class="title-1">Our sushi</h3>
    <h3 class="title-2">Is <strong>super</strong> fresh!</h3>
    
    <div class="hr">
      <div class="hr-fa">
        <i class="fa fa-cutlery" aria-hidden="true"></i>
      </div>
    </div>

    <p>Really!&nbsp;We use only super fresh products straight from Japan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare,</p>
  </div>


</div>



<!-- about us section 2  --> 

<div class="flex" id="about_2">
  
  <div class="column_1 text-center">
    <div class="text">
      <h3 class="title-1">Our sushi</h3>
      <h3 class="title-2">Is <strong>super</strong> fresh!</h3>
      
      <div class="hr">
        <div class="hr-fa">
          <i class="fa fa-cutlery" aria-hidden="true"></i>
        </div>
      </div>

      <p>Really!&nbsp;We use only super fresh products straight from Japan. Lorem ipsum dolor sit amet, consectetur 
    </p>
    </div>
  </div>

  <div class="column_2">
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo get_template_directory_uri() ?>/images/background/special.jpeg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri() ?>/images/background/special.jpeg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>

      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>


</div>




<!-- MENU SECTION -->

<div class="flex" id="menu">

  <div class="container">
    
    <h2 class="welcome-title text-center">Menus</h2>
    <h3 class="welcome-tagline text-center">Some cool tag line</h3>

    <div class="hr">
      <div class="hr-fa">
        <i class="fa fa-cutlery" aria-hidden="true"></i>
      </div>
    </div>


    <h2 class="menu-title text-center">Main Menu</h2>
    <h4 class="text-center"><a href="#">see full menu</a> <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></h4>

    <div class="flex flex-box-wrap">

      <div class="flex-box-1">
          <div >
            <h6 class="menu-item small">Sake Temaki</h6>
            <h5 class="price btn action-button">$22,50</h5>
            <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
          </div>

          <div>
          <img class="right-align small-image" sizes="(max-width: 479px) 67vw, (max-width: 767px) 92vw, (max-width: 991px) 140px, 165px" src="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg" srcset="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-500x333.jpeg 500w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-800x532.jpeg 800w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1080x719.jpeg 1080w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1600x1064.jpeg 1600w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg 2000w">
            
          </div>

      </div>

      <div class="flex-box-2">
        <div>
          <img class="right-align small-image" sizes="(max-width: 479px) 67vw, (max-width: 767px) 92vw, (max-width: 991px) 140px, 165px" src="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg" srcset="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-500x333.jpeg 500w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-800x532.jpeg 800w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1080x719.jpeg 1080w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1600x1064.jpeg 1600w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg 2000w">
        </div>
        <div>
          <h6 class="menu-item small">Sake Temaki</h6>
          <h5 class="price btn action-button">$22,50</h5>
          <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
        </div>
      </div>

    </div>

    <hr>
    
    <h2 class="menu-title text-center">Lunch Menu</h2>
    <h4 class="text-center"><a href="#">see full menu</a> <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></h4>

    <div class="flex flex-box-wrap">

      

      <div class="flex-box-1">
          <div >
            <h6 class="menu-item small">Sake Temaki</h6>
            <h5 class="price btn action-button">$22,50</h5>
            <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
          </div>

          <div>
          <img class="right-align small-image" sizes="(max-width: 479px) 67vw, (max-width: 767px) 92vw, (max-width: 991px) 140px, 165px" src="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg" srcset="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-500x333.jpeg 500w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-800x532.jpeg 800w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1080x719.jpeg 1080w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1600x1064.jpeg 1600w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg 2000w">
            
          </div>

      </div>

      <div class="flex-box-2">
        <div>
          <img class="right-align small-image" sizes="(max-width: 479px) 67vw, (max-width: 767px) 92vw, (max-width: 991px) 140px, 165px" src="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg" srcset="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-500x333.jpeg 500w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-800x532.jpeg 800w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1080x719.jpeg 1080w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1600x1064.jpeg 1600w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg 2000w">
        </div>
        <div>
          <h6 class="menu-item small">Sake Temaki</h6>
          <h5 class="price btn action-button">$22,50</h5>
          <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
        </div>
      </div>

    </div>

    <hr>

    <h2 class="menu-title text-center">Breakfast Menu</h2>
    <h4 class="text-center"><a href="#">see full menu</a> <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></h4>

    <div class="flex flex-box-wrap">

      <div class="flex-box-1">
          <div >
            <h6 class="menu-item small">Sake Temaki</h6>
            <h5 class="price btn action-button">$22,50</h5>
            <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
          </div>

          <div>
          <img class="right-align small-image" sizes="(max-width: 479px) 67vw, (max-width: 767px) 92vw, (max-width: 991px) 140px, 165px" src="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg" srcset="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-500x333.jpeg 500w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-800x532.jpeg 800w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1080x719.jpeg 1080w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1600x1064.jpeg 1600w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg 2000w">
            
          </div>

      </div>

      <div class="flex-box-2">
        <div>
          <img class="right-align small-image" sizes="(max-width: 479px) 67vw, (max-width: 767px) 92vw, (max-width: 991px) 140px, 165px" src="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg" srcset="http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-500x333.jpeg 500w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-800x532.jpeg 800w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1080x719.jpeg 1080w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3-p-1600x1064.jpeg 1600w, http://uploads.webflow.com/531cb7ad83615ae35000069a/531f5dd2b6d29ffc62000550_Sushi-3.jpg 2000w">
        </div>
        <div>
          <h6 class="menu-item small">Sake Temaki</h6>
          <h5 class="price btn action-button">$22,50</h5>
          <p class="menu-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim.</p>
        </div>
      </div>

    </div>

    <hr>





  </div>
  
</div>






<!-- LOCATION MAP -->

<div class="container-map">

  <div id="map"></div>

</div>
  
  



<?php get_footer(); ?>


<script>
  function initMap() {
    var myLatLng = {lat: -38.1396099, lng: 176.2473443};

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      zoom: 14
    });

    // Create a marker and set its position.
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'My Location!'
    });
  }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtxqwb-9TB4RCoYX1XnJ2_QQYReNhx_0M&callback=initMap"
async defer></script>
