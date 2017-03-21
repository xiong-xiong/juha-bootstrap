<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="main">

<div class="row nostorow">
  <div class="nosto">
      <div class="nostoblock">
          <h1><?php the_title(); ?></h1>
           
      </div>
  </div>
</div>

    <div class="row">
      <div class="mainrow eimarginaalia">
        <div class="content">
  
          <?php the_content( );?>
    
        </div><!--content -->
      </div><!--/mainrow -->
    </div><!--/row -->
    
   </div><!-- /main-->





        </div><!--/row -->
    </div><!--/container -->


<?php endwhile; endif; ?>

<?php get_footer();?>
      
     