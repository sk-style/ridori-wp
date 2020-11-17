<!---- drawer navi ---->
<div class="dnav _md">
    <div class="dnav-menu">
        <div class="inner">
            <p class="dnav-btn _contact"><a href="#contact">ご予約・お問い合わせ</a></p>
            <p class="dnav-btn _move">

<?php if( is_front_page() ): ?>
            <a href="<?php echo esc_url( home_url('menu') ) ?>">お品書き</a>

<?php
elseif( is_page() ):
?>
            <a href="<?php echo esc_url( home_url() ) ?>">トップへ</a>
<?php
endif;
?>
            </p>
            <div class="dnav-icon _md"><div><span></span><span></span><span></span></div></div>
        </div>
    </div>
    <div class="dnav-close"></div>
    <div class="dnav-content">
        <h1 class="nav-tit"><a href="<?php echo esc_url( home_url() ) ?>">- <span>Ridori</span> -</a></h1>
<?php get_template_part( 'template-parts/nav' ); ?>
<?php get_template_part( 'template-parts/tel' ); ?>
    </div>
</div><!---- /drawer navi ---->