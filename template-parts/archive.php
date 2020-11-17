<!---- news ---->
<article class="news" id="news">
    <div class="inner">
        <div class="news-box">
        <h3 class="base-tit">お知らせ</h3>
            <dl class="news-def">
<?php
query_posts('showposts=3');
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
        <div>
            <dt class="news-dtit">
                <time datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
<?php
$tag = get_the_tags();
if ($tag[0] ) {
    echo '<p class="news-label">' . $tag[0]->name . '</p>';
}
?>
                <p class="news-txt"><?php the_title(); ?></p>
            </dt>
            <dd class="news-data"><?php the_content(); ?></dd>
        </div>
<?php        
    endwhile;
endif;
?>
            </dl>
        </div>
    </div>
</article><!---- /news ---->