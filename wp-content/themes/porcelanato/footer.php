

  <section class="sc-black">

    <div class="container">

      <div class="col-xs-3 col-sm-12 col-md-2 col-lg-2 hidden-xs">
        <ul class="footer-menu">
          <li class="active">
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#">Sobre nós</a>
          </li>
          <li>
            <a href="#">Nossos projetos</a>
          </li> 
          <li>
            <a href="#">Orçamento</a>
          </li>
        </ul>

      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <h3 class="description-white">Profissionalismo e qualidade em porcelanato liquido</h3>
        <h3 class="description-orange">Profissionalismo e qualidade em porcelanato liquido</h3>
      </div>

      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="box-footer">
          <div class="media">
            <a class="pull-left" href="#">
              <i class="far fa-envelope"></i>
            </a>
            <div class="media-body">
              <h4 class="media-heading">WhatsApp</h4>
              <p>(11) 98196-1827</p>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <div class="media">
            <a class="pull-left" href="#">
              <i class="far fa-envelope"></i>
            </a>
            <div class="media-body">
              <h4 class="media-heading">Telefone</h4>
              <p>(11) 98196-1827</p>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <a class="navbar-brand" href="#">
          <img src="<?php echo bloginfo('template_url');?>/image/Logo.png" class="img-responsive" alt="Image">
        </a>

      </div>


    </div>
  </section>
<?php wp_footer(); ?>

 <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url');?>/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
 $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
         responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 1008,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 800,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }

        ]
      });
    });   
    </script> 
</body>
</html>