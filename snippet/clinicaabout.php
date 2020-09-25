<section id="clinicaAbout">
  <div class="container">
    <div class="row">
      <div class="col-md-6 vertical-center mb-4">
        <div class="row">
          <div class="col-6">
            <figure class="first-clinica-foto">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/clinica/clinica1.jpg" class="" alt="Foto Clinica">
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/clinica/clinica2.jpg" class="" alt="Foto Clinica">
            </figure>
          </div>
          <div class="col-6">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/clinica/clinica3.jpg" class="" alt="Foto Clinica">
            </figure>
          </div>
        </div>
      </div>
      <div class="col-md-6 vertical-center">
        <h2 class="title">A Clínica</h2>
        <?php echo get_field('clinica'); ?>
      </div>
    </div>
  </div>
</section>