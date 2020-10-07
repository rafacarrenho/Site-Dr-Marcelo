 <!-- Teleatendimento -->
 <section id="oncologia-principal">
   <div class="container">
     <h2 class="title"><?php the_title(); ?></h2>
     <div class="row">
       <div class="col-md-6">
         <div>

           <?php the_content(); ?>
         </div>
       </div>
       <div class="col-md-6">
         <p>Dentro da Oncologia existem diversas áreas de atuação. Entre as principais estão:</p>
         <?php
          $tratamentos = 4;
          for ($i = 1; $i <= $tratamentos; $i++) {
            $tratamento = get_field('nome_tratamento_' . $i);
            if ($tratamento) {
          ?>
             <div class="tratamento-container">
               <figure class=" foto-tratamento">
                 <?php $imgtratamento = get_field('imagem_tratamento_' . $i); ?>
                 <img src="<?php echo esc_url($imgtratamento['url']); ?>" alt="<?php echo esc_attr($imgtratamento['alt']); ?>">
               </figure>
               <div class="tratamento-text">
                 <h2>
                   <?php echo get_field('nome_tratamento_' . $i); ?>
                 </h2>
                 <?php echo get_field('descricao_tratamento_' . $i); ?>
               </div>
             </div>
         <?php }
          } ?>
       </div>
     </div>
   </div>
 </section>