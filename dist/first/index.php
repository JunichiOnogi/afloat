<?php
$thisPageName = 'first';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/first.min.css" rel="stylesheet">
</head>

<body id="first" class="first">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <div class="pankuzu">
            <ul>
                <li><a href="<?php echo APP_URL; ?>" class="opacity">AFLOAT TOP</a></li>
                <li>FIRST</li>
            </ul>
        </div>

        <div class="sec-mv scroll-anim to-anim-top" style="background-image:url(https://www.afloat.co.jp/wp/wp-content/uploads/2023/10/first-2023aw.jpg);">
            <div class="flex f-jc-c f-ai-c">
                <h1 class="ttl">FIRST</h1>
            </div>
        </div>

        <div class="sec-intro">
            <div class="base scroll-anim to-anim-top">
                <div class="ttl-comp center">
                    <p class="sub-en">AFLOAT</p>
                    <h2 class="en">WELCOME TO AFLOAT</h2>
                    <p class="ja">はじめてアフロートをご利用のお客様へ</p>
                </div>
            </div>
        </div>

        <div class="sec-faq">
            <div class="base scroll-anim to-anim-top">
                <div class="ttl-comp center">
                    <p class="sub-en">FIRST</p>
                    <h2 class="en">FAQ</h2>
                    <p class="ja">よくあるご質問</p>
                </div>
            </div>
        </div>

        <div class="sec-info">
            <div class="base scroll-anim to-anim-top">
                <div class="ttl-comp center">
                    <p class="sub-en">AFLOAT</p>
                    <h2 class="en">SALON INFORMATION</h2>
                    <p class="ja">店舗一覧</p>
                </div>
            </div>
        </div>

    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script>
        $(".sec-faq .list .box .q").click(function() {
            $(this).next().animate({
                    height: "toggle",
                    opacity: "toggle"
                },
                "nomal"
            );
            $(this).toggleClass("active");
        });
    </script>
</body>

</html>