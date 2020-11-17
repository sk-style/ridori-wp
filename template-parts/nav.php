<ul class="nav-list">

<?php if( is_front_page() ): ?>
    <li class="nav-item"><a href="#about">お店について</a></li>
    <li class="nav-item"><a href="#concept">こだわり</a></li>
    <li class="nav-item"><a href="<?php echo esc_url( home_url('menu') ) ?>">お品書き</a></li>
    <li class="nav-item"><a href="#news">お知らせ</a></li>
    <li class="nav-item"><a href="#guide">店舗情報</a></li>
    <li class="nav-item _btn"><a href="#contact"><i class="fas fa-calendar"></i> ご予約</a></li>

<?php
elseif( is_page( 'menu' )):
    $menu_page = get_page_by_path( 'menu' );
    $post = $menu_page;
setup_postdata( $post );
?>
    <li class="nav-item"><a href="#kushi">串焼</a></li>
    <li class="nav-item"><a href="#ippin">逸品</a></li>
    <li class="nav-item"><a href="#course">コース・ご宴会</a></li>
    <li class="nav-item"><a href="#drink">お飲み物</a></li>
    <li class="nav-item"><a href="#guide">店舗情報</a></li>
    <li class="nav-item _btn"><a href="#contact"><i class="fas fa-calendar"></i> ご予約</a></li>
<?php
wp_reset_postdata();
endif;
?>
</ul>