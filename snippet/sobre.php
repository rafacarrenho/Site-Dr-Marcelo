<section id="about">
  <div class="container">
    <?php
    $doutores = 3;
    for ($i = 1; $i <= $doutores; $i++) {
      $doutor = get_field('nome_doutor_' . $i);
      if ($doutor) {
    ?>
        <div class="row py-5">
          <div class="col-md-4 vertical-center <?php if ($i == 2) {
                                                  echo 'order-md-2 order-1';
                                                }; ?>">
            <figure class="foto-doutor">
              <?php $imgdoutor = get_field('foto_doutor_' . $i); ?>
              <img src="<?php echo esc_url($imgdoutor['url']); ?>" alt="<?php echo esc_attr($imgdoutor['alt']); ?>">
            </figure>
          </div>
          <div class="col-md-8 vertical-center <?php if ($i == 2) {
                                                  echo 'order-md-1 order-2';
                                                }; ?>">
            <h2 class="title"><?php echo gezt_field('nome_doutor_' . $i) ?></h2>
            <span class="crm"><?php echo get_field('crm_doutor_' . $i) ?></span>
            <?php echo get_field('descricao_doutor_' . $i) ?>
          </div>
        </div>
    <?php }
    } ?>
  </div>
</section>