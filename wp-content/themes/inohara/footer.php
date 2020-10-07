<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inohara
 */

?>

	<footer id="footer">
		<div class="page_top">
			<img src="<?php bloginfo('template_url'); ?>/img/common/icon_com_toppage.png" alt="" class="page_top-img" >
		</div>
		<div class="inner">
			<div class="footer_content">
				<div class="footer_contact">
					<a href="./index.html">
						<img src="<?php bloginfo('template_url'); ?>/img/common/pic_footer_logo01.png" alt="">
					</a>
					<p class="footer_contact_subs">株式会社猪原商会</p>
					<p class="footer_contact_detail">〒340-0808  埼玉県八潮市緑町2丁目17番地1</p>
					<p class="footer_contact_detail">Tel 048-996-4431(代)   Fax 048-996-1874</p>
				</div>
				<div class="footer-menu">
					<a href="<?php echo home_url(); ?>/" class="footer_menu_item">トップ</a>
					<a href="<?php echo home_url(); ?>/company" class="footer_menu_item">会社案内</a>
					<a href="<?php echo home_url(); ?>/product" class="footer_menu_item">取扱製品</a>
					<a href="<?php echo home_url(); ?>/recruit" class="footer_menu_item">採用情報</a>
					<a href="<?php echo home_url(); ?>/contact" class="footer_menu_item">お問い合わせ</a>
					<a href="<?php echo home_url(); ?>/privacypolicy" class="footer_menu_item">個人情報保護方針</a>
					<a href="<?php echo home_url(); ?>/sitemap" class="footer_menu_item">サイトマップ</a>
				</div>
			</div>
			<div class="copy_rights">Copyright (C) 2020 株式会社猪原商会. All Rights Reserved.</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
