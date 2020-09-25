<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
?>

<div class="row post-paginacao m-0">
  <div class="col-6 text-right">
    <?php if ($prev_post) { ?>
      <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
        <span>&larr;</span> Post Anterior</a>
    <?php }; ?>
  </div>
  <div class="col-6">

    <?php if ($next_post) { ?>
      <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
        Próximo Posts <span>&rarr;</span></a>
    <?php }; ?>
  </div>
</div>