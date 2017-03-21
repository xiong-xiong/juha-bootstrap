<?php get_header();?>
<!--LOOP  -->


<div class="main">

<div class="row nostorow">
  <div class="nosto">
      <div class="nostoblock">
          <h1>Dev</h1>
          <p><?php echo __(' 
            [:fi]Tämä osio on vielä kesken, mutta tänne tulee omia harrastemielessä tehtyjä softaprojekteja.  [:]   
              [:en]This section is still under construction but I will put here my own hobby / open source software projects. [:] '); ?> 
         
          </p>
      </div>
  </div>
</div>

<div class="row nostorow eimarginaalia">

      <div class="nosto nostolink col-md-8">

          <?php
          global $post;
          $args = array( 'posts_per_page' => 20, 'category_name' => 'dev', 'orderby' => 'date', 'order' => 'desc' );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>

        <a href="<?php the_permalink(); ?>">
          <div class="nostoblock linkkiblock">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?>
            <?php if ( in_category('dev') ) {
            echo "<i class='fa fa-cog techicon' title='Oma projekti'></i> ";
            }
            ?>
              <?php if ( has_tag('wordpress') ) {
            echo "<i class='fa fa-wordpress techicon' title='Wordpress'></i> ";
            } ?>
            <?php if ( has_tag('ios') ){
              echo "<i class='fa fa-apple techicon' title='iOS app'></i> ";
              } ?>
             <?php if ( has_tag('peli') ){
              echo "<i class='fa fa-gamepad techicon' title='Peli'></i> ";
              } ?>
             <?php if ( has_tag('js') ) {
                 echo "<i class='fa fa-code techicon' title='JavaScript'></i> ";
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