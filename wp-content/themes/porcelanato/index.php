<?php get_header(); 

?>

  <section class="sc-black" id="about-us">

    <div class="container">
      <h2 class="title">Sobre nós</h2>
      <p style="font-size:20px;"><?php do_action('description_by_id', 24); ?>
        <br>
        <div class="pull-right">
          <a class="btn btn-warning btn-lg" href="<?php echo esc_url( get_permalink(32) ); ?>">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>Orçamento
          </a>
        </div>
    </div>
  </section>

  <section class="sc-white">

    <div class="container">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h2 class="title">Nossas especialidades</h2>
        <h3 class="subtitle">Serviços</h3>
        <?php do_action('description_by_id', 23); ?>

        <br>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
       <?php $tags = get_the_tags(23); ?>
        <ul class="list-group">
        <?php foreach($tags as $tag) :  ?>
          <li class="list-group-item"><?php print_r($tag->name); ?></li>
           <?php endforeach; ?>
        </ul>

      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box-description">
          * Veja abaixo exemplos de aplicações solidas
        </div>
        <div class="pull-right">
          <a class="btn btn-warning btn-lg" href="<?php echo esc_url( get_permalink(32) ); ?>">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>Orçamento
          </a>
        </div>

      </div>

    </div>
  </section>
  <section class="sc-black">

    <div class="container">

      <div class="col-xs-12 col-md-push-7 col-sm-5 col-md-5 col-lg-5 ">
        <?php if (has_post_thumbnail( 25 ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( 25 ), 'single-post-thumbnail' ); ?>
           <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="Image">
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-md-pull-5 col-sm-7 col-md-7 col-lg-7">
        <h2 class="title">Informações</h2>
        <h3 class="subtitle">Prós do Porcelanato Liquido </h3>

       <?php do_action('description_by_id', 25); ?>

        <br>
        <div class="box-description">
          * Entenda mais sobre Prós e contras sobre essa novidade.
        </div>
        <div class="pull-right">
          <a class="btn btn-warning btn-lg" href="<?php echo esc_url( get_permalink(32) ); ?>">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>Orçamento
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="sc-white">

    <div class="container">

      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
         <?php if (has_post_thumbnail( 27 ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( 27 ), 'single-post-thumbnail' ); ?>
           <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="Image">
        <?php endif; ?>
      </div>

      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
        <h2 class="title">Informações</h2>
        <h3 class="subtitle">Contras do Piso de Porcelanato Líquido </h3>
        <?php do_action('description_by_id', 27); ?>

        <br>
        <div class="box-description">
          * Entenda mais sobre Prós e contras sobre essa novidade.
        </div>
        <div class="pull-right">
          <a href="<?php echo esc_url( get_permalink(32) ); ?>" 
          class="btn btn-warning btn-lg">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>Orçamento
          </a>
        </div>

      </div>

    </div>
  </section>
  <section class="sc-black" id="projeto">

    <div class="container">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 class="title">Nossos Projetos</h2>
        <h3 class="subtitle">Veja nossas aplicações</h3>
        <div style="margin: 40px 0;" class="regular">

<?php
$lastproject = get_posts( array(
    'posts_per_page' => 20,
    'post_type' => 'projects'
) );
 
if ( $lastproject ) {
    foreach ( $lastproject as $post ) :
        setup_postdata( $post ); ?>
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="thumbnail">
             <?php if (has_post_thumbnail( get_the_ID()) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID() ), 'single-post-thumbnail' ); ?>
                <img class="img-responsive" src="<?php echo $image[0]; ?>" alt="Image">
              <?php else: ?>
                <img src="<?php echo bloginfo('template_url');?>/image/banner1.jpg" alt="">
              <?php endif;?>
              <div class="caption"> 
                <p style="color: #000000;">
                 <?php echo apply_filters("custom_short_excerpt", get_the_excerpt()); ?>
                </p>
                <p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-warning block">Saiba mais</a>
                </p>

              </div>
            </div>
          </div>

 
    <?php
    endforeach; 
    wp_reset_postdata();
}
?> 

        </div>

      </div>
    </div>
  </section>

  <section class="sc-white">

    <div class="container">


      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3 class="subtitle">Blog - Ultimas postagens</h3>
        <div style="margin: 40px 0;">
<?php
$lastposts = get_posts( array(
    'posts_per_page' => 2
) );
 
if ( $lastposts ) {
    foreach ( $lastposts as $post ) :
        setup_postdata( $post ); ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-top:20px;padding-left:0">
            <h3 class="subtitle-orange"><?php the_title(); ?> </h3>
            <p>  
           <?php  
          echo wp_strip_all_tags( get_the_content(), 300)
           ?>
            </p>
            <a class="btn btn-warning btn-lg" href="<?php the_permalink(); ?>">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>Saiba mais
            </a>
          </div> 
    <?php
    endforeach; 
    wp_reset_postdata();
}
?> 

        </div>

      </div>

    </div>
  </section>
<?php get_footer(); ?>