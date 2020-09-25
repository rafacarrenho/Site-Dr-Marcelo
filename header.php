<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <title>
    <?php
    if (is_front_page() || is_home()) {
      $sep = " &raquo ";
      echo get_bloginfo('name'), $sep;
      bloginfo('description');
    } else {
      echo wp_title('');
    }
    ?>
  </title>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <script>
    document.addEventListener('wpcf7mailsent', function(event) {
      location = "<?php echo site_url('/mensagem-enviada/'); ?>";
    }, false);
  </script>
  <?php wp_head(); ?>
</head>

<body id="inicio" <?php body_class() ?>>
  <?php get_template_part('snippet/header/header3') ?>