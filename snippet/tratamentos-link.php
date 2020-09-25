<?php
$icones = array(
  array(
    "categoria" => "Imunoterapia",
    "icone" => "breast",
    "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor",
    "link" => "cancer-de-mama"
  ),
  array(
    "categoria" => "Terapias Alvo-moleculares",
    "icone" => "lung-cancer",
    "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor",
    "link" => "cancer-de-pulmao"
  ),
  array(
    "categoria" => "Quimioterapia",
    "icone" => "uterus",
    "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor",
    "link" => "cancer-de-ovario"
  ),
  array(
    "categoria" => "Radioterapia",
    "icone" => "bowels",
    "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor",
    "link" => "cancer-de-colon"
  ),
  array(
    "categoria" => "Medicina de Precisão",
    "icone" => "pancreas",
    "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor",
    "link" => "cancer-de-pancreas"
  ),
  array(
    "categoria" => "Cirurgia Oncológica",
    "icone" => "dna",
    "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor",
    "link" => "genomica"
  ),
)
?>

<?php $i = 1 ?>
<!-- Teleatendimento -->
<section id="tratamentos">
  <div class="container">
    <div class="row">
      <?php foreach ($icones as $icone) { ?>
        <div class="col-md-6 text-block vertical-center">
          <div class="tratamento-container tratamento-<?php echo $i % 2 ?>">
            <a href="<?php echo site_url() . "/" . $icone["link"]; ?>" class="<?php if (!($i % 2)) echo "order-2" ?>">
              <figure class=" foto-tratamento">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/<?php echo $icone['icone']; ?>.png" alt="<?php echo $icone["categoria"]; ?>">
              </figure>
            </a>
            <div class="tratamento-text">
              <a href="<?php echo site_url() . "/" . $icone["link"]; ?>">
                <h2>
                  <?php echo $icone["categoria"]; ?>
                </h2>
              </a>
              <?php echo $icone["texto"]; ?>
            </div>
          </div>
        </div>
      <?php $i++;
      }
      ?>
    </div>
  </div>
</section>