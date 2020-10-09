<?php
get_header();
?>
    <div class="main">
		<div class="page_title01">
			<h2 class="title01"><?php echo get_the_title() ?></h2>
			<p class="sub_title01">NEWS</p>
		</div><!--page_title01-->

		<div class="breadcrumb">
			<div class="inner">
				<ul>
					<li class="breadcrumb_item"><a href="<?php echo home_url(); ?>/">トップ</a></li>
					<li class="breadcrumb_item"><?php echo get_the_title() ?></li>
				</ul>
			</div>
		</div><!--breadcrumb-->

		<div class="inner">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			?>
			
		</div>
    </div>
<?php
get_footer();
