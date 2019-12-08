<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

    <div class="container">
        <section class="row">
            <h2 class="title"><span class="title-focus">FROM THE BLOG</span> ALL THE LATEST NEWS</h2>
            <div class="blog-flexslider flexslider">
                <ul class="slides">
                    <?php //
                    $args = array(
                        'post_type'   => 'post',
                         'order'   => 'date',
                        'post_status'   => 'publish'
                    );
                    // The Query
                    $query1 = new WP_Query($args);

                    // The Loop
                    while ($query1->have_posts()) {
                        $query1->the_post();

                    ?>
                    <li class="blog-slide">
                        <div class="blog-slide-img">
                            <img src="<?= get_the_post_thumbnail(); ?>"
                        </div>
                        <h3 class="blog-slide-title" style="background: red; width: 100%"><?= get_the_title(); ?></h3>
                        <p class="blog-slide-info">
                             <?= get_the_excerpt() ; ?><br>
                             <?= get_the_author(); ?>
                        </p>
                        <p class="blog-slide-text"><a href="#" title=""><?= get_the_permalink(); ?></a></p>
                    </li>
                    <?php }; ?>
                </ul>
                <?php wp_reset_postdata(); ;?>
            </div>
        </section>
<?php get_footer();


