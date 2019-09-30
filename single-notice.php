<?php get_header(); ?>
<section class="noticesing">
    <div class="mycontainer">
        <?php if (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-12">
                    <div class="imgs">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="notdesc">
                        <h3><?php the_title(); ?></h3>
                        <div class="sector"></div>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        <?php
        else :
            echo ('sorry, notice is empty');
        endif;
        ?>
    </div>
</section>
<?php get_footer(); ?>