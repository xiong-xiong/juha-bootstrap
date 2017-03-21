<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="main">

    <div class="row">
      <div class="mainrow">
        <div class="content">
          <h2><?php the_title(); ?></h2>
          <?php the_content( );?>
    
        </div><!--content -->
      </div><!--/mainrow -->
    </div><!--/row -->
    
   </div><!-- /main-->





        </div><!--/row -->
    </div><!--/container -->


<?php endwhile; endif; ?>

<?php get_footer();?>
      
     