<!---- contact ---->
<section class="contact" id="contact">
    <div class="inner">
        <h2 class="base-tit">ご予約や<br class="_md">お問い合わせはこちら</h2>           
        <div class="contact-lead">
            <p><span>営業</span>17:30〜23:30</p>
            <p><span>定休</span>水曜日</p>
        </div>
        <div class="contact-wrap">
            <ul class="contact-list_tab" id="js-contact-list_tab">
                <li class="_active">web〔 前日予約 〕</li>
                <li>電話〔 当日予約 〕</li>
                <li>問い合わせフォーム</li>
            </ul>    
            <ul class="contact-list_body" id="js-contact-list_body">
                <li class="_active">
                    <div class="calendar" id="calendar">
                        <p class="_lead">
                            前日までのご予約、<br>
                            又は営業日のご確認にご利用ください。
                        </p>
<?php
$story_page = get_page_by_path( 'rsv' );
$post = $story_page;
setup_postdata( $post );
the_content();
wp_reset_postdata();
?>
                    </div>
                </li>
                <li>
                    <div class="tel">
                        <p class="_lead">
                            営業日のみ13:00頃〜、受け付けております。
                        </p>
                        <div class="tel-link"><a href="tel:0276528037" aria-label="tel"><i class="fas fa-phone-square-alt"></i>0276-52-8037</a></div>
                    </div>
                </li>
                <li>
<?php echo do_shortcode( '[contact-form-7 id="29" title="コンタクトフォーム"]' ); ?>
                </li>
            </ul>
        </div>
    </div>
</section><!---- /contact ---->