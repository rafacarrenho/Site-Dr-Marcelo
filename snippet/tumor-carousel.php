<?php
$icones = array(
  array(
    "categoria" => "Câncer de Mama",
    "icone" => "breast",
    "texto" => "",
    "link" => "cancer-de-mama"
  ),
  array(
    "categoria" => "Câncer de pulmão",
    "icone" => "lung-cancer",
    "texto" => "",
    "link" => "cancer-de-pulmao"
  ),
  array(
    "categoria" =>
    "Câncer de Ovário",
    "icone" => "uterus",
    "texto" => "",
    "link" => "cancer-de-ovario"
  ),
  array(
    "categoria" => "Cancer de Cólon",
    "icone" => "bowels",
    "texto" => "",
    "link" => "cancer-de-colon"
  ),
  array(
    "categoria" => "Câncer de Pâncreas",
    "icone" => "pancreas",
    "texto" => "",
    "link" => "cancer-de-pancreas"
  ),
  array(
    "categoria" => "Genômica",
    "icone" => "dna",
    "texto" => "",
    "link" => "medicina-genomica"
  ),
)
?>

<section id="tumor-carousel">
  <div class="container">
    <div class="owl-carousel owl-theme tumor-carousel">
      <?php foreach ($icones as $icone) { ?>
        <div class="tumor-carousel-item">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/<?php echo $icone['icone']; ?>.png" alt="<?php echo $icone["categoria"]; ?>">
          </figure>
          <h2><?php echo $icone["categoria"]; ?></h2>
          <p><?php echo $icone["texto"]; ?></p>
          <a href="<?php echo site_url() . "/tipos-de-tumor/" . $icone["link"]; ?>" class="btn-saiba-mais">Saiba mais</a>
        </div>
      <?php } ?>
    </div>
  </div>
</section>