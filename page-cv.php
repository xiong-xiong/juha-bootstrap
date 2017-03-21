<?php get_header();?>
<!--LOOP  -->


<div class="main">

<div class="row nostorow">
  <div class="nosto">
      <div class="nostoblock">
          <h1><?php echo __(' 
            [:fi]CV ja projektiportfolio 
          [:]   
              [:en] CV and project portfolio[:] '); ?></h1>
          <p>
          <?php echo __(' 
            [:fi]Alla poimintoja projekteistani ja tiivistelmä CV:stäni. Tarkemman CV:n löydät 
          <a href="https://fi.linkedin.com/pub/juha-stenroos/2a/131/283" target="_blank"> Linkedinistä</a>. 
          [:]   
              [:en] Here is some example projects I have done and excerpt of my CV. Full CV can be found at
          <a href="https://fi.linkedin.com/pub/juha-stenroos/2a/131/283" target="_blank"> Linkedin</a>. [:] '); ?>

         
          </p>
      </div>
  </div>
</div>

<div class="row nostorow eimarginaalia">

      <div class="nosto nostolink col-md-8">

          <?php
          global $post;
          $args = array( 'posts_per_page' => 20, 'category_name' => 'projektit', 'orderby' => 'date', 'order' => 'desc' );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>

        <a href="<?php the_permalink(); ?>">
          <div class="nostoblock linkkiblock">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?>
            <?php if ( in_category('freelance') ) {
            echo "<i class='fa fa-user techicon' title='Freelance'></i> ";
            }
            else {
              echo "<i class='fa fa-building techicon' title='Edita'></i> ";
              } ?>
              <?php if ( has_tag('wordpress') ) {
            echo "<i class='fa fa-wordpress techicon' title='Wordpress'></i> ";
            }
            else if ( has_tag('drupal') ){
              echo "<i class='fa fa-drupal techicon' title='Drupal'></i> ";
              } 
              else if ( has_tag('peli') ){
              echo "<i class='fa fa-gamepad techicon' title='Pelinkehitystä'></i> ";
              } 
              else {
                 echo "<i class='fa fa-database techicon' title='Muu teknologia'></i> ";
                }
                ?>

            </p>
          </div>
        </a>

        <?php endforeach;
        wp_reset_postdata(); ?>
      </div><!-- nosto col8-->


      <div class="nosto col-md-4">
        <div class="nostoblock">
        
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content( );?>

          <?php endwhile; endif; ?>


        </div><!-- nostoblock-->
      </div><!--nosto col4 -->


    </div><!--/row -->
    
   </div><!-- /main-->





        </div><!--/row -->
    </div><!--/container -->




<?php get_footer();?>