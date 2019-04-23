<?php get_header(); ?>

<div class="container" style="margin:40px auto;">
    
<?php  if(have_posts()):the_post(); ?>
<span>Projetos</span>
<h2 class="title"><?php the_title(); ?></h2>
<br>
                <p><?php the_content(); ?></p>
              
       <?php   endif;?>
       <br>
       <a href="<?php echo esc_url( get_permalink(32) ); ?>" 
          class="btn btn-warning btn-lg">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>Orçamento
          </a>
</div>

<?php get_footer(); ?>