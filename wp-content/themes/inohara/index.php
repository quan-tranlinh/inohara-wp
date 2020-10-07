<?php
get_header();
?>

	<div class="main">
		<section class="top_sec01">
			<img src="<?php bloginfo('template_url'); ?>/img/top-page/brn_top_inohara01.png" alt="" class="sec01_banner" >
		</section>

		<section class="inner top_sec02">
			<h2 class="top_sec02_ttl01">
				お知らせ
				<img src="<?php bloginfo('template_url'); ?>/img/top-page/icon_top_news.jpg" class="top_sec02_icon_news" alt="">
			</h2>
			<p class="top_sec02_txt01">
				<?php
					$arg = array(
						'post_type' => 'post',
						'post_per_page' => 1,
						"showposts" => 1,
						'post_status' => 'any',
						'orderby' => 'date',
						'order'   => 'DESC',
					);

					$query = new WP_Query($arg);
					
					while($query->have_posts()) : $query->the_post();
				?>
					<span class="top_sec02_date"><?php echo get_the_date('Y-m-d') ?></span>

					<span class="top_title_post"><?php the_title() ?></span>
					<span class="top_content_post"><?php the_content() ?></span>
				<?php endwhile;  wp_reset_query()?>
			</p>
		</section>

		<section class="top_sec03">
			<h2 class="top_sec_ttl01">
				会社案内
				<span class="top_sect_sub_ttl01">
					<img src="<?php bloginfo('template_url'); ?>/img/top-page/icon_top_company.png" alt="">
				</span>
			</h2>
			<p class="top_sec_desc">
				テキストが入ります。テキストが入ります。テキストが入ります。 <br />
				テキストが入ります。テキストが入ります。
			</p>
			<div class="button-more-wrapper">
				<a href="./company.html">more</a>
			</div>
		</section>

		<section class="top_sec04">
			<h2 class="top_sec_ttl01">
				採用情報
				<span class="top_sect_sub_ttl01">
					<img src="<?php bloginfo('template_url'); ?>/img/top-page/icon_top_recruit.png" alt="">
				</span>
			</h2>
			<p class="top_sec_desc">
				テキストが入ります。テキストが入ります。テキストが入ります。<br />
				テキストが入ります。テキストが入ります。
			</p>
			<div class="button-more-wrapper">
				<a href="./recruit.html">more</a>
			</div>
		</section>

		<section class="top_sec05">
			<h2 class="top_sec_ttl01">
				採用情報
				<span class="top_sect_sub_ttl01">
					<img src="<?php bloginfo('template_url'); ?>/img/top-page/icon_top_product.png" alt="">
				</span>
			</h2>
			<p class="top_sec_desc">
				テキストが入ります。テキストが入ります。テキストが入ります。<br />
				テキストが入ります。テキストが入ります。
			</p>
			<div class="button-more-wrapper">
				<a href="./product.html">more</a>
			</div>
		</section>

		<div class="inner com_button_contact">
			<a href="./contact.html">お問い合わせ</a>
		</div>

    </div><!--/main-->

<?php

get_footer();
