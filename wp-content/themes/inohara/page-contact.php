<?php
/**
 * Template Name: Contact
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */
get_header();
?>

	<div class="main">
        <div class="page_title01">
            <h2 class="title01">お問い合わせ</h2>
            <p class="sub_title01">CONTACT</p>
        </div><!--page_title01-->

        <div class="breadcrumb">
            <div class="inner">
                <ul>
                    <li class="breadcrumb_item"><a href="<?php echo home_url(); ?>/">トップ</a></li>
                    <li class="breadcrumb_item">お問い合わせ</li>
                </ul>
            </div>
        </div><!--breadcrumb-->

        <section class="contact_sec01">
            <div class="inner">
                <h3 class="contents_ttl01">お電話・FAXでのお問い合わせ</h3>

                <div class="contact_info">
                    <div class="contact_info_txt01">
                        <span>
                            <span class="contact_label01">Tel</span>
                            <a href="tel:+048-996-4331" class="contact_tel">048-996-4331</a> (代)
                        </span>
                        <span>
                            <span class="contact_label01">Fax</span>048-996-1874
                        </span>
                    </div>
                </div>
            </div>
        </section><!--contact_sec01-->

        <section class="contact_sec02">
            <div class="inner">
                <h3 class="contents_ttl01">メールフォームでのお問い合わせ</h3>

                <div class="contact_note">
                    <p class="contact_note_txt01">
                        お手数ですが、<span class="red_txt">＊</span> の付いた項目は必ずご入力ください。<br />
                        半角カタカナ、外字（登録文字）での入力は文字化けの原因となりますのでお控えください。<br />
                        <a a href="<?php echo home_url(); ?>/privacypolicy">個人情報保護方針</a>にご同意の上、送信ください。
                    </p>
                </div>

                <div class="contact_form">
                    <form action="./mail.php" method="POST" id="contact_form" >
                        <table class="contact_table">
                            <tbody>
                                <tr class="contact_table_row">
                                    <th class="contact_table_column">会社名</th>
                                    <td class="contact_table_detail">
                                        <input class="contact_input" name="company_name"/>
                                    </td>
                                </tr>
                                <tr class="contact_table_row">
                                    <th class="contact_table_column">
                                        お名前
                                        <!-- <span class="contact_required">＊</span> -->
                                        <img src="<?php bloginfo('template_url'); ?>/img/common/icon_require.png" alt="" class="contact_required">
                                    </th>
                                    <td class="contact_table_detail">
                                        <input class="contact_input" name="name"/>
                                    </td>
                                </tr>
                                <tr class="contact_table_row">
                                    <th class="contact_table_column">
                                        メールアドレス
                                        <img src="<?php bloginfo('template_url'); ?>/img/common/icon_require.png" alt="" class="contact_required">
                                    </th>
                                    <td class="contact_table_detail">
                                        <input class="contact_input" name="mail"/>
                                    </td>
                                </tr>
                                <tr class="contact_table_row">
                                    <th class="contact_table_column">お電話番号</th>
                                    <td class="contact_table_detail">
                                        <input class="contact_input" name="phone_number"/>
                                    </td>
                                </tr>
                                <tr class="contact_table_row">
                                    <th class="contact_table_column">FAX番号</th>
                                    <td class="contact_table_detail">
                                        <input class="contact_input" name="fax_number"/>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="contact_table_column contact_paddiding02">
                                        お問い合わせ内容
                                        <img src="<?php bloginfo('template_url'); ?>/img/common/icon_require.png" alt="" class="contact_required">
                                    </th>
                                    <td class="contact_table_detail contact_padding01">
                                        <textarea class="contact_textarea" name="contents"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="contact_button_wrapper">
                            <input class="contact_button_submit" type="submit" value="送信" />
                        </div>
                    </form>
                </div>
            </div>
        </section><!--contact_sec02-->
    </div><!--/main-->

<?php

get_footer();
