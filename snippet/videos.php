<?php
$videos = array(
  array("videoUrl" => "video1.mp4"),
  array("videoUrl" => "video2.mp4"),
  array("videoUrl" => "video3.mp4"),
)
?>

<section id="videos">
  <div class="container">
    <div class="title">Vídeos</div>
    <div class="row">
      <?php foreach ($videos as $video) { ?>
        <div class="col-md-4">
          <video class="video-fluid z-depth-1" controls>
            <source src="<?php echo get_template_directory_uri(); ?>/dist/video/<?php echo $video["videoUrl"]; ?>" type="video/mp4" />
          </video>
        </div>
      <?php } ?>
    </div>
  </div>
</section>