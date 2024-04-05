<?php
$thisPageName = 'recruit';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/layout/slick-theme.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/layout/slick.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/page/recruit.min.css" rel="stylesheet">
</head>

<body id="recruit" class="recruit">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <div class="pankuzu">
            <ul>
                <li><a href="<?php echo APP_URL; ?>" class="opacity">AFLOAT TOP</a></li>
                <li>RECRUIT</li>
            </ul>
        </div>
        <article class="p-rct-wrap">
            <div class="p-rct-head">
                <h1 class="p-rct-head__ttl">RECRUIT<span>Join us</span></h1>
                <div class="p-rct-head__img">
                    <picture class="p-rct-head__img__item">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01_sp.jpg.webp" type="image/webp" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01_sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/recruit/img_slide01.jpg" alt="">
                    </picture>
                    <picture class="p-rct-head__img__item">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01_sp.jpg.webp" type="image/webp" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01_sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/recruit/img_slide01.jpg" alt="">
                    </picture>
                    <picture class="p-rct-head__img__item">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01_sp.jpg.webp" type="image/webp" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01_sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/recruit/img_slide01.jpg" alt="">
                    </picture>
                    <picture class="p-rct-head__img__item">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01_sp.jpg.webp" type="image/webp" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01_sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_slide01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/recruit/img_slide01.jpg" alt="">
                    </picture>
                </div>
            </div>
            <section class="p-rct-greeting">
                <div class="scroll-anim to-anim-top">
                    <p class="p-rct-enttl">GREETING</p>
                    <h2 class="p-rct-ttl"><span>多彩を生み出す<br class="sp">私たちは多才であれ</span></h2>
                    <p class="p-rct-txt">表現の仕方は自由でいい。<br>
                    型にはまらず<span>得意</span><span>好き</span><span>楽しい</span>を<br class="sp">突き詰めて、<br class="pc">お客様を笑顔にしよう。<br><br>
                    チームとして多才である原動力は、<br>
                    一人ひとりの個性を光らせ<br class="sp">仲間の個性を尊重する環境があるから。<br><br>
                    ヘアにとどまらないあらゆる才能が<br class="sp">集結するからこそ、<br>
                    彩り豊かな価値を生み出す。<br><br>
                    AFLOATを選んだあなたの<br class="sp">美容師人生が<br class="pc">どこまでも輝くように…。<br>
                    <span class="--ml0">あなた</span>を発揮できるステージが、ここに。</p>       
                </div>         
            </section>
            <section class="p-rct-hiring scroll-anim to-anim-top">
                <p class="p-rct-hiring__enttl">Now Hiring</p>
                <h2 class="p-rct-hiring__ttl">現在募集中</h2>
                <ul class="p-rct-hiring__list">
                    <li><a href="<?php echo APP_URL; ?>mid-career/#reception" class="opacity">
                        <time datetype="2024-01-24">2024.01.24</time>
                        <p>レセプション募集</p>
                    </a></li>
                    <li><a href="<?php echo APP_URL; ?>new-graduate/#explanation" class="opacity">
                        <time datetype="2024-01-24">2024.01.24</time>
                        <p>新卒採用：説明会のお知らせ</p>
                    </a></li>
                </ul>
                <ul class="p-rct-menu scroll-anim to-anim-top">
                    <li><a href="<?php echo APP_URL; ?>new-graduate/" class="opacity"><span>新卒採用</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>mid-career/?category=reception" class="opacity"><span>レセプション<br>採用</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>mid-career/?category=backoffice" class="opacity"><span>バックオフィス<br>採用</span></a></li>
                    <li><a href="https://lallyou.afloat.co.jp/recruit/" target="_blank" rel="noopener noreferrer" class="opacity"><span>LallYou<br>採用</span></a></li>
                </ul>
            </section>
            <section class="p-rct-charm scroll-anim to-anim-top">
                <p class="p-rct-enttl">AFLOAT’S CHARM<p>
                <h2 class="p-rct-ttl"><span>AFLOATの魅力</span></h2>
                <p class="p-rct-txt">美容業界のリーディングカンパニー<br>
                    AFLOAT（株式会社エターナル）が<br class="sp">時代や業界を牽引し続けられる理由は、<br>
                    <span>サロン文化</span>の良さ。<br>
                    AFLOATの一員になって、<br class="sp">この魅力をぜひご体感ください。</p>
                <div class="p-rct-charm__inner">
                    <section class="p-rct-charm__item scroll-anim to-anim-top">
                        <div class="p-rct-charm__item__txtfield">
                            <p class="p-rct-charm__item__enttl">professional<span>1</span></p>
                            <h3 class="p-rct-charm__item__ttl"><span>プロフェッショナルとしての<br>人間力</span>が身につく</h3>
                            <p class="p-rct-charm__item__txt">AFLOATでは、美容師力を高めるためには「技術力だけではなく人間力も大切だ」と考えています。<br>
                                チームの一員であるという意識と仲間への感謝・挑戦や向上心を忘れない心・誇りを持った言動など、細部にわたってポジティブな価値観をアップデート。美容師としてのプロフェッショナルさと、「あの人なら任せられる」と思ってもらえる信頼関係構築力が身につきます。</p>
                        </div>
                        <picture class="p-rct-charm__item__img">
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_charm01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_charm01.jpg" alt="">
                        </picture>
                    </section>
                    <section class="p-rct-charm__item scroll-anim to-anim-top">
                        <div class="p-rct-charm__item__txtfield">
                            <p class="p-rct-charm__item__enttl">hair makeup<span>2</span></p>
                            <h3 class="p-rct-charm__item__ttl">CMヘアメイク・<br>インフルエンサーなど<br><span>憧れの美容師像がすぐ近く</span></h3>
                            <p class="p-rct-charm__item__txt">創業以来トップクラスのポジションを譲らず美容業界をリードし続けているAFLOATの中には、輝かしい美容師人生を切り拓くスタイリストが数多く在籍しています。CMや雑誌などメディアに載るモデルのヘアメイクを担当するスタイリストやコンテスト入賞実績のあるスタッフ・SNSフォロワー数が多いインフルエンサー美容師など、誰もが一度は憧れる「こんな美容師になりたい」を叶えているロールモデルがすぐ近くに。あなたの夢が、実現可能な目標へとシフトアップする美容室です。</p>
                        </div>
                        <picture class="p-rct-charm__item__img">
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_charm02.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_charm02.jpg" alt="">
                        </picture>
                    </section>
                    <section class="p-rct-charm__item scroll-anim to-anim-top">
                        <div class="p-rct-charm__item__txtfield">
                            <p class="p-rct-charm__item__enttl">education<span>3</span></p>
                            <h3 class="p-rct-charm__item__ttl">動画コンテンツで<br><span>効率よくステップアップ</span></h3>
                            <p class="p-rct-charm__item__txt">技術レッスンや薬剤知識・トレンド情報など、スキルアップや日々のサロンワークに活用できる動画を多数用意しています。SNSを見るような感覚で閲覧できるため、スキマ時間に効率よく学べることがポイント。技術レッスンではAFLOATトップレベルのスタイリストが指導しているため「あのスタイリストのカット技術を見たいけれど、他店舗だから機会がない」といった問題を解消し、AFLOATの高レベルなスキルを誰でも吸収できます。</p>
                        </div>
                        <picture class="p-rct-charm__item__img">
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_charm03.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_charm03.jpg" alt="">
                        </picture>
                    </section>
                    <section class="p-rct-charm__item scroll-anim to-anim-top">
                        <div class="p-rct-charm__item__txtfield">
                            <p class="p-rct-charm__item__enttl">self-improvement<span>4</span></p>
                            <h3 class="p-rct-charm__item__ttl">働きやすさが整っているから<br><span>自分磨きの時間も確保</span></h3>
                            <p class="p-rct-charm__item__txt">AFLOATでは、労働時間や休日など法令に準ずる働き方が整っています。勤務時間外に生まれたゆとりある時間をどう過ごすかは自分次第。<br>
                                「スキルアップしたい」と考えた場合、AFLOATの動画コンテンツを見て勉強してもいいですし「色々な知識を吸収したい」場合、自宅で映画や本を見ることもいいでしょう。理想とするキャリアプランに向けて、有意義な時間の使い方ができます。<br>
                                また福利厚生も充実しており、産休・育休が取得しやすいなど美容業界のリーディングカンパニーとして誇れる環境があることもAFLOATの魅力です。</p>
                        </div>
                        <picture class="p-rct-charm__item__img">
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_charm04.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_charm04.jpg" alt="">
                        </picture>
                    </section>
                    <section class="p-rct-charm__item scroll-anim to-anim-top">
                        <div class="p-rct-charm__item__txtfield">
                            <p class="p-rct-charm__item__enttl">challenge<span>5</span></p>
                            <h3 class="p-rct-charm__item__ttl">ヘアだけではない<br><span>幅広い活躍が叶う</span></h3>
                            <p class="p-rct-charm__item__txt">美容師を追求することもいいですが、ヘアにとどまらなくてもいいとAFLOATでは考えています。<br>
                                例えば、「経営に携わりたい」「新しい事業をしたい」など、表現が違ってもビジョン（めざす方向）が同じであればサポートできる環境があります。<br>
                                お客様に対して「外見だけではなく内面も美しく提供できること」を目指しながら、自身の夢や挑戦を追い続けられたらお客様もあなたもワクワクし続けていられるでしょう。<br>
                                あなたの彩り溢れる才能を、ぜひAFLOATで発揮してください。</p>
                        </div>
                        <picture class="p-rct-charm__item__img">
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_charm05.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_charm05.jpg" alt="">
                        </picture>
                    </section>
                </div>
            </section>
            <section class="p-rct-intvw scroll-anim to-anim-top">
                <p class="p-rct-enttl">INTERVIEW<p>
                <h2 class="p-rct-ttl"><span>スタッフインタビュー</span></h2>
                <p class="p-rct-txt">AFLOATで働く若手アシスタントから<br>最前線で働くトップスタイリストをご紹介</p>
                <div class="p-rct-intvw__inner">
                    <a href="#" class="p-rct-intvw__bnr opacity">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_bnr_column_sp.jpg.webp" type="image/webp" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_bnr_column_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_bnr_column.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_bnr_column.jpg" alt="MEMBER's COLUMN | メンバーコラム">
                        </picture>
                    </a>
                </div>
                <ul class="p-rct-menu scroll-anim to-anim-top">
                    <li><a href="<?php echo APP_URL; ?>new-graduate/" class="opacity"><span>新卒採用</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>mid-career/?category=reception" class="opacity"><span>レセプション<br>採用</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>mid-career/?category=backoffice" class="opacity"><span>バックオフィス<br>採用</span></a></li>
                    <li><a href="https://lallyou.afloat.co.jp/recruit/" target="_blank" rel="noopener noreferrer" class="opacity"><span>LallYou<br>採用</span></a></li>
                </ul>
            </section>
            <section class="p-rct-movie scroll-anim to-anim-top">
                <p class="p-rct-enttl">MOVIE<p>
                <h2 class="p-rct-ttl"><span>こんな動画を<br class="sp">発信しています！</span></h2>
                <p class="p-rct-txt">AFLOATではSNSでの発信に<br class="sp">力をいれています</p>
                <ul class="p-rct-movie__list">
                    <li>
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_movie01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_movie01.jpg" alt="">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_movie02.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_movie02.jpg" alt="">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/img_movie03.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/img_movie03.jpg" alt="">
                        </picture>
                    </li>
                </ul>
                <section class="p-rct-movie__wtc scroll-anim to-anim-top">
                    <p class="p-rct-movie__wtc__enttl">Watch video</p>
                    <h3 class="p-rct-movie__wtc__ttl">動画の視聴は<br class="pc">こちらから</h3>
                    <ul class="p-rct-movie__wtc__list">
                        <li><a href="https://www.tiktok.com/@afloat.official?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer" class="opacity">
                            <picture>
                                <source srcset="<?php echo APP_ASSETS; ?>img/recruit/ico_ig.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/recruit/ico_ig.jpg" alt="tiktok">
                            </picture>
                        </a></li>
                        <li><a href="https://youtube.com/@AFLOATOFFICIAL?si=siWLVSjpuLPjRFSC" target="_blank" rel="noopener noreferrer" class="opacity">
                            <picture>
                                <source srcset="<?php echo APP_ASSETS; ?>img/recruit/ico_yt.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/recruit/ico_yt.jpg" alt="youtube">
                            </picture>
                        </a></li>
                    </ul>
                </section>
                <ul class="p-rct-menu scroll-anim to-anim-top">
                    <li><a href="<?php echo APP_URL; ?>new-graduate/" class="opacity"><span>新卒採用</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>mid-career/#reception" class="opacity"><span>レセプション<br>採用</span></a></li>
                    <li><a href="<?php echo APP_URL; ?>mid-career/#backoffice" class="opacity"><span>バックオフィス<br>採用</span></a></li>
                    <li><a href="https://lallyou.afloat.co.jp/recruit/" target="_blank" rel="noopener noreferrer" class="opacity"><span>LallYou<br>採用</span></a></li>
                </ul>
            </section>
            <ul class="p-rct-navi">
                <li class="p-rct-navi__item"><a href="https://lit.link/afloatrecruit" target="_blank" rel="noopener noreferrer" class="opacity p-rct-navi__item--entry"><span>エントリー</span></a></li>
                <li class="p-rct-navi__item"><a href="#" class="opacity p-rct-navi__item--line"><span>LINEで応募</span></a></li>
                <li class="p-rct-navi__item"><a href="#" class="opacity p-rct-navi__item--company"><span>会社概要</span></a></li>
            </ul>
        </article>
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script src="<?php echo APP_ASSETS; ?>js/slick.js"></script>
    <script>
        $(function() {
            $('.p-rct-head__img').slick({
                infinite: true,
                dots: true,
                arrows: false,
                slidesToShow: 1,
                fade: true,
                autoplay: true,
            });
        });
    </script>
</body>

</html>