<?php get_header('single');?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="main">

  

    <div class="row nostorow">

      <div class="nosto col-md-8">
        <article class="nostoblock">
          <header><h2><?php the_title( );?></h2></header>
          <content>
            <?php the_content( ); ?>
          </content>
        </article>
      </div>

      <div class="nosto col-md-4">
        <div class="nostoblock">
          <h2>Käytetyt teknologiat</h2>
          <?php the_field('teknologiat') ; ?>
        </div>
      </div>


    </div><!--/row -->

    
   </div><!-- /main-->





        </div><!--/row -->
    </div><!--/container -->


<?php endwhile; endif; ?>

<?php get_footer();?>