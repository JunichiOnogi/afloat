<?php
$thisPageName = 'new-graduate';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
/*
Template Name: 応募完了ページ（新卒）
*/
?>
<link href="<?php echo APP_ASSETS; ?>css/page/contact.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/page/recruit_form.min.css" rel="stylesheet">
</head>

<body id="new-graduate" class="new-graduate">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <div class="pankuzu">
            <ul>
                <li><a href="<?php echo APP_URL; ?>" class="opacity">AFLOAT TOP</a></li>
                <li><a href="<?php echo APP_URL; ?>recruit/" class="opacity">RECRUIT</a></li>
                <li><a href="<?php echo APP_URL; ?>recruit/new-graduate/" class="opacity">NEW GRADUATE RECRUITMENT</a></li>
                <li>ご応募ありがとうございました</li>
            </ul>
        </div>

        <div class="sec-thanks">
            <div class="base scroll-anim to-anim-top">
                <div class="center">
                    <p class="p-rct-enttl --pink">FORM</p>
                    <h2 class="p-rct-ttl"><span>応募フォーム</span></h2>
                </div>
                <div class="center">
                    <p class="ttl">ご応募ありがとうございました</p>
                    <p class="txt">AFLOAT | Lall You | 株式会社エターナルの<br class="sp">採用のご応募を受け付けました。<br>
                    3営業日以内に担当者が確認いたします。<br class="sp">ご応募ありがとうございました。
                    </p>
                    <a href="<?php echo APP_URL; ?>" class="btn-more center center-block">トップへ戻る</a>
                </div>
            </div>
        </div>

    </main>

    <?php include($path . 'libs/footer.php'); ?>
</body>

</html>