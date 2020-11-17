<?php get_header(); ?>

<!---- main ---->
<main class="main">

    <!---- about ---->
    <section class="about" id="about">
        <div class="inner">
            <h2 class="sec-tit">
                <small><span>寛</span>ぎの空間で味わう</small>
                本格炭火<span>焼</span>鳥
            </h2>
            <div class="about-txt">
                <p>太田市新井町にある<br class="_md">焼き鳥屋「りどり」。</p>
                <p>熟練職人である店主が、<br class="_md">手間ひまかけて手作りする<br>絶品串を提供しております。</p>
                <p>「ふらっと飲みに」<br class="_md">「家族と食事に」<br>そんな日常の楽しみを、隠れ家のような当店で。</p>
            </div>
            <div class="about-img _main"><img src="<?php echo get_template_directory_uri() ?>/img/top/about_img_main.png" alt="串焼"></div>
        </div>
        <div class="about-img _bottom"></div>
    </section><!---- /about ---->
    
    <!---- concept ---->
    <section class="concept" id="concept">
        <h2 class="line-tit wow fadeInUp">
            <small>食材に寄りそって<br class="_sm">丁寧に仕上げる</small>
            りどりの<span>串</span>焼
        </h2>

        <!---- sozai ---->
        <section class="sozai">
            <div class="inner">
                <div class="sozai-top">
                    <h3 class="sub-tit">厳選して仕入れる<br>旬の食材を活かして</h3>
                    <div class="sozai-img _main">
                        <div class="sozai-slide _1"></div>
                        <div class="sozai-slide _2 _md"></div>
                    </div>
                </div>
                <div class="sozai-body">
                    <div class="sozai-wrap">
                        <p class="sozai-txt">
                            弾力のある赤身が特徴の群馬県産「赤城鳥」や、毎日仕入れる地元の新鮮野菜を使用。<br>
                            店主自ら足を運び、長年の感覚を頼りに目利きした食材はどれも新鮮・良質で、旬の旨味を存分に楽しんでいただけます。
                        </p>
                        <p class="sozai-btn"><a href="<?php echo esc_url( home_url('menu') ) ?>">旬の食材を串焼きで</a></p>
                    </div>
                    <div class="sozai-img _sub _pc"></div>
                </div>
            </div>
        </section><!---- /sozai ---->

        <!---- technique ---->
        <section class="tec" id="tec">
            <div class="inner">
                <h3 class="sub-tit wow fadeIn"><span>旨味</span>を引き出し<br>素材<span>最高</span>の味わいを</h3>
                <p class="tec-txt">
                    仕込みから焼き上がりまで細部にこだわり、素材の味を少しでも引き出せるよう努めています。<br>
                    仕込みは時間と手間を惜しまず丁寧に。<br>
                    一番美味しい瞬間を見極めて焼き上げ、お客様に合わせて、一串ずつご提供いたします。<br>
                    仕上げは、素材の味が引き立つ沖縄の塩や、<br class="_pc">秘伝の甘だれ・辛だれの凝縮された旨味を、ご堪能ください。
                </p>
            </div>
        </section><!---- /technique ---->

    </section><!---- /concept ---->

    <!---- owner ---->
    <div class="owner" id="owner">
        <div class="inner">
            <div class="owner-img"><img src="<?php echo get_template_directory_uri() ?>/img/top/owner_img.jpg" alt="店主"></div>
            <div class="owner-txt">
                <small>店主　田嶋浩一</small>
                <p>
                    職人として四十三年間、東京・大阪・福岡など各地を巡り、「炭火屋鳥仁」をはじめいくつかの店舗を立ち上げて参りました。<br>
                    「炭火屋」という屋号の由来でもある、炭焼きの本当の美味しさを味わっていただきたい。その思いで、日々努めております。<br>
                    一本一本魂を込めて焼き上げます。こだわりを詰め込んだ自慢の品を、ぜひ、味わいにいらしてください。
                </p>
            </div>
        </div>
    </div><!---- /owner ---->
    
    <!---- food ---->
    <div class="food" id="food">
        <div class="inner">

            <!---- intro ---->
            <section class="intro">
                <h3 class="line-tit wow fadeInUp"><small>食感、香り、</small>格別の<br>炭火焼料理</h3>
                <p class="intro-txt">
                    美味しさを引き立てるこだわりの炭火焼。<br>
                    高温になる備長炭を使用し短時間で焼き上げることで、外はパリッと、中は肉汁が凝縮されジューシーに。<br>
                    さらに脂が落ちて煙になり、その風味もまとった食材は格別の味わいです。
                </p>
                <figure class="intro-fig">
                    <div class="intro-img"><img src="<?php echo get_template_directory_uri() ?>/img/top/intro_img.jpg" alt="炭火"></div>
                    <figcaption><small>最高級</small>特選備長炭を使用</figcaption>
                </figure>
                <!---- ( course-box ) ---->
                <div class="course-box">
                    <div class="course-head">
                        <span>- 全11品 -</span>
                        <h4>串焼コース</h4>
                        <p class="price">2,700<small>円</small></p>
                    </div>
                    <div class="course-body">
                        <p>事前のご予約限定で<br>人気メニューを組み合わせた<br class="_pc">お得なコースをご用意しております。</p>
                        <p>詳しくは<a href="<?php echo esc_url( home_url('menu') ) ?>#course">お品書き</a>ページへ</p>
                    </div>
                </div><!---- /( course-box ) ---->
                <p class="intro-btn"><a href="#contact">コースのご予約・ご相談はこちら</a></p>
            </section><!---- /intro ---->

            <!---- popular ---->
            <section class="pop swiper-container" id="js-pop">
                <h3 class="sec-tit wow fadeIn">人<span>気</span>の一串</h3>
                <ul class="pop-list swiper-wrapper">
                    <li class="pop-item swiper-slide">
                        <div class="pop-img"><img src="<?php echo get_template_directory_uri() ?>/img/top/pop_img0.png" alt=""></div>
                        <div class="pop-wrap">
                            <div class="pop-head">
                                <h4 class="sub-tit">赤城鳥ささみ</h4>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <p class="price">180<small>円</small></p>
                            <p class="pop-txt">
                                低脂肪であっさりしているのにもっちりとしてやわらかく、肉本来のしっかりとした味をお楽しみいただけます。<br>
                                梅しそやゆず胡椒、わさびなどで美味しくアレンジしました。
                            </p>
                        </div>
                    </li>
                    <li class="pop-item swiper-slide">
                        <div class="pop-img"><img src="<?php echo get_template_directory_uri() ?>/img/top/pop_img1.jpg" alt=""></div>
                        <div class="pop-wrap">
                            <div class="pop-head">
                                <h4 class="sub-tit"><small>【名物】</small>自家製生つくね</h4>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <p class="price">200<small>円〜</small></p>
                            <p class="pop-txt">
                                赤城鶏を捌くところから手作りしています。<br>
                                色んな部位を秘伝ブレンドし、生の状態からじっくりと焼き上げたそれは、驚くほど柔らかくふわふわ。<br>
                                ボイルしていないので、肉の旨味が全て閉じ込められ、一口食べると口いっぱいに広がります。
                            </p>
                        </div>
                    </li>
                </ul>
            </section><!---- /popular ---->

            <p class="food-btn"><a href="<?php echo esc_url( home_url('menu') ) ?>"><i class="fas fa-book-open"></i> 料理をすベて見る</a></p>
        </div>
        <div class="food-img">
            <ul id="js-food-list">
                <li><img src="<?php echo get_template_directory_uri() ?>/img/top/food_img0.jpg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri() ?>/img/top/food_img1.jpg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri() ?>/img/top/food_img2.jpg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri() ?>/img/top/food_img3.jpg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri() ?>/img/top/food_img4.jpg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri() ?>/img/top/food_img5.jpg" alt=""></li>
            </ul>
        </div>
    </div><!---- /food ---->

<?php get_template_part( 'template-parts/archive' ); ?>

<?php get_template_part( 'template-parts/guide' ); ?>

<?php get_template_part( 'template-parts/contact' ); ?>

</main><!---- /main ---->

<?php get_footer(); ?>