<header>
  <div class="container">
    <div class="menu-top-first w-100">
      <a href="<?php echo site_url(); ?>" class="logo-site">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo/logo.png" alt="Logo" width="200" />
        </figure>
      </a>
      <div class="social-top">
        <div class="social-header">
          <div class="social-container horizontal-center">
            <i class="fa fa-clock" aria-hidden="true"></i>
            <div class="horario">
              HORÁRIO DE ATENDIMENTO:<br />
              SEG A SEX 9:00 - 21:00 / SAB 7:00 - 12:00
            </div>
          </div>
          <div class="social-container">
            <a href="tel:11970568157" class="horizontal-center"><i class="fas fa-phone-square" aria-hidden="true"></i>
              (11) 97056-8157</a>
          </div>
        </div>
      </div>
    </div>
    <hr class="bg-secondary" />
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="nav-button ml-auto d-inline-block d-lg-none" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span id="nav-icon3"><span></span><span></span><span></span><span></span></span></a>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav menu-deslizante">
          <li class="nav-item">
            <a class="nav-link" href="#inicio">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#especialista"><?php echo the_title(); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#clinicaAbout">A Clí­nica</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#atendimento">Teleatendimento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">
              <?php
              if (is_page('especialidades')) {
                echo 'Corpo ClГ­nico';
              } else {
                echo get_field('nome_doutor');
              }
              ?>

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contato">Contato</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/institutosalutesp/" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/Instituto-Salute-112557220517231" target="_blank" rel="noopener" aria-label="Facebook" title="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
          </li>
          <!-- <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Twitter" title="Twitter"
                  ><i class="fab fa-twitter" aria-hidden="true"></i
                ></a>
              </li> -->
        </ul>
      </div>
    </nav>
  </div>
</header>