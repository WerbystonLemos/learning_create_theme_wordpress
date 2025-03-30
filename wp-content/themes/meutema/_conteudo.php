<div class="row">
            
    <?php if(have_posts()) : ?>
    <?php $contador = 1 ?>
    <?php while(have_posts()) : the_post(); ?>
        
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail">

                <?php if(the_post_thumbnail('full') ): ?>
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <?php endif ?>
                
                <div class="caption">
                <h3><?= the_title() ?></h3>
                <small>
                    Postado por <?= the_author() ?>
                    em <?= the_time('d/M/Y') ?> - <?= comments_popup_link('Sem comentários', '1 Comentário', '% Comentários', 'comments-link', '') ?>
                    (<?= edit_post_link('Editar') ?>)
                </small>
                <p style="height:100px;overflow-y:hidden !important;border:1px solid black">
                    <?= get_the_excerpt() ?>
                </p>
                <p><a href="<?= the_permalink() ?>" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
            </div>
        </div>
        
        <?php 
            if($contador === 4)
            {
                $contador = 1;
                echo "</div>";
                echo "<div class='row'>";
            }
            else
            {
                $contador++;
            }
        ?>

    <?php endwhile ?>
    <?php else : ?>

    <?php endif ?>

</div>