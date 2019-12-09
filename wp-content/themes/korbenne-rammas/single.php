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



<div class="contentsingl" style="background: #252525 ;  width: 100%; font-size: 1.2em;">
    	<?php
		while ( have_posts() ) :
			the_post(); { ?>
            <div class="contaier">
                <div class="row">
                    <div class="col-4"><?= the_post_thumbnail(); ?> </div>
                    <div class="col-8"> <h2><?= get_the_title()  ; ?></h2>
                    <div class="parasingl"><P><?= get_the_content(); ?></P></div></div>

                </div>
             </div>
        <?php
			}; ?>

</div>
		<div class="navigsingle"><?php the_post_navigation(); ?></div>
        <div class="commentsingle" style="margin-top: 100px;">
            <?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
            ?>
        </div>



<?php
get_sidebar();
get_footer();
