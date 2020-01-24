<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

    <div class="wrapBlog"
        <section class="row ">
          <h2 class="blogtitlte wow bounceInUp" data-wow-duration="4s" data-wow-delay="2s"><span class="title-focus "><img src="<?php echo get_template_directory_uri();?> /assets/img/taxi.png" alt="korbenne taxi" height="80" width="80">   Korbenne Actu   <img src="<?php echo get_template_directory_uri();?> /assets/img/taxi.png" alt="korbenne taxi" height="80" width="80"></span></h2>
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
                    if($query1->have_posts()) {
                        while ($query1->have_posts()) {
                            $query1->the_post(); ?>
                            <li class="blog-slide">
                                <div class="container">
                                    <div class="row">
                                        <div class="col mt-5 wow bounceInRight "data-wow-duration="4s" data-wow-delay="2s">
                                            <?= the_post_thumbnail('blogpart') ?>
                                            <p class="blog-slide-info">
                                                Publié le: <?= get_the_date() ?><br>
                                                Posté par: <?= get_the_author() ?>
                                            </p>
                                        </div>
                                        <div class="col ">
                                            <h3 class="blogtitlte wow bounceInUp"data-wow-duration="4s" data-wow-delay="4s"><?= get_the_title(); ?></h3>
                                            <p class="blog-slide-text wow fadeInRightBig"data-wow-duration="4s" data-wow-delay="4s"><?= get_the_excerpt() ?><a href="<?= get_the_permalink() ?>"title=""> Voir la suite</a></p>
                                        </div>
                                    </div>
                            </li>
                        <?php }
                    }; ?>
                </ul>
                <?php wp_reset_postdata(); ;?>
            </div>
        </section>
    </div>
<?php get_footer();
