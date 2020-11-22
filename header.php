<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<?php if( is_front_page() ): ?>
<body class="_top">
<?php get_template_part( 'template-parts/dnav' ); ?>

<?php get_template_part( 'template-parts/snav' ); ?>

<?php get_template_part( 'template-parts/totop' ); ?>

<!---- header ---->
<header class="header _top">
    <h1 class="header-tit">
        <span>群馬県太田市の焼き鳥店</span><span><small>炭火屋</small>りどり</span>
    </h1>

    <!---- gnav ( pc表示 ) ---->
    <nav class="gnav _pc">
<?php get_template_part( 'template-parts/tel' ); ?>
<?php get_template_part( 'template-parts/nav' ); ?>
    </nav><!---- /gnav ---->

    <div class="dnav-icon _md"><div><span></span><span></span><span></span></div></div>
    <div class="header-img">
        <div class="header-slide _1"></div>
        <div class="header-slide _2"></div>
        <div class="header-slide _3"></div>
        <div class="header-slide _4"></div>
    </div>
    <div class="header-bg"></div>

<?php
$pickup_posts = get_posts( array(
'post_type' => 'post',
'posts_per_page' => '1',
'category_name' => 'news',
'orderby' => 'DESC',
) );
?>
<?php foreach ( $pickup_posts as $post ) : setup_postdata($post); ?>
    <!---- pickup (news) ---->
    <div class="pickup" id="js-pickup">
        <a href="#news">
        <h3>お知らせ</h3>
        <div class="pickup-content">
            <time datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'n.j' ); ?></time>
            <h4><?php the_title(); ?></h4>
        </div>
        </a>
    </div><!---- pickup (news) ---->
<?php endforeach; wp_reset_postdata(); ?>

</header><!---- /header ---->

<?php
elseif( is_page( 'menu' )):
    $menu_page = get_page_by_path( 'menu' );
    $post = $menu_page;
setup_postdata( $post );
?>
<body class="_menu">

<?php get_template_part( 'template-parts/dnav' ); ?>

<?php get_template_part( 'template-parts/snav' ); ?>

<?php get_template_part( 'template-parts/totop' ); ?>

<!---- header ---->
<header class="header _menu">
    <div class="header-img"><img src="<?php echo get_template_directory_uri() ?>/img/module/header_menu_img.jpg" alt="<?php echo get_the_title(); ?>"></div>
    <div class="header-bg"></div>
</header><!---- /header ---->

<?php
wp_reset_postdata();
endif;
?>
