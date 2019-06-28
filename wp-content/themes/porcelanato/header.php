
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>J&J Porcelanatos </title>
<?php wp_head(); ?>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url');?>/slick/slick-theme.css">
  <link href="<?php echo bloginfo('template_url');?>/css/style.css" rel="stylesheet">
  <link href="<?php echo bloginfo('template_url');?>/css/style-mobile.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
<?php if( is_home() || is_front_page() ) : ?>
<style id="my-internal-css">
    header {
      height: 650px !important;
    }
</style>
<?php endif; ?>
</head>

<body>
  <header>
    <div id="header-top">

      <div class="container">
        Futuro em construção <?= is_home(); ?>
      </div>

    </div>


    <nav class="navbar navbar-default" role="navigation">
      <div class="container header-section">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= home_url();?>">
            <img src="<?php echo bloginfo('template_url');?>/image/Logo.png" class="img-responsive" alt="Image">
          </a>
        </div>
        <div class="timeweek hidden-xs">

          <div class="box-header box-170 border-right">

            <div class="media">
              <a class="pull-left" href="#">
                <i class="far fa-envelope"></i>
              </a>
              <div class="media-body">
                <h4 class="media-heading">CONTATO</h4>
                <p>(11) 97047-1867</p>
              </div>
            </div>

          </div>
          <div class="box-header">

            <div class="media">
              <a class="pull-left" href="#">
                <i class="far fa-clock"></i>
              </a>
              <div class="media-body">
                <h4 class="media-heading">FUNCIONAMENTO</h4>
                <p>seg. - sex 9h ás 20h</p>
              </div>
            </div>

          </div>
          <div class="box-header box-170">
            <a href="<?php echo esc_url( get_permalink(32) ); ?>" class="btn btn-lg btn-warning">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
              Orçamento
            </a>
          </div>
        </div>
      </div>
      <hr style="border-color: #6f6f6e" class="hidden-xs">
      <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li>
              <a href="<?php echo home_url('#about-us'); ?>">Sobre nós</a>
            </li>
            <li>
              <a href="<?php echo home_url('#projeto'); ?>">Nossos projetos</a>
            </li>
            <li>
              <a href="<?php echo esc_url( get_permalink(32) ); ?>">Orçamento</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>

<?php if( is_home() || is_front_page() ) : ?>
 <div class="container text-center text-banner">
      <h1>Profissionalismo e qualidade em porcelanato liquido</h1>
      <h2>Entre em contato e solicite um orçamento</h2>

      <a href="<?php echo esc_url( get_permalink(32) ); ?>" class="btn btn-warning btn-lg">Faça um orçamento</a>

    </div>
<?php endif; ?>
   
  </header>