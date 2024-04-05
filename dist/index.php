<?php
$thisPageName = 'top';
$path = realpath(dirname(__FILE__) . '') . "/";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/layout/slick-theme.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/layout/slick.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/page/top.min.css" rel="stylesheet">
</head>

<body id="top" class="top">
    <?php $header_white = true;
    include($path . 'libs/header.php'); ?>

    <main>
        <div class="sec-mv">
            <video class="movie pc" muted autoplay loop playsinline>
                <source src="<?php echo APP_ASSETS; ?>img/top/movie.mp4">
            </video>
            <video class="movie sp" muted autoplay loop playsinline>
                <source src="<?php echo APP_ASSETS; ?>img/top/movie_sp.mp4">
            </video>
            <p class="copy center pc">© 2022 Eternal Co., Ltd. All Rights Reserved.</p>
            <ul class="ico pc">
                <?php include($path . 'libs/li-insta.php'); ?>
                <?php include($path . 'libs/li-youtube.php'); ?>
                <?php include($path . 'libs/li-tiktok.php'); ?>
            </ul>
        </div>

        <div class="sec-about">
            <div class="flex f-wrap f-ai-c scroll-anim to-anim-top">
                <div class="block">
                    <div class="ttl-comp">
                        <p class="sub-en">ABOUT</p>
                        <h1 class="en">CREATE FOR YOURSELF</h1>
                    </div>
                    <p class="txt">明日は今日よりも、もっとすてきな自分に。<br>
                        あなたの持つ感性を心のままに。<br>
                        内に秘めた自分らしい美しさを見つけよう。<br>
                        はじまる新しい私との出会い。</p>
                    <a href="<?php echo APP_URL; ?>first/" class="btn-more wide center">はじめてのお客様へ</a>
                </div>
                <div class="slider">
                    <div class="item">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/img_about01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/img_about01.jpg" alt="ABOUT">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/img_about02.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/img_about02.jpg" alt="ABOUT">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/img_about03.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/img_about03.jpg" alt="ABOUT">
                        </picture>
                    </div>
                    <div class="item">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/img_about04.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/img_about04.jpg" alt="ABOUT">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec-info">
            <div class="scroll-anim to-anim-top">
                <div class="ttl-comp center">
                    <p class="sub-en">AFLOAT</p>
                    <h2 class="en">NEWS & COLUMN</h2>
                    <p class="ja">お知らせ</p>
                </div>
            </div>
        </div>

        <div class="sec-hair_catalog">
            <div class="base flex f-ai-c f-jc-c scroll-anim to-anim-top">
                <div class="inner">
                    <div class="ttl-comp center">
                        <p class="sub-en">AFLOAT</p>
                        <h2 class="en">HAIR CATALOG</h2>
                        <p class="ja">ヘアカタログ</p>
                    </div>
                    <a href="<?php echo APP_URL; ?>hair_catalog/" class="btn-more color02 center center-block">一覧を見る</a>
                </div>
            </div>
        </div>

        <div class="sec-lallyou">
            <a href="https://lallyou.afloat.co.jp/" class="inner flex f-wrap scroll-anim to-anim-top" target="_blank">
                <div class="block">
                    <div class="box flex f-ai-c f-jc-c f-wrap center">
                        <div class="in flex f-ai-c f-jc-c">
                            <div class="logo">
                                <img src="<?php echo APP_ASSETS; ?>img/common/logo_lallyou_white.svg" alt="LallYou">
                            </div>
                            <p class="txt">AFLOATの新ブランド「LallYou」<br>
                                月に一度のサロンケアで、<br class="sp">髪も心も幸せに</p>
                            <div class="btn center center-block opacity">公式HP</div>
                        </div>
                    </div>
                </div>
                <div class="img" style="background-image: url(<?php echo APP_ASSETS; ?>img/top/img_lallyou.jpg);">
                    <div class="box"></div>
                </div>
            </a>
        </div>

        <div class="sec-salon">
            <a class="btn-more en center center-block scroll-anim to-anim-top">MORE</a>
        </div>

        <div class="sec-ranking">
            <div class="ttl-comp center scroll-anim to-anim-top">
                <p class="sub-en">AFLOAT STORE</p>
                <h2 class="en">MONTHLY RANKING</h2>
                <p class="ja">アフロートストア月間ランキング</p>
            </div>
            <div class="bg">
                <div class="base scroll-anim to-anim-top">
                    <div class="slider">
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">1</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/4981747072948.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking01_202310.jpg" alt="アリミノ メン フリーズキープ ジェル α 200g ARIMINO 宮市亮選手×アリミノメンコラボ限定販売 " class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">アリミノ メン フリーズキープ ジェル α 200g ARIMINO 宮市亮選手×アリミノメンコラボ限定販売 </h3>
                                    <p class="price">1,760円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">2</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/query-set-500.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking02_202310.jpg" alt="AFLOAT アフロート キュエリー シャンプー 500g & ヘアマスク 500g セット" class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">AFLOAT アフロート キュエリー シャンプー 500g & ヘアマスク 500g セット</h3>
                                    <p class="price">9,350円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">3</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/oil_emie.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking03_202310.jpg" alt="AFLOAT アフロート エクストラ ヘアオイル エミエ 100g" class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">AFLOAT アフロート エクストラ ヘアオイル エミエ 100g</h3>
                                    <p class="price">3,850円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">4</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/4571411620300.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking04_202310.jpg" alt="Tant RUX タントリュクス ソープ 200ml デリケートゾーンケア" class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">Tant RUX タントリュクス ソープ 200ml デリケートゾーンケア</h3>
                                    <p class="price">5,500円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">5</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/4571411620256.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking05_202310.jpg" alt="Tant RUX タントリュクス オイル 30ml デリケートゾーンケア" class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">Tant RUX タントリュクス オイル 30ml デリケートゾーンケア</h3>
                                    <p class="price">7,700円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">6</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/eonnibrush.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking06_202310.jpg" alt="オンニブラシ EONNI オンニ ヘアロールブラシ 韓国スタイル ロールカールブラシ 豚毛 韓国風 前髪 レイヤー くびれヘア 顔まわり 立ち上げ" class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">オンニブラシ EONNI オンニ ヘアロールブラシ 韓国スタイル</h3>
                                    <p class="price">3,300円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">7</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/4981747072948.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking07_202310.jpg" alt="ヴィダルサスーン マジックシャイン スチームストレートアイロン ブラック VSS-9900/KJ スチームステーション " class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">ヴィダルサスーン マジックシャイン スチームストレートアイロン ブラック VSS-9900/KJ スチームステーション </h3>
                                    <p class="price">21,780円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">8</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/harbelle-set-500.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking08_202310.jpg" alt="AFLOAT アフロート ハーベル シャンプー 500g & ヘアマスク 500g セット" class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">AFLOAT アフロート ハーベル シャンプー 500g & ヘアマスク 500g セット</h3>
                                    <p class="price">9,350円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">9</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/4987205565038.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking09_202310.jpg" alt="hoyu ホーユー NiNE ナイン デザインドロップ 80g" class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">hoyu ホーユー NiNE ナイン デザインドロップ 80g</h3>
                                    <p class="price">1,980円（税込）</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="num flex f-ai-c f-jc-c">10</div>
                            <div class="in">
                                <a href="https://www.afloat-store.jp/SHOP/4988338222027.html" class="thumb hover-link" target="_blank">
                                    <img src="<?php echo APP_ASSETS; ?>img/top/img_ranking10_202310.jpg" alt="AFLOAT アフロート エクストリームカール2 プラス 32mm" class="hover-link-in">
                                </a>
                                <div class="txt matchHeight">
                                    <h3 class="name">AFLOAT アフロート エクストリームカール2 プラス 32mm</h3>
                                    <p class="price">11,418円（税込）</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS; ?>js/slick.js"></script>
    <script>
        $(function() {
            $('.sec-about .slider').slick({
                infinite: true,
                dots: false,
                arrows: false,
                slidesToShow: 2,
                fade: false,
                autoplay: false,
                responsive: [{
                    breakpoint: 767,
                    settings: {}
                }]
            });
            $('.sec-info .slider').slick({
                infinite: true,
                dots: true,
                arrows: false,
                slidesToShow: 4,
                fade: false,
                autoplay: false,
                responsive: [{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }]
            });
            $('.sec-ranking .slider').slick({
                infinite: true,
                dots: true,
                arrows: false,
                slidesToShow: 4,
                fade: false,
                autoplay: true,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }]
            });
        });
        //店舗一覧MOREボタン
        $(".sec-salon .btn-more").click(function() {
            $(this).prev().find(".hide").animate({
                    height: "toggle",
                    opacity: "toggle"
                },
                "nomal"
            );
            $(this).css("display", "none");
        });
    </script>
</body>

</html>