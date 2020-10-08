<?php
get_header();
?>

	<div class="main">
        <div class="page_title01">
            <h2 class="title01">サイトマップ</h2>
            <p class="sub_title01">SITEMAP</p>
        </div><!--page_title01-->

        <div class="breadcrumb">
            <div class="inner">
                <ul>
                    <li class="breadcrumb_item"><a href="<?php echo home_url(); ?>/">トップ</a></li>
                    <li class="breadcrumb_item">サイトマップ</li>
                </ul>
            </div>
        </div><!--breadcrumb-->

        <section class="sitemap_sec01">
            <div class="inner">
            <h3 class="contents_ttl01">サイトマップ</h3>

            <div class="sitemap_box">
                <ul class="sitemap_list">
                    <li class="sitemap_item">
                        <a a href="<?php echo home_url(); ?>/" class="sitemap_item_link">トップ</a>
                    </li>
                </ul>
                <ul class="sitemap_list">
                    <li class="sitemap_item">
                        <a a href="<?php echo home_url(); ?>/company" class="sitemap_item_link">会社案内</a>
                    </li>
                    <li class="sitemap_item">
                        <a a href="<?php echo home_url(); ?>/product" class="sitemap_item_link">取扱製品</a>
                    </li>
                    <li class="sitemap_item">
                        <a a href="<?php echo home_url(); ?>/recruit" class="sitemap_item_link">採用情報</a>
                    </li>
                </ul>
                <ul class="sitemap_list">
                    <li class="sitemap_item">
                        <a a href="<?php echo home_url(); ?>/contact" class="sitemap_item_link">お問い合わせ</a>
                    </li>
                    <li class="sitemap_item">
                        <a a href="<?php echo home_url(); ?>/privacypolicy" class="sitemap_item_link">個人情報保護方針</a>
                    </li>
                    <li class="sitemap_item">
                        <a a href="<?php echo home_url(); ?>/sitemap" class="sitemap_item_link">サイトマップ</a>
                    </li>
                </ul>
            </div>
        </section><!--sitemap_sec01-->
    </div><!--/main-->

<?php

get_footer();
