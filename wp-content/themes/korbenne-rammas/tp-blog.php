<?php /* Template Name: Blog */ ?>
<<<<<<< HEAD
=======

<?php get_header(); ?>
>>>>>>> 828cf1418d07041cc87a030006b48e37d08eea14

<?php get_header(); ?>

    <div class="wrapBlog"
        <section class="row">
            <h2 class="titleBlog"><span class="title-focus">Korbenne Actu</span></h2>
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
                                        <div class="col mt-5">
                                            <?= the_post_thumbnail('blogpart') ?>
                                            <p class="blog-slide-info">
                                                Publié le: <?= get_the_date() ?><br>
                                                Posté par: <?= get_the_author() ?>
                                            </p>
                                        </div>
                                        <div class="col mt-3 ">
                                            <h3 class="blog-slide-title"><?= get_the_title(); ?></h3>
                                            <p class="blog-slide-text"><?= get_the_excerpt() ?><a href="<?= get_the_permalink() ?>"title=""> Voir la suite</a></p>
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

<<<<<<< HEAD

=======
>>>>>>> 81e7f5c847ee700f52bdd408ac1e1b33834947b9
