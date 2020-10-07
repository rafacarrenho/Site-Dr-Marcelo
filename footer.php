<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3 py-3">
        <h5>Navegue pelo site</h5>
        <nav class="map-site">
          <?php wp_nav_menu(array(
            'theme_location'  => 'primary',
            'depth'           => 1,
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker()
          )); ?>
        </nav>
      </div>
      <div class="col-md-3 py-3">
        <h5>Endereço</h5>
        <ul>
          <li>Centro de Oncologia</li>
          <li>Hospital Sírio-Libanês</li>
          <li>Rua D. Adma Jafet, 91</li>
          <li>Bela Vista - São Paulo-SP</li>
        </ul>
      </div>
      <div class="col-md-2 py-3">
        <h5>Telefones</h5>
        <ul>
          <li>
            <a href="tel:1133944442" class="text-white" title="Ligue para nós">
              (11) 3394-4442
            </a>
          </li>
          <li>
            <a href="tel:1133940252" class="text-white" title="Ligue para nós">
              (11) 3394-0252
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-4 footer-logo  py-3">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo/logo.png" alt="Logo Instituto Salute" />
        </figure>
        <div class="social-footer">
          <a href="https://www.instagram.com/dr.marcelocruz/" target="_blank" rel="noopener" aria-label="Instagram" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/marcelo-cruz-md-msc-708a0217/" target="_blank" rel="noopener" aria-label="Linkedin" title="Linkedin"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="copy pt-4">
      Desenvolvido por:
      <a href="https://marketingdigitalmedicos.com.br/" target="_blank" rel="noopener" title="Desenvolvido por Shantal Marketing Médico">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo/logo-shantal.png" alt="Logo Shantal" />
        Shantal</a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>