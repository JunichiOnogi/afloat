<a href="<?php echo APP_URL; ?>salon/" class="btn-stalker center opacity">WEBで予約する</a>

<footer>
    <div class="base">
        <div class="top-area flex f-wrap f-ai-c">
            <div class="logo">
                <img src="<?php echo APP_ASSETS; ?>img/common/logo_white.svg" alt="AFLOAT">
            </div>
            <div class="ttl">
                <span class="en">CREATE FOR YOURSELF</span>
                <span class="ja">明日は今日よりも、もっとすてきな自分に。</span>
            </div>
            <div class="txt">【公式】AFLOATオフィシャルサイト<br class="sp">-全ての女性を可愛くする<br class="sp">世界一のカリスマ美容師集団アフロート-</div>
        </div>
        <div class="bottom-area flex f-wrap">
            <div class="col">
                <ul class="navi">
                    <li><a href="<?php echo APP_URL; ?>news-and-column/" class="opacity">NEWS&COLUMN<span>お知らせ</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>first/" class="opacity">FIRST<span>はじめてのお客様へ</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>collection/" class="opacity">COLLECTION<span>コレクション</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>hair_catalog/" class="opacity">HAIR CATALOG<span>ヘアカタログ</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>salon/" class="opacity">SALON LIST<span>サロン一覧</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>staff/" class="opacity">STAFF<span>スタッフ</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>recruit/" class="opacity">RECRUIT<span>求人情報</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>company/" class="opacity">COMPANY<span>会社概要</span></a></li>
                    <li><a href="https://lallyou.afloat.co.jp/" class="opacity" target="_blank">LallYou<span>ラルユー</span></a></li>
                </ul>
                <ul class="ico pc">
                    <?php include($path . 'libs/li-insta.php'); ?>
                    <?php include($path . 'libs/li-youtube.php'); ?>
                    <?php include($path . 'libs/li-tiktok.php'); ?>
                </ul>
            </div>
            <div class="col">
                <ul class="navi">
                    <li><a href="<?php echo APP_URL; ?>privacy/" class="opacity">PRIVACY POLICY<span>プライバシーポリシー</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>contact/" class="opacity">CONTACT<span>お問い合わせ</span></a></li>
                </ul>
                <ul class="ico sp">
                    <?php include($path . 'libs/li-insta.php'); ?>
                    <?php include($path . 'libs/li-youtube.php'); ?>
                    <?php include($path . 'libs/li-tiktok.php'); ?>
                </ul>
            </div>
            <div class="col">
                <div class="bnr">
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
            </div>
        </div>
    </div>
    <p class="copy center">© 2022 Eternal Co., Ltd. All Rights Reserved.</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/modernizr.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/jquery.inview.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/jquery.matchHeight.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/common.min.js"></script>

<script>
    var ua = navigator.userAgent
    var sp = (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)
    if (sp) new ViewportExtra(375)
</script>