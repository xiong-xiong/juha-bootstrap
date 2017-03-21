<?php get_header();?>
         


<div class="main">

<div class="row nostorow">
  <div class="nosto">
      <div class="nostoblock">
          <h1>Freelance </h1>
           <p>
           <?php echo __(' 
            [:fi]Ohessa joitakin jo tehtyjä freelance projekteja. Työnantajani palveluksessa tehdyt projektini löydät cv / portfolio osiosta. [:]   
              [:en]Here is some of my freelance projects. Projects I made for my employer can be found in cv/portfolio section. [:] '); ?>
           </p>
      </div>
  </div>
</div>


<div class="row nostorow eimarginaalia">

      <div class="nosto nostolink col-md-8">

          <?php
          global $post;
          $args = array( 'posts_per_page' => 20, 'category_name' => 'freelance', 'orderby' => 'date', 'order' => 'desc' );
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
                 echo "<i class='fa fa-code techicon' title='Muu teknologia'></i> ";
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
          <h2 id="eturightH1">  <?php echo __(' 
            [:fi]Mitä teen? [:]   
              [:en]What do I do? [:] '); ?> <i class="fa fa-wordpress"></i></h2>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content( );?>

          <?php endwhile; endif; ?>
          <h2><?php echo __(' 
            [:fi]Ota yhteyttä [:]   
              [:en]Contact me [:] '); ?></h2>

              <?php  
        if ( qtrans_getLanguage() == 'en' ) {
          echo do_shortcode( '[ninja_form id=3]' );

        }
        else {
         echo do_shortcode( '[ninja_form id=2]' ); 
        }
       ?>
       

        </div>
      </div>


    </div><!--/row -->
    
   </div><!-- /main-->





        </div><!--/row -->
    </div><!--/container -->



<?php get_footer();?>