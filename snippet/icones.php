<?php
$icones = array(
  array("categoria" => "Câncer de Mama", "icone" => "breast"),
  array("categoria" => "Câncer de pulmão", "icone" => "lung-cancer"),
  array("categoria" => "Câncer de Ovário", "icone" => "uterus"),
  array("categoria" => "Cancer de Cólon", "icone" => "bowels"),
  array("categoria" => "Câncer de Pâncreas", "icone" => "pancreas"),
  array("categoria" => "Medicina de Precisão", "icone" => "first-aid-kit"),
  array("categoria" => "Genômica", "icone" => "dna"),
)
?>

<section id="functionsIcons">
  <div class="owl-carousel owl-theme owl-icons">
    <?php foreach ($icones as $icone) { ?>
      <div>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/<?php echo $icone['icone']; ?>.png" alt="<?php echo $icone["categoria"]; ?>">
        </figure>
        <h2><?php echo $icone["categoria"]; ?></h2>
      </div>
    <?php } ?>
  </div>
</section>