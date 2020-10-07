<header>
  <div class="container">
    <div class="menu-top-first w-100">
      <a href="<?php echo site_url(); ?>" class="logo-site">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo/logo.png" alt="Logo" />
        </figure>
      </a>
      <div class="social-header">
        <div class="social-container horizontal-center">
          <div class="social-item">
            <a href="tel:1133944442" class="horizontal-center">
              <span class="icon-container">
                <i class="fas fa-phone" aria-hidden="true"></i>
              </span>
              (11) 3394-4442
            </a>
          </div>
          <div class="social-item">
            <span class="icon-container">
              <i class="fa fa-clock" aria-hidden="true"></i>
            </span>
            <div class="horario">
              Atendimento
              <small>Seg a Sex das 9h às 18h</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="nav-button ml-auto d-inline-block d-lg-none" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span id="nav-icon3"><span></span><span></span><span></span><span></span></span></a>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'primary',
          'depth'           => 1,
          'container'       => 'div',
          'menu_class'      => 'nav navbar-nav',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker()
        ));
        ?>
        <ul class="navbar-nav ml-auto social">
          <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/dr.marcelocruz/" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.linkedin.com/in/marcelo-cruz-md-msc-708a0217/" target="_blank" rel="noopener" aria-label="Linkedin" title="Linkedin"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          </li>
          <!-- <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Twitter" title="Twitter"
                  ><i class="fab fa-twitter" aria-hidden="true"></i
                ></a>
              </li> -->
        </ul>
      </div>

  </div>
  </nav>
  </div>
</header>