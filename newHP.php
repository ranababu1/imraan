<?php
/**
 * Template Name: Homepage
 * @package iwsagency
 */

get_header();

?>


<div class="home_banner_area">
  <div class="container box_1620">
    <div class="banner_inner d-flex align-items-center">
      <div class="banner_content">
        <div class="media">
          <div class="d-flex">
            <img src="https://imraan.in/wp-content/uploads/2020/04/imraan_optimized.jpg" width="668" height=auto
              class="img-responsive imageofHero" alt="Imraan">
          </div>
          <div class="media-body">
            <div class="personal_text">
              <p style="font-size: 24px;">Hi there, i am</p>
              <h1 class="nameStyle">Imran</h1>
              <p>currently working as a Marketing Automation professional. When I am not building ETL workflows for campaigns or
                building a module for a web application, I play Counter Strike Global Offensive competetive in the Steam
                servers, write in <a href="https://www.quora.com/profile/Imran-M-4" rel="nofollow">Quora</a> to help
                others & I also write about stuffs I love in <a href="https://imraan.in/blog/">my blog</a>.
              </p>
              <ul class="list basic_info bigFont">
                <li class="personalStats"><i class="fa fa-birthday-cake" aria-hidden="true"></i> 18th May</li>
                <li class="personalStats"><i class="fa fa-phone-square" aria-hidden="true"></i>+91 9854082826</li>
                <li class="personalStats"><i class="fa fa-envelope" aria-hidden="true"></i>contact@imraan.in</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="ExpEdu p_120">
  <div class="container">
    <div class="main_title">
      <h2 class="recentFromBlog">Posts From My Blog</h2>
      <p>I write about tech stuff, gadget reviews, tech updates, gadget reviews, DIYs, How-tos and a myriad of other
        topics which you might be interested in.</p>
    </div>

    <div class="feature_inner row">
      <?php
        $args = array(
            'category_name' => 'featured',
            'posts_per_page' => 3
        );
        
        $query = new WP_Query( $args );
         if ( $query->have_posts() ) {
         
            while ( $query->have_posts() ) {
                $query->the_post();
                ?>
      <div class="col-lg-4 col-md-6">
        <div class="feature_item">

          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <h4><?php the_title(); ?></h4>
          </a>
          <!-- <p><?php echo wp_trim_words( get_the_content(), 20, '' ); ?></p>
          <hr style="margin: 2rem 0;"> -->

          <!-- <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <p class="ReadMoreButton">Show Full Post</p>
          </a> -->
        </div>
      </div>
      <?php
            }
        }
         
        wp_reset_postdata();
         
        ?>


    </div>
  </div>
</section>

<!-- <footer class="footer_area">
    <div class="container">
      <p class="text-center">Powered by IWS</p>
    </div>
  </footer> -->

</body>

</html>

<?php get_footer() ?>