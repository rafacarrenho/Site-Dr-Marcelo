<section id="carousel">
  <div class="container">
    <div class="owl-carousel owl-theme owl-clinica">
      <?php
      $imgClinica = 3;
      for ($i = 1; $i <= $imgClinica; $i++) { ?>
        <div>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/clinica/clinica-<?php echo $i ?>.png" alt="Foto do escitorio" class="foto-clinica" />
          </figure>
        </div>
      <?php } ?>
    </div>
  </div>
</section>