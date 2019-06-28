<?php get_header(); ?>

<div class="container" style="margin-bottom:30px">
    <h2 class="title"><?php the_title(); ?></h2>
<?php
         $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 
query_posts(array(
    'post_type' => 'post', // You can add a custom post type if you like
    'paged' => $paged,
    'posts_per_page' => 10 // limit of posts
));
 
if ( have_posts() ) :  while ( have_posts() ) : the_post();
 ?>
 <hr>
 <div class="media">
    <a class="pull-left" href="#">
    <?php if (has_post_thumbnail( get_the_ID()) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID() ), 'single-post-thumbnail' ); ?>
                <img class="media-object" style="max-width: 200px;" src="<?php echo $image[0]; ?>" alt="Image">
              <?php else: ?>
                <img class="media-object" style="max-width: 200px;" src="<?php echo bloginfo('template_url');?>/image/banner1.jpg" alt="">
              <?php endif;?>
    </a>
    <div class="media-body">
        <h4 class="media-heading subtitle-orange"><?php the_title(); ?></h4>
          
        <p><?php echo apply_filters("custom_short_excerpt", get_the_excerpt()); ?></p>
        <p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-warning block">Saiba mais</a>
                </p>
    </div>
</div>
 <?php
     // post content goes here...
 
 endwhile;
 ?>
 <div style="text-align:center;margin-top:20px;">
 <?php
    post_pagination();
    ?>
</div>
 
 <?php
 else : 
 ?>
 
 <div class="alert alert-warning">
     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
     <strong>Post</strong> Nenhum post publicado ...
 </div>
 
 <?php
 endif;

          ?>
          
</div>

<?php get_footer(); ?>