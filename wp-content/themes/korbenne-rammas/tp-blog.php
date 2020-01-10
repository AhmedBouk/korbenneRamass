<?php /* Template Name: Blog */ ?>

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



            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer();
