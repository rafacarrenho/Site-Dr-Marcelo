<?php
$icones = array(
  array(
    "categoria" => "Imunoterapia",
    "icone" => "imuno",
    "texto" => "A imunoterapia é uma das maiores inovações no tratamento contra o câncer, atualmente indicado para diversos tipos de tumor.",
    "link" => "imunoterapia"
  ),
  array(
    "categoria" => "Terapias Alvo-moleculares",
    "icone" => "cancer",
    "texto" => "O objetivo da terapia alvo-molecular é atacar estas moléculas, direcionando a ação de medicamentos às células tumorais.",
    "link" => "terapias-alvo-moleculares"
  ),
  array(
    "categoria" => "Quimioterapia",
    "icone" => "quimio",
    "texto" => "A quimioterapia é um tratamento que utiliza medicamentos para destruir as células doentes que formam um tumor.",
    "link" => "quimioterapia"
  ),
  array(
    "categoria" => "Radioterapia",
    "icone" => "radio",
    "texto" => "A radioterapia é um tratamento que utiliza a radiação para destruir ou impedir o crescimento das células de um tumor.",
    "link" => "radioterapia"
  ),
  array(
    "categoria" => "Medicina de Precisão",
    "icone" => "precisao",
    "texto" => "A medicina de precisão oferece um tratamento individualizado para cada paciente, levando em conta aspectos genéticos  através de testes moleculares que podem ser realizados em amostras de biópsia do tumor ou em amostras de sangue.",
    "link" => "medicina-de-precisao"
  ),
  array(
    "categoria" => "Cirurgia Oncológica",
    "icone" => "oncologica",
    "texto" => "A cirurgia oncológica é um tipo de tratamento do câncer que consiste na retirada do tumor através de operações no corpo do paciente.",
    "link" => "cirurgia-oncologica"
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
            <a href="<?php echo site_url() . "/tratamentos/" . $icone["link"]; ?>" class="<?php if (!($i % 2)) echo "order-2" ?>">
              <figure class="foto-tratamento">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/<?php echo $icone['icone']; ?>.png" alt="<?php echo $icone["categoria"]; ?>">
              </figure>
            </a>
            <div class="tratamento-text">
              <a href="<?php echo site_url() . "/tratamentos/" . $icone["link"]; ?>" class="link">
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