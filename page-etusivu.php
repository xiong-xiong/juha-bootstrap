<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="main">

  

    <div class="row nostorow">

      <div class="nosto col-md-8">
        <aside>
            <div id="juhablog-posts-container" class="nostolink"><!--Content comes from REST API --></div>
            <div id="reseptitblog-posts-container" class="nostolink"><!--Content comes from REST API --></div>
        </aside>
      </div>

      <div class="nosto col-md-4">
        <div class="nostoblock">
          <center>
              
              
            <img src="<?php bloginfo('template_url'); ?>/img/juha.jpg" id="juha" alt="Juha Stenroos">

            <article>
              <header><h2>Bio</h2></header>

                <content><?php the_content( ); ?></content>
            </article>
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