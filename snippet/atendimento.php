<section id="atendimento">
  <div class="container">
    <div class="row">
      <div class="col-md-6 vertical-center">
        <div>
          <figure class="img-atendimento">
            <?php $imgatendimento = get_field('imagem_atendimento'); ?>
            <img src="<?php echo esc_url($imgatendimento['url']); ?>" alt="<?php echo esc_attr($imgatendimento['alt']); ?>">
          </figure>
        </div>
      </div>
      <div class="col-md-6 vertical-center">
        <h2 class="title">Telemedicina</h2>
        <?php echo get_field('texto_atendimento'); ?>
        <h5 class="btn-agende-agora">Agende sua consulta</h5>
      </div>
    </div>
  </div>
</section>