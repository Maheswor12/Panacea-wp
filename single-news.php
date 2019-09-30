<?php get_header(); ?>
<div class="col-lg-6 col-md-6 sameheight">
    <div class="newes">
        <div class="title">
            <h4>News</h4>
        </div>
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <div class="news-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                            <h6><?php the_title(); ?></h6>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php
        endwhile;
    endif;
    ?>
    </div>
</div>
<?php get_footer(); ?>