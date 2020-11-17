<?php get_header(); ?>

<body>

<!---- main ---->
<main class="main">
    <section class="contact">
        <div class="inner">
            <h2 class="base-tit"><?php the_title(); ?></h2>
<?php
if( have_posts() ):
    while ( have_posts() ): the_post();
        the_content();
    endwhile;
endif;
?>
        </div>
    </section>

<?php
if( is_page( 'booking-form' )):
    $menu_page = get_page_by_path( 'booking-form' );
    $post = $menu_page;
setup_postdata( $post );
        get_template_part( 'template-parts/course' );
wp_reset_postdata();
endif;
?>

</main><!---- /main ---->

<?php get_footer(); ?>