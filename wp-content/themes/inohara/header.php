<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inohara
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div id="index" class="container">
	<header id="header">
            <h1 class="header_logo">
				<a href="<?php echo home_url(); ?>/">
					<img src="<?php bloginfo('template_url'); ?>/img/common/pic_header_logo01.png" alt="Logo">
                </a>
            </h1>

            <div class="gNav">
                    <ul class="header_menu">
                        <li class="menu_item"><a href="<?php echo home_url(); ?>/" class="menu_item_link">トップ</a></li>
                        <li class="menu_item"><a href="<?php echo home_url(); ?>/company" class="menu_item_link">会社案内</a></li>
                        <li class="menu_item"><a href="<?php echo home_url(); ?>/product" class="menu_item_link">取扱製品</a></li>
                        <li class="menu_item"><a href="<?php echo home_url(); ?>/recruit" class="menu_item_link">採用情報</a></li>
                    </ul>
                    <div class="menu_item_contact">
                        <a href="<?php echo home_url(); ?>/contact">
                            <img src="<?php bloginfo('template_url'); ?>/img/common/pic_header_contact01.png" alt="">
                        </a>
                    </div>
            </div>

            <div class="header_toggle">
                <img src="<?php bloginfo('template_url'); ?>/img/common/icon_com_open.png" alt="" class="icon_open">
                <img src="<?php bloginfo('template_url'); ?>/img/common/icon_com_close.png" alt="" class="icon_close">
            </div>
        </header><!--/header-->

