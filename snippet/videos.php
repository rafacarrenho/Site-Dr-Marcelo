<section id="videos">
  <div class="container">
    <div class="title">Vídeos</div>
    <div class="owl-carousel owl-theme video-carousel">
      <?php
      $videos = 6;
      for ($i = 1; $i <= $videos; $i++) {
        $video = get_field('video_' . $i);
        if ($video) {
      ?>
          <div>
            <video class="video-fluid z-depth-1" preload="metadata" controls>
              <source src="<?php echo esc_url($video); ?>#t=0.9" type="video/mp4" />
            </video>
          </div>
      <?php }
      } ?>
    </div>
  </div>
</section>