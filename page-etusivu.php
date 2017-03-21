<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="main">

  

    <div class="row nostorow">

      <div class="nosto col-md-8">
        <article class="nostoblock">
          <header><h2>Bio</h2></header>
          <content>
            <?php the_content( ); ?>
          </content>
        </article>
      </div>

      <div class="nosto col-md-4">
        <div class="nostoblock">
          <center>
              <h2 id="eturightH1"><?php echo __(' [:fi]Ota yhteyttä[:]   
                      [:en]Contact me[:] '); ?>
              </h2>
            <img src="<?php bloginfo('template_url'); ?>/img/juha.jpg" id="juha" alt="Juha Stenroos">
            <div>
              <a href="http://juhastenroos.fi/ota-yhteytta/" class="button-jst" id="front-yht-button">
                <?php echo __(' [:fi]Ota yhteyttä[:]   
                      [:en]Contact me[:] '); ?>
              </a>
            </div>
            <p>
              <a href="https://fi.linkedin.com/pub/juha-stenroos/2a/131/283" target="_blank">
               <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" border="0" alt="View Juha Stenroos's profile on LinkedIn">
             </a>
            </p>
          </center>
        </div>
      </div>


    </div><!--/row -->
 

    <div class="row">
      <div class="someflow">
           <?php echo do_shortcode( get_post_meta( get_the_id(), 'somefeed', true ) );
             ?>
      </div>
    </div>
    
   </div><!-- /main-->





        </div><!--/row -->
    </div><!--/container -->


<?php endwhile; endif; ?>

<?php get_footer();?>