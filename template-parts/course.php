<!---- course ---->
<section class="course" id="course">
    <div class="inner">
        <h2 class="big-tit">コース</h2>
        <div class="course-wrap">
            <div class="course-lead">
                事前のご予約限定で、お得なコースをご用意しております。<br>
                また、人数・ご予算に応じて、様々なプランを提案させていただきます。<br>
                お気軽にお問い合わせください。
            </div>
            <h3 class="sub-tit wow fadeIn">
                <span>美味</span>しい料理と楽しい会話に<br>
                心癒やされるひと<span>時</span>を
            </h3>
            <div class="course-img _main"><img src="<?php echo get_template_directory_uri() ?>/img/menu/course_img_main.jpg" alt="コース料理"></div>
            <div class="course-img _sub _pc"></div>
            <div class="course-box">
                <div class="course-head" <?php if( is_page( 'menu' ) ) { echo 'id="js-course-head"'; }?> >
                    <span>- 全11品 -</span>
                    <h4>串コース・赤城</h4>
                    <p class="price">2,700<small>円（税抜）</small></p>
                </div>
                <dl class="course-def" <?php if( is_page( 'menu' ) ) { echo 'id="js-course-def"'; }?>>
                    <div>
                        <dt class="course-dtit">先出し</dt>
                        <dd class="course-data">
                            <ul>
                                <li>小鉢</li>
                                <li>キャベツ盛り</li>
                            </ul>
                        </dd>
                    </div>
                    <div>
                        <dt class="course-dtit">一品</dt>
                        <dd class="course-data">鶏ユッケ<br>（赤城鳥のみ使用）</dd>
                    </div>
                    <div class="_notfwrap">
                        <dt class="course-dtit">串</dt>
                        <dd class="course-data">
                            <ul>
                                <li>ささみ</li>
                                <li>手羽先</li>
                                <li>かしわ（もも・むねミックス）</li>
                            </ul>
                            <ul>
                                <li>野菜の合わせ串</li>
                                <li>内臓のおすすめ串</li>
                                <li>名物生つくねしそ巻</li>
                            </ul>
                        </dd>
                    </div>
                    <div>
                        <dt class="course-dtit">ご飯</dt>
                        <dd class="course-data">スープ焼きおにぎり</dd>
                    </div>
                    <div>
                        <dt class="course-dtit">デザート</dt>
                        <dd class="course-data">バニラアイス</dd>
                    </div>
                </dl>
            </div>
<?php
if( is_page( 'menu' )):
    $menu_page = get_page_by_path( 'menu' );
    $post = $menu_page;
setup_postdata( $post );
?>
            <p class="course-btn"><a href="#contact">ご予約・ご相談はこちら</a></p>
 <?php
wp_reset_postdata();
endif;
?>
    </div>
</section>