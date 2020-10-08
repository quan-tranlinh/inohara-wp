<?php
get_header();
?>
    <div class="main">
		<div class="inner">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile; // End of the loop.
			?>
			
		</div>
    </div><!-- #main -->
<?php
get_footer();
