<?php get_header(); ?>

<?php get_template_part( 'includes/home', 'slider' ); ?>


<div class="container text-center padding">

  <h2>Welcome to <span>My website</span></h2>
  <p class="lead">Here at Nelson Bays Property Management, your investment is treated like it’s our own. Taking charge of full property management services to investors and property owners, partnership is guaranteed, maximising the return on investment through efficient performance. With combined extensive knowledge on local markets and customized marketing strategies, values are maximized and risks are minimised, thus promoting long-term sustainable tenancy</p>


</div><!-- Container-fluid end -->

<div class="container padding">

  <div class="flex">

    <div>
      <img src="<?php echo get_template_directory_uri() ?>/images/tiles/coffee-cup-mug-cafe.jpg" alt="">
      <h2>header</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    </div>

    <div>
      <img src="<?php echo get_template_directory_uri() ?>/images/tiles/coffee-cup-mug-cafe.jpg" alt="">
      <h2>header</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    </div>

    <div>
      <img src="<?php echo get_template_directory_uri() ?>/images/tiles/coffee-cup-mug-cafe.jpg" alt="">
      <h2>header</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    </div>

  </div>
  
</div>







<?php $loop = new WP_Query( array( 'post_type' => 'staff', 'posts_per_page' => 10, 'order' => 'ASC' ) ); ?>
  

<?php $i = 0; if ($loop->have_posts()) : ?>

<div class="container text-center">
  
  <h2>Meet the <span>Team</span></h2>
  
  <div class="row">

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-lg-3">
        <img class="rounded-circle" src="<?php the_post_thumbnail_url(); ?>" alt="Generic placeholder image" width="140" height="140">
        <p><b><?php the_title( ); ?></b></p>
        <p><?php the_content( ); ?></p>

      </div><!-- /.col-lg-4 -->

    <?php $i++; endwhile; ?>
   
  </div>

</div>

<?php endif ?>




<div class="container-fluid" style="position: relative; padding: 0; margin: 0;">

<div id="map"></div>

  <h2 class="text-center" style="top: 0;position: absolute;left: 50%;-webkit-transform: translateX(-50%);transform: translateX(-50%);
 ">Get in <span>Touch</span></h2>
  
  <div class="contact-wrap" style="position: absolute; top: 0; right: 0; ">
   
      <div style="width: 600px; margin: 40px;">
  
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your full name">
          </div>
  
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Provide your email address">
          </div>
  
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter a contact phone number">
          </div>
  
          <div class="form-group">
            <label for="exampleInputEmail1">Message</label>
            <textarea name="" id="" class="form-control" cols="30" rows="10" placeholder="What do you want?"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    
  </div>
  


</div><!-- Container-fluid end -->

<?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => 10, 'order' => 'ASC' ) ); ?>

<?php $i = 0; if ($loop->have_posts()) : ?>

<div class="container-fluid" style="background: #eee;">

  <div class="container padding">

    <h2 class="text-center">What our clients are <span>Saying</span></h2>
    
    

    <!-- Carousel
  ================================================== -->
  <section class="myCarousel-slider">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

      
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <?php if ($i == 0): ?>
        <div class="item active">
      <?php else: ?>
        <div class="item">
      <?php endif; ?>
          <blockquote class="blockquote">
        <p class="mb-0"><i class="fa fa-quote-left fa-3x fa-pull-left fa-border" aria-hidden="true"></i><?php the_content(); ?></p>
        <p class="pull-right"><small><?php the_title() ?></small></p>
      </blockquote>
        </div> <!-- item -->

      <?php $i++; endwhile; ?>
      </div> <!-- carousel-inner -->
    </div><!-- /.carousel -->
  </section>

  </div>

 <?php endif ?> 


</div><!-- Container-fluid end -->

<?php get_footer(); ?>