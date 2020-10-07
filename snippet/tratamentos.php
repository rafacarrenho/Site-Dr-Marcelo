<!-- Teleatendimento -->
<section id="tratamentos">
  <div class="container">
    <h2 class="title">Conheça alguns tratamentos para o câncer</h2>
    <div class="row">
      <?php
      $tratamentos = 4;
      for ($i = 1; $i <= $tratamentos; $i++) {
        $tratamento = get_field('nome_tratamento_' . $i);
        if ($tratamento) {
      ?>
          <div class="col-md-6 text-block vertical-center">
            <div class="tratamento-container tratamento-<?php echo $i % 2 ?>">
              <figure class="<?php if (!($i % 2)) echo "order-2" ?>">
                <?php $imgtratamento = get_field('imagem_tratamento_' . $i); ?>
                <img src="<?php echo esc_url($imgtratamento['url']); ?>" alt="<?php echo esc_attr($imgtratamento['alt']); ?>">
              </figure>
              <div class="tratamento-text">
                <h2>
                  <a href="<?php echo get_field('link_tratamento_' . $i); ?>" class="link">
                    <?php echo get_field('nome_tratamento_' . $i); ?>
                  </a>
                </h2>
                <?php echo get_field('descricao_tratamento_' . $i); ?>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </div>
</section>