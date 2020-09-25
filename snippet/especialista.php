 <!-- Teleatendimento -->
 <section id="especialista">
   <div class="container">
     <div class="row">
       <div class="col-md-6 text-block vertical-center">
         <div>
           <?php the_content(); ?>
           <h5 class="btn-agende-agora">Agende sua consulta</h5>
         </div>
       </div>
       <div class="col-md-6 img-container vertical-center">
         <figure>
           <?php $imgespecialista = get_field('imagem_especialista'); ?>
           <img src="<?php echo esc_url($imgespecialista['url']); ?>" alt="<?php echo esc_attr($imgespecialista['alt']); ?>">
         </figure>
       </div>
     </div>
   </div>
 </section>