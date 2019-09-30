<?php
get_header();
?>
<div class="element">
    <div class="my-container">
        <div class="row">
            <?php
            if (have_posts()) : the_post();
                    ?>
                    <div class="col-lg-4">
                        <div class="element-box">
                            <a href="#"><i class="fa fa-university"></i></a>
                            <h3>
                                <?php
                                the_title();
                                ?>
                            </h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php
            else :
                echo ('sorry, post is empty');
            endif;
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>