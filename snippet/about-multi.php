<section id="about">
  <div class="container py-5">
    <h2 class="title2 m-auto">
      Conheça nosso corpo clínico
    </h2>
    <div class="owl-carousel owl-theme owl-doutor p-2 mt-5">
      <?php
      $doutores = 6;
      for ($i = 1; $i <= $doutores; $i++) {
        $doutor = get_field('nome_doutor_' . $i);
        if ($doutor) {
      ?>
          <div class="doutor-container p-4 bg-white">
            <figure class="foto-doutor">
              <?php $imgdoutor = get_field('imagem_doutor_' . $i); ?>
              <img src="<?php echo esc_url($imgdoutor['url']); ?>" alt="<?php echo esc_attr($imgdoutor['alt']); ?>">
            </figure>
            <div>
              <h2>
                <?php echo get_field('nome_doutor_' . $i); ?>
                <span><?php echo get_field('especialidade_doutor_' . $i); ?></span>
              </h2>
              <span class="curriculo-doutor">
                <?php echo get_field('curriculo_doutor_' . $i); ?>
              </span>
            </div>
            <button class="btn-saiba-mais">Saiba mais</button>
          </div>
      <?php }
      } ?>
    </div>
  </div>

  <?php get_template_part('snippet/modal-doutor') ?>