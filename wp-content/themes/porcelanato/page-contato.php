

<?php get_header(); ?>
 
  <section class="sc-white">

    <div class="container">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h2 class="title">Faça um orçamento agora mesmo.</h2>


        <form action="" method="POST" role="form">
          <h4>Conte-nos um pouco do seu planejamento</h4>
          <br>
          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control" id="" placeholder="Nome completo">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="Email de preferencia">
          </div>
          <div class="form-group">
            <label for="">Telefone</label>
            <input type="text" class="form-control" id="" placeholder="Telefone de contato">
          </div>
          <div class="form-group">
            <label for="">Metros de piso</label>
            <input type="text" class="form-control" id="" placeholder="Metros de piso">
          </div>
          <div class="form-group">
            <label for="">Conte-nos sobre o projeto</label>

            <textarea name="descricao" id="input${1/(\w+)/\u\1/g}" class="form-control" rows="3" required="required"></textarea>

          </div>



          <button type="submit" class="btn btn-primary">Enviar orçamento</button>
        </form>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div style="text-align: center;margin-top: 20%;">


          <div class="box-form">
            <div class="media">

              <div class="media-body">
                <h4 class="media-heading">WhatsApp</h4>
                <p>(11) 98196-1827</p>
              </div>
            </div>
          </div>
          <div class="box-form">
            <div class="media">

              <div class="media-body">
                <h4 class="media-heading">Telefone</h4>
                <p>(11) 98196-1827</p>
              </div>
            </div>
          </div>
          <div class="box-form">
            <div class="media">

              <div class="media-body">
                <h4 class="media-heading">Facebook</h4>
                <p>(11) 98196-1827</p>
              </div>
            </div>
          </div>
          <div class="box-form">
            <div class="media">

              <div class="media-body">
                <h4 class="media-heading">E-mail</h4>
                <p>contato@jejporcelanato.com.br</p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <section class="sc-black">

<?php get_footer(); ?>