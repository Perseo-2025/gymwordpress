<?php 

    while(have_posts() ): the_post();
        the_title('<h1 class="text-center text-primary">','</h1>');
        if(has_post_thumbnail()){
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }
        ?>
        <div class="meta-info">
            <p class="meta">
                <span>Por: </span>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php echo get_the_author_meta('display_name') ?>
                </a>
            </p>

            <p class="meta">
                <span>Fecha:  </span>
                <?php the_time(get_option('date_format')); ?>
            </p>
        
            <p class="meta">
                <span>Categoria:  </span>
                <?php the_category(); ?>
            </p>
        </div>
        <?php
        
        //the_post_thumbnail();
        the_content(); 

endwhile;   