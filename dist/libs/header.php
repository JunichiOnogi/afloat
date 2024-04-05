<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54JX9CX" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="<?php if (!empty($header_white)) {
                    echo 'white scroll';
                } ?>">
    <div class="nav-toggle sp-nav">
        <span></span>
        <span></span>
    </div>
    <div class="inner flex f-ai-c f-jc-sb">
        <ul class="ico sp-nav">
            <?php include($path . 'libs/li-insta-black.php'); ?>
            <?php include($path . 'libs/li-youtube-black.php'); ?>
            <?php include($path . 'libs/li-tiktok-black.php'); ?>
            <?php include($path . 'libs/li-cart-black.php'); ?>
        </ul>
        <div class="logo"><a href="<?php echo APP_URL; ?>"></a></div>
        <nav id="gnav" class="flex f-ai-c">
            <ul class="ico sp-nav">
                <?php include($path . 'libs/li-insta.php'); ?>
                <?php include($path . 'libs/li-youtube.php'); ?>
                <?php include($path . 'libs/li-tiktok.php'); ?>
                <?php include($path . 'libs/li-cart.php'); ?>
            </ul>
            <div class="logo-sp sp-nav">
                <a href="<?php echo APP_URL; ?>">
                    <img src="<?php echo APP_ASSETS; ?>img/common/logo_white.svg" alt="AFLOAT">
                </a>
            </div>
            <ul class="navi">
                <li><a href="<?php echo APP_URL; ?>news-and-column/" class="opacity">NEWS&COLUMN<span class="sp-nav">お知らせ</span></a></li>
                <li><a href="<?php echo APP_URL; ?>first/" class="opacity">FIRST<span class="sp-nav">はじめてのお客様へ</span></a></li>
                <li><a href="<?php echo APP_URL; ?>collection/" class="opacity">COLLECTION<span class="sp-nav">コレクション</span></a></li>
                <li><a href="<?php echo APP_URL; ?>hair_catalog/" class="opacity">HAIR CATALOG<span class="sp-nav">ヘアカタログ</span></a></li>
                <li><a href="<?php echo APP_URL; ?>salon/" class="opacity">SALON LIST<span class="sp-nav">サロン一覧</span></a></li>
                <li><a href="<?php echo APP_URL; ?>staff/" class="opacity">STAFF<span class="sp-nav">スタッフ</span></a></li>
                <li><a href="<?php echo APP_URL; ?>recruit/" class="opacity">RECRUIT<span class="sp-nav">求人情報</span></a></li>
                <li><a href="<?php echo APP_URL; ?>company/" class="opacity">COMPANY<span class="sp-nav">会社概要</span></a></li>
                <li><a href="https://lallyou.afloat.co.jp/" class="opacity" target="_blank">LallYou<span class="sp-nav">ラルユー</span></a></li>
            </ul>
            <div class="bnr sp-nav">
                <a href="https://www.afloat-store.jp/" target="_blank">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/common/bnr_gnav01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/common/bnr_gnav01.jpg" alt="ONLINE SHOP">
                    </picture>
                </a>
                <a href="<?php echo APP_URL; ?>collection/">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/common/bnr_gnav02.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/common/bnr_gnav02.jpg" alt="COLLECTION">
                    </picture>
                </a>
            </div>
            <div class="copy center sp-nav">
                © 2022 Eternal Co., Ltd. All Rights Reserved.
            </div>
            <div class="box-btn center flex pc-nav">
                <a href="https://www.afloat-store.jp/" class="shop flex f-ai-c f-jc-c opacity" target="_blank">Online Shop</a>
                <a href="<?php echo APP_URL; ?>salon/" class="reserve flex f-ai-c f-jc-c opacity">WEB予約</a>
            </div>
        </nav>
    </div>
</header>