<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package KORBENNE_RAMMAS\'
 */

get_header();
?>



<div class="contentsingl mt-5">
    	<?php
		while ( have_posts() ) :
			the_post(); { ?>
            <div class="container mt-5">
                <div class="row mt-5 mb-5">
                    <div class="col-4"><?= the_post_thumbnail('blogpart'); ?></div>
                    <div class="col-8 paratitl" ><h2 class="titlblogpart"><?= get_the_title()  ; ?></h2>
                    <div class="parasingl"><P><?= get_the_content(); ?></P></div></div>
                </div>
             </div>
        <?php
			}; ?>

</div>
		<div class="navigsingle"><?php the_post_navigation(); ?></div>
            <?php
			// If comments are open or we have at least one comment, load up the comment template.
		endwhile; // End of the loop.
            ?>
      



<?php
get_sidebar();
get_footer();
