<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="main">

  

    <div class="row nostorow">

      <div class="nosto col-md-8">
        <article class="nostoblock">
          <header><h2><?php echo __(' [:fi]Ota yhteyttä[:]   
                      [:en]Contact me[:] '); ?></h2></header>
          <content>
            <?php the_content( ); ?>
          </content>
        </article>
      </div>

      <div class="nosto col-md-4">
        <div class="nostoblock">
          <p><?php echo __(' 
            [:fi]Tarvitsetko ammattilaisen tekemää kustomoitua Wordpress sivustoa tai apua web suunnitteluun? Teen molemmat, samassa paketissa, hyvin kohtuullista korvausta vastaan. Voin tehdä Wordpress kehitystä myös alihankintana isommille yrityksille.[:]   
              [:en]Do you need professional to make custom Wordpress site or help with web design? I do both in same package for really reasonable cost. I can also do subcontracting.[:] '); ?>

          </p>
          <p><?php echo __(' 
            [:fi]Voit toki olla minuun yhteydessä myös muissa asioissa :)[:]   
              [:en]You can ofcourse contact me on other matters too :)[:] '); ?></p>
        </div>
      </div>


    </div><!--/row -->

    
   </div><!-- /main-->





        </div><!--/row -->
    </div><!--/container -->


<?php endwhile; endif; ?>

<?php get_footer();?>