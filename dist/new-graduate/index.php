<?php
$thisPageName = 'new-graduate';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/recruit_form.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/page/recruit.min.css" rel="stylesheet">
</head>

<body id="new-graduate" class="new-graduate">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <div class="pankuzu">
            <ul>
                <li><a href="<?php echo APP_URL; ?>" class="opacity">AFLOAT TOP</a></li>
                <li><a href="<?php echo APP_URL; ?>" class="opacity">RECRUIT</a></li>
                <li>NEW GRADUATE RECRUITMENT</li>
            </ul>
        </div>
        <article class="p-rct-wrap">
            <picture>
                <source srcset="<?php echo APP_ASSETS; ?>img/recruit/new/img_mv_sp.jpg.webp" type="image/webp" media="(max-width:767px)">
                <source srcset="<?php echo APP_ASSETS; ?>img/recruit/new/img_mv_sp.jpg" media="(max-width:767px)">
                <source srcset="<?php echo APP_ASSETS; ?>img/recruit/new/img_mv.jpg.webp" type="image/webp">
                <img src="<?php echo APP_ASSETS; ?>img/recruit/new/img_mv.jpg" alt="">
            </picture>
            <div class="p-new-head scroll-anim to-anim-top">
                <p class="p-rct-enttl --pink --lg">NEW GRADUATE RECRUITMENT</p>
                <h1 class="p-rct-ttl--white">新卒採用</h1>
                <ul class="p-new-head__navi">
                    <li><a href="#explanation">会社説明会</a></li>
                    <li><a href="#system">カリキュラム</a></li>
                    <li><a href="#requirements">募集要項</a></li>
                    <li><a href="#flow">内定までの流れ</a></li>
                    <li><a href="#entry">エントリー</a></li>
                    <li><a href="#tour">サロン見学・<br class="sp">サロン実習</a></li>
                    <li><a href="#school">OBOG出身校一覧</a></li>
                    <li><a href="#faq">よくあるご質問</a></li>
                </ul>
            </div>
            <section class="p-new-ex scroll-anim to-anim-top" id="explanation">
                <div class="center">
                    <p class="p-rct-enttl">EXPLANATION</p>
                    <h2 class="p-rct-ttl"><span>会社説明会実施中！</span></h2>
                    <p class="p-rct-txt">新卒の方向けにAFLOATの会社説明会を<br class="sp">実施しています。<br>ぜひお気軽にご参加ください！</p>
                </div>
                <div class="p-new-ex__youtube"><iframe width="560" height="315" src="https://www.youtube.com/embed/BIi_0E9xWm4?si=cLMGn4iZNYw_zIiL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
                <section class="p-new-ex__schedule">
                    <h3 class="p-rct-movie__wtc__ttl">動会社説明会<br class="pc">2024</h3>
                    <ul class="p-new-ex__schedule__info">
                        <li><span>東京</span>4/14（日）@ミルボン銀座スタジオ</li>
                        <li><span>名古屋</span>4/21（日）@アフロート名古屋</li>
                        <li><span>大阪</span>4/28（日）@ミルボン大阪スタジオ</li>
                    </ul>
                </section>
                <p class="p-rct-link --mt-sm-pc"><a href="https://docs.google.com/forms/d/e/1FAIpQLSceerfU0lksqkwLNkjE6G3dCBLR6Js85xfxB9UR0dgudpZ7rw/viewform" target="_blank" rel="noopener noreferrer" class="p-rct-link__btn"><span>説明会のお申し込みはこちら</span></a></p>
            </section>
            <section class="p-new-sys scroll-anim to-anim-top" id="system">
                <div class="center">
                    <p class="p-rct-enttl">EDUCATIONAL SYSTEM</p>
                    <h2 class="p-rct-ttl"><span>AFLOATの<br class="sp">充実な教育体制</span></h2>
                </div>
                <div class="p-new-sys__inner">
                    <section class="p-new-sys__sec scroll-anim to-anim-top">
                        <div class="center">
                            <h3 class="p-new-ttl">AFLOATだから叶うこと</h3>
                            <p class="p-new-sys__enttl"> Come ture</p>
                            <p class="p-new-txt">この文章はダミーです。この文章はダミーです。この文章はダミーです。<br class="pc">この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                            <picture class="p-new-sys__img">
                                <source srcset="<?php echo APP_ASSETS; ?>img/recruit/new/img_cometrue.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/recruit/new/img_cometrue.jpg" alt="">
                            </picture>
                        </div>
                    </section>
                    <section class="p-new-sys__sec scroll-anim to-anim-top">
                        <div class="center">
                            <h3 class="p-new-ttl">デビューまでの流れ</h3>
                            <p class="p-new-sys__enttl"> Flow until debut</p>
                            <p class="p-new-txt">この文章はダミーです。この文章はダミーです。この文章はダミーです。<br class="pc">この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                        </div>
                        <div class="p-new-sys__flow__inner">
                            <section class="p-new-flow__sec">
                                <h4 class="p-new-flow__sec__ttl">1年目</h4>
                                <ul class="p-new-sys__flow__list">
                                    <li>
                                        <p class="p-new-sys__flow__list__ttl">接客基礎・シャンプー</p>
                                        <p class="p-new-sys__flow__list__txt">接客の土台となるご案内や電話対応からはじまりシャンプーはレングスごとに練習をして、ヘッドスパまで学ぶ事ができます。</p>
                                    </li>
                                    <li>
                                        <p class="p-new-sys__flow__list__ttl">カラー</p>
                                        <p class="p-new-sys__flow__list__txt">リタッチカラーは普通毛・白髪染め別で学び営業の基本となるトーンダウン・トーンアップカラーから、ホイルワークのハイライトカラーまで幅広く学ぶ事ができます。</p>
                                    </li>
                                    <li>
                                        <p class="p-new-sys__flow__list__ttl">パーマ</p>
                                        <p class="p-new-sys__flow__list__txt">最初は薬付けからはじまり、毛先巻き・中間巻き、縮毛橋正まで学びます。</p>
                                    </li>
                                </ul>
                            </section>
                            <section class="p-new-flow__sec">
                                <h4 class="p-new-flow__sec__ttl">2年目</h4>
                                <ul class="p-new-sys__flow__list">
                                    <li>
                                        <p class="p-new-sys__flow__list__ttl">ブロー</p>
                                        <p class="p-new-sys__flow__list__txt">最初はブラシを使ったプローを学び、慣れてきたら人頭で練習をし、最終にはクセ毛でもブラシだけで綺麗に乾かせるような技術を習得できます。AFLOATのブロー技術は全国でも有名です。</p>
                                    </li>
                                    <li>
                                        <p class="p-new-sys__flow__list__ttl">ウィッグカット</p>
                                        <p class="p-new-sys__flow__list__txt">最初はウィッグで、ロング〜メンズまで練習をしていきます。最初は長いレングスから練習をする人が多いです。</p>
                                    </li>
                                </ul>
                            </section>
                            <section class="p-new-flow__sec">
                                <h4 class="p-new-flow__sec__ttl">3年目</h4>
                                <ul class="p-new-sys__flow__list">
                                    <li>
                                        <p class="p-new-sys__flow__list__ttl">人毛カット</p>
                                        <p class="p-new-sys__flow__list__txt">ウィッグカットの試験に合格をしたら実際に人毛でカットの試験を受けます。実際に人頭の髪の毛をカットすることで、頭の骨格別・顔の輪郭別の似合わせカットも習得できます。</p>
                                    </li>
                                    <li>
                                        <p class="p-new-sys__flow__list__ttl">スタイリストデビュー</p>
                                        <p class="p-new-sys__flow__list__txt">カリキュラムを全てクリアするとスタイリスト。指名・フリーで来店のお客様を担当します。</p>
                                        <p class="p-new-sys__flow__list__enttl">Debut!</p>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </section>
                    <section class="p-new-sys__sec scroll-anim to-anim-top">
                        <div class="center">
                            <h3 class="p-new-ttl">カリキュラム</h3>
                            <p class="p-new-sys__enttl"> Curriculum</p>
                            <p class="p-new-txt">この文章はダミーです。この文章はダミーです。この文章はダミーです。<br class="pc">この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                        </div>
                        <div class="p-new-sys__tbl__wrap">
                            <table class="p-new-sys__tbl">
                                <tr>
                                    <th class="p-new-sys__tbl__thead">カテゴリ</th>
                                    <th class="p-new-sys__tbl__thead2" colspan="4">項目</th>
                                </tr>
                                <tr>
                                    <th class="p-new-sys__tbl__thead">シャンプー</th>
                                    <td>1シャン</td>
                                    <td>2シャン</td>
                                    <td>クレンジング<br>スパ</td>
                                    <td>ヘッドスパ</td>
                                </tr>
                                <tr>
                                    <th class="p-new-sys__tbl__thead">カラー</th>
                                    <td>カラー理論<br>(soeasy)</td>
                                    <td>トーンダウン<br>トーンアップ</td>
                                    <td>白髪染め</td>
                                    <td>ホイルワーク</td>
                                </tr>
                                <tr>
                                    <th class="p-new-sys__tbl__thead">パーマ</th>
                                    <td>パーマ理論</td>
                                    <td>薬づけ</td>
                                    <td>逆巻き<br>毛先巻き<br>中間巻き</td>
                                    <td>縮毛矯正</td>
                                </tr>
                                <tr>
                                    <th class="p-new-sys__tbl__thead">ブロー</th>
                                    <td>Jカール</td>
                                    <td>くせ毛ブロー</td>
                                    <td>ウェーブブロー</td>
                                    <td>オフザフェイス</td>
                                </tr>
                                <tr>
                                    <th class="p-new-sys__tbl__thead">カット<br>（ウィッグ）</th>
                                    <td>ボブ<br>ショート</td>
                                    <td>ミディアム</td>
                                    <td>ロング</td>
                                    <td>メンズ</td>
                                </tr>
                                <tr>
                                    <th class="p-new-sys__tbl__thead">カット<br>（人毛）</th>
                                    <td>ボブ<br>ショート</td>
                                    <td>ミディアム<br>ロング</td>
                                    <td>メンズ</td>
                                    <td>コールドパーマ<br>デジタルパーマ</td>
                                </tr>
                                <tr>
                                    <th class="p-new-sys__tbl__thead">スタイリング</th>
                                    <td>作品撮り</td>
                                    <td>作品撮り</td>
                                    <td>フリースタイル</td>
                                    <td>フリースタイル</td>
                                </tr>
                            </table>
                        </div>
                    </section>
                    <section class="p-new-sys__sec scroll-anim to-anim-top">
                        <div class="center">
                            <h3 class="p-new-ttl">動画教育について</h3>
                            <p class="p-new-sys__enttl"> Education</p>
                            <p class="p-new-txt">この文章はダミーです。この文章はダミーです。この文章はダミーです。<br class="pc">この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                        </div>
                        <picture class="p-new-sys__img">
                            <source srcset="<?php echo APP_ASSETS; ?>img/recruit/new/img_education.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/recruit/new/img_education.jpg" alt="">
                        </picture>
                    </section>
                    <section class="p-new-sys__sec scroll-anim to-anim-top">
                        <div class="center">
                            <h3 class="p-new-ttl">スタッフ紹介</h3>
                            <p class="p-new-sys__enttl"> Staff</p>
                            <p class="p-new-txt">入社から3年〜5年でスタイリストになった<br class="sp">スタッフをご紹介！</p>
                        </div>
                        <section class="p-new-sys__staff">
                            <div class="p-new-sys__staff__head">
                                <picture class="p-new-sys__staff__img">
                                    <source srcset="<?php echo APP_ASSETS; ?>img/recruit/new/img_staff.jpg.webp" type="image/webp">
                                    <img src="<?php echo APP_ASSETS; ?>img/recruit/new/img_staff.jpg" alt="">
                                </picture>
                                <h4 class="p-new-sys__staff__name">藤田 圭介<span>KEISUKE FUJITA</span></h4>
                                <p class="p-new-sys__staff__pr">AFLOAT GINZA店 トップスタイリスト<br>2018年入社<br>神戸ベルェベル美容専門学校卒</p>
                            </div>
                            <div class="p-new-sys__staff__txtfield">
                                <section class="p-new-sys__staff__item">
                                    <h5 class="p-new-sys__staff__item__ttl">デビューまでに意識したことは何ですか？</h5>
                                    <p class="p-new-sys__staff__item__txt">デビューしてすぐお客様に支持されるために、土台作りとして似合わせヘアの研究やSNSでの集客戦略、カウンセリングでの提案力などを勉強し日々アップデートしていました。</p>
                                </section>
                                <section class="p-new-sys__staff__item">
                                    <h5 class="p-new-sys__staff__item__ttl">スタイリストになって現場に出てみて最初はどうでしたか？</h5>
                                    <p class="p-new-sys__staff__item__txt">1日1人でもお客様が来て下さる事がとても嬉しいと共に、お客様を呼ぶ大変さをスタイリストになってからより痛感しました。今では１日大体11～13人ほど担当し、最大17人カットした事があります。今後はスピードやクオリティを高めつつリピート率UPを考えて、先を見据えたスタイル提案を積極的に行っていくことの必要性を感じています。</p>
                                </section>
                                <section class="p-new-sys__staff__item">
                                    <h5 class="p-new-sys__staff__item__ttl">デビューしてスタイリストになった今、これからの目標は何ですか？</h5>
                                    <p class="p-new-sys__staff__item__txt">今はサロンワークの他にセミナーの講師活動も始めているのですが、自分の武器でもある「ウルフカット×デザインカラー」をもっと全国で流行らせたいので、今後は地方セミナーや出張美容師みたいな活動もできたら楽しいだろうなと思っています。<br>
同じ美容業界の方や、美容学生の中でも僕のことを知らない人がいないくらい有名になることが目標です。</p>
                                </section>
                            </div>
                        </section>
                    </section>
                </div>
            </section>
            <section class="p-new-rct scroll-anim to-anim-top" id="requirements">
                <div class="center">
                    <p class="p-rct-enttl --pink">RECRUIT</p>
                    <h2 class="p-rct-ttl"><span>新卒採用募集要項</span></h2>
                    <div class="p-rct-form__inner">
                        <table class="p-mid-recruit__tbl">
                            <tr>
                                <th>募集要項</th>
                                <td>AFLOAT新卒採用</td>
                            </tr>
                            <tr>
                                <th>仕事内容</th>
                                <td>仕事内容が入ります。仕事内容が入ります。仕事内容が入ります。仕事内容が入ります。仕事内容が入ります。仕事内容が入ります。</td>
                            </tr>
                            <tr>
                                <th>応募資格・条件</th>
                                <td>高校卒以上/未経験もOK</td>
                            </tr>
                            <tr>
                                <th>募集人数・募集背景</th>
                                <td>若干名</td>
                            </tr>
                            <tr>
                                <th>勤務地</th>
                                <td>AFLOAT　都内店舗（銀座エリア・新宿・渋谷・表参道）</td>
                            </tr>
                            <tr>
                                <th>勤務時間</th>
                                <td>月給 205,000円～220,000円（※想定年収2,665,000円～3,080,000円）<br>
※月給・想定年収は入社初年度を例にしております。<br>
※試用期間は6カ月で、その間の雇用形態は契約社員です。<br>
・その他の条件に変更はありません。<br>
※上記の月給には固定残業手当（7時間52分～17時間47分）が含まれます。</td>
                            </tr>
                            <tr>
                                <th>休日休暇</th>
                                <td>週休2日制<br>
-夏季休暇<br>
-年末年始休暇（3日間）<br>
-年次有給休暇（法定通り）<br>
-慶弔休暇（社内規程あり）</td>
                            </tr>
                            <tr>
                                <th>福利厚生</th>
                                <td>-通勤費支給（月25,000円上限）<br>
-社会保険完備（雇用保険、健康保険、厚生年金）<br>
-労災保険<br>
-定期健康診断（年1回）<br>
-予防接種代補助</td>
                            </tr>
                            <tr>
                                <th>エントリー方法</th>
                                <td>次の2点をご郵送またはメールで送信ください。<br>
・履歴書（要写真貼付、合否連絡受診可能なメールアドレスを記載ください）<br>
・職務経歴書<br><br>
●二郵送の場合<br>
〒107-0062<br>
東京都港区南青山2丁目24-15 青山タワービル10F<br>
株)エターナル：レセプション採用担当宛<br>
TEL:03-6804-6401(平日11:00~18:00)<br><br>
●データの場合<br>
Email: saiyo@afloat.co.jp<br>
※PDFデータで送信ください。証明写真部分については、ipegでの貼付けまたは、別途添付で画像データを併せて送信頂いても大丈夫です。<br>
書類選考後、面接選考にお進み頂く方には採用担当よりご連絡いたします。<br>
※面接選考は本社オフィスまたは店舗にて行います。</td>
                            </tr>
                        </table>
                    </div>
                    <ul class="p-new-rct__btn">
                        <li class="p-new-rct__btn--entry"><a href="https://lit.link/afloatrecruit" target="_blank" rel="noopener noreferrer"><span>エントリー</span></a></li>
                        <li class="p-new-rct__btn--line"><a href=""><span>LINEで応募</span></a></li>
                        <li class="p-new-rct__btn--form"><a href="#entry"><span>フォームから応募</span></a></li>
                    </ul>
                </div>
            </section>
            <section class="p-new-flow scroll-anim to-anim-top" id="flow">
                <div class="center">
                    <p class="p-rct-enttl">SELECTION FLOW</p>
                    <h2 class="p-rct-ttl"><span>内定までの流れ</span></h2>
                </div>
                <div class="p-new-flow__inner">
                    <section class="p-new-flow__sec">
                        <h3 class="p-new-flow__sec__ttl">東京</h3>
                        <ol class="p-new-flow__sec__list">
                            <li><p><span>01</span></p>エントリー</li>
                            <li><p><span>02</span></p>一次面接</li>
                            <li><p><span>03</span></p>サロンワーク試験<br class="pc">(2日間)</li>
                            <li><p><span>04</span></p>最終面接</li>
                            <li><p class="last"><span>05</span></p>内定</li>
                        </ol>
                    </section>
                    <section class="p-new-flow__sec">
                        <h3 class="p-new-flow__sec__ttl">名古屋<br>大阪</h3>
                        <ol class="p-new-flow__sec__list">
                            <li><p><span>01</span></p>エントリー</li>
                            <li><p><span>02</span></p>一次面接</li>
                            <li><p><span>03</span></p>最終面接</li>
                            <li><p class="last"><span>04</span></p>内定</li>
                        </ol>
                    </section>
                </div>
            </section>
            <section class="p-new-tour scroll-anim to-anim-top" id="tour">
                <div class="center">
                    <p class="p-rct-enttl">TOUR &amp; TRAINING</p>
                    <h2 class="p-rct-ttl"><span>サロン見学<small class="pc">・</small><br class="sp">サロン実習</span></h2>
                    <p class="p-rct-txt">ADLOATでは随時サロン見学、<br class="sp">サロン申し込みを<br class="pc">受け付けています</p>
                </div>
                <div class="p-new-tour__inner">
                    <section class="p-new-tour__sec">
                        <h3 class="p-new-ttl">サロン見学</h3>
                        <p class="p-new-tour__enttl"> Tour</p>
                        <p class="p-new-txt">現在、AFLOAT GINZA 店のみで受け付けております。<br class="pc">見学を希望の方は直接お電話にて担当の自川までお問い合わせ下さい。</p>
                        <p class="p-rct-link --mt-xs"><a href="tel:03-5524-0701" target="_blank" rel="noopener noreferrer" class="p-rct-link__btn --tel"><img src="<?php echo APP_ASSETS; ?>img/recruit/new/ico_tel.svg" alt=""><span>03-5524-0701</span></a></p>
                    </section>
                    <section class="p-new-tour__sec">
                        <h3 class="p-new-ttl">サロン実習</h3>
                        <p class="p-new-tour__enttl">Training</p>
                        <p class="p-new-txt">インターンシップをご希望の方はこちら<br>※希望シフトの2週間前までに申請ください</p>
                        <p class="p-rct-link --mt-xs"><a href="https://forms.gle/Rv1Hbj1oMVkK81tF7" target="_blank" rel="noopener noreferrer" class="p-rct-link__btn"><span>実習のお申し込みはこちら</span></a></p>
                    </section>
                </div>
            </section>
            <section class="p-new-sch scroll-anim to-anim-top" id="school">
                <div class="center">
                    <p class="p-rct-enttl">SCHOOL</p>
                    <h2 class="p-rct-ttl"><span>OBOG出身校一覧</span></h2>
                </div>
                <div class="p-new-sch__inner">
                    <ul class="p-new-sch__list">
                        <li class="p-new-sch__item">
                            <button type="button" class="is-active">北海道エリア</button>
                            <p>札幌ビューティーアート専門学校/札幌ベルエポック美容専門学校/札幌ビューティックアカデミー/札幌ビューティー専門学校/北海道美容専門学校/北海道旭川実業高校/北海道理容美容専門学校</p>
                        </li>
                        <li class="p-new-sch__item">
                            <button type="button" class="is-active">東北エリア</button>
                            <p>盛岡ヘアメイク専門学校/青森ヘアアーチスト専門学校/仙台ビューティーアート専門学校/仙台ヘアメイク専門学校/東北ヘアーモード学院/国際ビューティー＆フード大学</p>
                        </li>
                        <li class="p-new-sch__item">
                            <button type="button" class="is-active">関東エリア</button>
                            <p>山野美容専門学校/日本美容専門学校/東京モード学園/東京総合美容専門学校/早稲田美容専門学校/東京文化美容専門学校/東京ベルエポック美容専門学校/東京マックス美容専門学校/東京ビューティーアート専門学校/東京ヘアビューティ専門学校/東京美容専門学校/国際文化理容美容専門学校 国分寺校/拓殖大学/国際文化理容美容専門学校渋谷校/帝京大学/東京都立赤坂高等学校/立正大学/東京愛犬専門学校/東海大学短期大学部/東京ダンス＆アクターズ専門学校/文京学院大学/麻布大学附属渕野辺高等学校/東京女子大学/東京ヘアビューティー専門学校/東京ビューティー＆ブライダル/立命館大学/立教女学院短期大学/ベルエポック美容専門学校/ハリウッド美容専門学校/高山美容専門学校/国際理容美容専門学校/資生堂美容技術専門学校/国際文化理容美容専門学校/エビスビューティーカレッジ/山野美容芸術短期大学/国際文化理容美容専門学校 渋谷校/ハリウッドワールド美容専門学校/関東美容専門学校/窪田理容美容専門学校/タカラ美容専門学校/東洋理容美容専門学校/日本工学院専門学校/ミス・パリ・ビューティ専門学校/中央動物専門学校/エビスビューティカレッジ/国際文化理美容専門学校/駿台外語＆ビジネス専門学校/アポロ美容理容専門学校/ハリウッドビューティ専門学校/マリールイズ美容専門学校/ミス・パリ・ビューティ専門学校/学校法人山野学苑山野美容専門学校/国際ビューティ・ファッション専門学校/山野美容専門学校/真野美容専門学校/赤羽商業高校/専門学校エビスビューティカレッジ山野美容専門学校/横浜ビューティーアート専門学校/岩谷学園アーティスティックB横浜美容専門/横浜ビューティー&ブライダル専門学校/横浜理容美容専門学校/岩崎学園横浜ｆカレッジ/東洋英和女学院大学/岩谷学園B横浜美容専門学校/岩谷学園アーティスティックB横浜美容専門学校/宇都宮美容専門学校/足利デザインビューティー専門学校/センスビューティーカレッジ/高崎ビューティモード専門学校/関東学院大学/組合立千葉美容専門学校/千葉県立二和高等学校/千葉県立市川南高等学校/パリ総合美容専門学校/足利デザインビューティ専門学校/ユニバーサルビューティーカレッジ/パリ総合美容専門学校 柏校/ジェイヘアメイク専門学校/高崎ビューティーモード専門学校/作新学院大学女子短期大学/千葉美容専門学校/埼玉県立三郷高等学校/大宮ビューティー＆ブライダル専門学校/浦和実業学園高等学校/埼玉県立三郷高等学校/大宮ビューティー＆ブライダル専門学校/浦和実業学園高等学校</p>
                        </li>
                        <li class="p-new-sch__item">
                            <button type="button" class="is-active">中部エリア</button>
                            <p>中日美容専門学校/愛知美容専門学校/名古屋美容専門学校/名古屋ビューティーアート専門学校/名古屋モード学園/名古屋綜合美容専門学校/愛媛県美容専門学校/名古屋理容美容専門学校/名古屋観光専門学校/名古屋外語ホテルブライダル専門学校/名古屋女子大学/名古屋市立楠中学校/名古屋美容専門学校学校/中部美容専門学校/至学館高等学校/中部美容専門学校 名古屋校/東海理容美容専門学校/富山県理容美容専門学校/専門学校富山ビューティーカレッジ/国際ビューティモード専門学校/フリーエース美容学校/大垣日本大学高校学校/ルネサンスデザイン・美容専門学校/山梨美容専門学校/松本理容美容専門学校/石川県理容美容専門学校/専門学校金沢美専/国際ビジネス学院 専門学校 金沢美専/静岡新美容専門学校/岐阜美容専門学校/ベルフォートアカデミーオブビューティ</p>
                        </li>
                        <li class="p-new-sch__item">
                            <button type="button" class="is-active">近畿エリア</button>
                            <p>大阪ベルェベル美容専門学校/大阪モード学園/大阪ビューティーアート専門学校/大阪美容専門学校/大阪国際女子短期大学/関西美容専門学校/高津理容美容専門学校/ル・トーア東亜美容専門学校/グラムール美容専門学校/ECCアーティスト美容専門学校/高津アドヴァンスドビューティー専門学校/KANSAIビューティプロ専門学校/ヘアラルト阪神利用美容専門学校/ヴェールルージュ美容専門学校/ルトーア東亜美容専門学校/神戸ベルェベル美容専門学校/和歌山高等学校/奈良美容理容専門学校/ミエ・ヘア・アーチストアカデミー/旭美容専門学校/京都理容美容専修学校/京都理容美容専門学校</p>
                        </li>
                        <li class="p-new-sch__item">
                            <button type="button" class="is-active">中国・四国エリア</button>
                            <p>広島美容専門学校/YICビューティモード専門学校/香川理容美容アカデミー/専門学校徳島穴吹カレッジ/学校法人穴吹学園/穴吹ビューティカレッジ</p>
                        </li>
                        <li class="p-new-sch__item">
                            <button type="button" class="is-active">九州・沖縄エリア</button>
                            <p>福岡美容専門学校/福岡ベルエポック美容専門学校/北九州市立高等理容美容学校/麻生ビューティーカレッジ/専修学校麻生ビューティーカレッジ/モア・ヘアメイクカレッジ/大村美容専門学校/福岡南美容専門学校/宮崎美容専門学校/宮崎サザンビューティ美容専門学校/宮崎サザンビューティー美容専門学校/鹿児島女子大学付属高等学校/琉球美容専修学校/琉美インターナショナルビューティカレッジ/琉美インターナショナルビューティーカレッジ</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="p-new-faq scroll-anim to-anim-top" id="faq">
                <div class="center">
                    <p class="p-rct-enttl">FAQ</p>
                    <h2 class="p-rct-ttl"><span>よくあるご質問</span></h2>
                    <p class="p-rct-txt">よくお寄せいただくご質問と回答を<br class="sp">ご紹介します</p>
                </div>
                <div class="p-new-faq__inner">
                    <ul class="p-new-faq__list">
                        <li class="p-new-faq__item">
                            <button type="button">エントリー締切はいつですか？</button>
                            <p>この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                        </li>
                        <li class="p-new-faq__item">
                            <button type="button">面接はオンラインですか？</button>
                            <p>この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                        </li>
                        <li class="p-new-faq__item">
                            <button type="button">複数の職種に同時にエントリーすることは可能ですか？</button>
                            <p>この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                        </li>
                        <li class="p-new-faq__item">
                            <button type="button">面接や面談の際、服装や持ち物に指定はありますか？</button>
                            <p>この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                        </li>
                        <li class="p-new-faq__item">
                            <button type="button">面接会場について教えてください。</button>
                            <p>この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="sec-form" id="entry">
                <div class="base scroll-anim to-anim-top">
                <div class="center">
                    <p class="p-rct-enttl --pink">FORM</p>
                    <h2 class="p-rct-ttl"><span>応募フォーム</span></h2>
                </div>
                    <form method="post" action="mail.php" enctype="multipart/form-data">
                    <div class="in">
                        <div class="list">
                            <ul class="item col02">
                                <li>
                                    <div class="box">
                                        <p class="ttl"><label>姓（漢字）<span>*</span></label></p>
                                        <div class="input"><input name="姓（漢字）" type="text" placeholder="例）山田"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <p class="ttl"><label>名（漢字）<span>*</span></label></p>
                                        <div class="input"><input name="名（漢字）" type="text" placeholder="例）太郎"></div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="item col02">
                                <li>
                                    <div class="box">
                                        <p class="ttl"><label>姓（カタカナ）<span>*</span></label></p>
                                        <div class="input"><input name="姓（カタカナ）" type="text" placeholder="例）ヤマダ"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="box">
                                        <p class="ttl"><label>名（カタカナ）<span>*</span></label></p>
                                        <div class="input"><input name="名（カタカナ）" type="text" placeholder="例）タロウ"></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="box">
                                <p class="ttl"><label>メールアドレス<span>*</span></label></p>
                                <div class="input"><input name="メールアドレス" type="email" placeholder="例）info@afloat.co.jp"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>自分の顔写真<span>*</span></label>
                                    <small>顔がわかる写真（上半身）を10MB以下でアップロードしてください</small>
                                </p>
                                <div class="input file">
                                    <label>
                                        <input type="file" name="自分の顔写真[]" onchange="previewFile(event,'face')">
                                        <span>ファイルを追加</span>
                                    </label>
                                    <div class="preview" id="preview_face"></div>
                                </div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>成績証明書<span>*</span></label>
                                    <small>写真データまたはスキャンデータをアップロードしてください。学校から「開封無効」として渡されている場合も、開封していただいてOKですので、写真データをアップしてください。</small>
                                </p>
                                <div class="input file">
                                    <label>
                                        <input type="file" name="成績証明書[]" onchange="previewFile(event,'grade')">
                                        <span>ファイルを追加</span>
                                    </label>
                                    <div class="preview" id="preview_grade"></div>
                                </div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>性別<span>*</span></label></p>
                                <div class="input">
                                    <ul class="check">
                                        <li><label><input name="性別" value="男性" type="radio"> 男性</label></li>
                                        <li><label><input name="性別" value="女性" type="radio"> 女性</label></li>
                                        <li><label><input name="性別" value="その他" type="radio"> その他</label></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>生年月日<span>*</span></label></p>
                                <div class="input">
                                    <ul class="item col03">
                                        <li>
                                            <select name="生年月日（年）">
                                                <option value="">-</option>
                                                <option value="1950">1950</option>
                                                <option value="1951">1951</option>
                                                <option value="1952">1952</option>
                                                <option value="1953">1953</option>
                                                <option value="1954">1954</option>
                                                <option value="1955">1955</option>
                                                <option value="1956">1956</option>
                                                <option value="1957">1957</option>
                                                <option value="1958">1958</option>
                                                <option value="1959">1959</option>
                                                <option value="1960">1960</option>
                                                <option value="1961">1961</option>
                                                <option value="1962">1962</option>
                                                <option value="1963">1963</option>
                                                <option value="1964">1964</option>
                                                <option value="1965">1965</option>
                                                <option value="1966">1966</option>
                                                <option value="1967">1967</option>
                                                <option value="1968">1968</option>
                                                <option value="1969">1969</option>
                                                <option value="1970">1970</option>
                                                <option value="1971">1971</option>
                                                <option value="1972">1972</option>
                                                <option value="1973">1973</option>
                                                <option value="1974">1974</option>
                                                <option value="1975">1975</option>
                                                <option value="1976">1976</option>
                                                <option value="1977">1977</option>
                                                <option value="1978">1978</option>
                                                <option value="1979">1979</option>
                                                <option value="1980">1980</option>
                                                <option value="1981">1981</option>
                                                <option value="1982">1982</option>
                                                <option value="1983">1983</option>
                                                <option value="1984">1984</option>
                                                <option value="1985">1985</option>
                                                <option value="1986">1986</option>
                                                <option value="1987">1987</option>
                                                <option value="1988">1988</option>
                                                <option value="1989">1989</option>
                                                <option value="1990">1990</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select>
                                            <span>年</span>
                                        </li>
                                        <li>
                                            <select name="生年月日（月）">
                                                <option value="">-</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            <span>月</span>
                                        </li>
                                        <li>
                                            <select name="生年月日（日）">
                                                <option value="">-</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <span>日</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>年齢<span>*</span></label></p>
                                <div class="input"><input name="年齢" type="text" placeholder="例）19歳"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>携帯番号<span>*</span></label></p>
                                <div class="input"><input name="携帯番号" type="text" placeholder="例）090-0000-0000"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>郵便番号<span>*</span></label></p>
                                <div class="input"><input name="郵便番号" type="text" placeholder="例）107-0062"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>都道府県<span>*</span></label></p>
                                <div class="input">
                                    <ul class="item col03">
                                        <li>
                                            <select name="都道府県">
                                                <option value="">-</option>
                                                <option value="北海道">北海道</option>
                                                <option value="青森県">青森県</option>
                                                <option value="岩手県">岩手県</option>
                                                <option value="宮城県">宮城県</option>
                                                <option value="秋田県">秋田県</option>
                                                <option value="山形県">山形県</option>
                                                <option value="福島県">福島県</option>
                                                <option value="茨城県">茨城県</option>
                                                <option value="栃木県">栃木県</option>
                                                <option value="群馬県">群馬県</option>
                                                <option value="埼玉県">埼玉県</option>
                                                <option value="千葉県">千葉県</option>
                                                <option value="東京都">東京都</option>
                                                <option value="神奈川県">神奈川県</option>
                                                <option value="新潟県">新潟県</option>
                                                <option value="富山県">富山県</option>
                                                <option value="石川県">石川県</option>
                                                <option value="福井県">福井県</option>
                                                <option value="山梨県">山梨県</option>
                                                <option value="長野県">長野県</option>
                                                <option value="岐阜県">岐阜県</option>
                                                <option value="静岡県">静岡県</option>
                                                <option value="愛知県">愛知県</option>
                                                <option value="三重県">三重県</option>
                                                <option value="滋賀県">滋賀県</option>
                                                <option value="京都府">京都府</option>
                                                <option value="大阪府">大阪府</option>
                                                <option value="兵庫県">兵庫県</option>
                                                <option value="奈良県">奈良県</option>
                                                <option value="和歌山県">和歌山県</option>
                                                <option value="鳥取県">鳥取県</option>
                                                <option value="島根県">島根県</option>
                                                <option value="岡山県">岡山県</option>
                                                <option value="広島県">広島県</option>
                                                <option value="山口県">山口県</option>
                                                <option value="徳島県">徳島県</option>
                                                <option value="香川県">香川県</option>
                                                <option value="愛媛県">愛媛県</option>
                                                <option value="高知県">高知県</option>
                                                <option value="福岡県">福岡県</option>
                                                <option value="佐賀県">佐賀県</option>
                                                <option value="長崎県">長崎県</option>
                                                <option value="熊本県">熊本県</option>
                                                <option value="大分県">大分県</option>
                                                <option value="宮崎県">宮崎県</option>
                                                <option value="鹿児島県">鹿児島県</option>
                                                <option value="沖縄県">沖縄県</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>市区町村<span>*</span></label></p>
                                <div class="input"><input name="市区町村" type="text" placeholder="例）港区"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>地域・番地<span>*</span></label></p>
                                <div class="input"><input name="地域・番地" type="text" placeholder="例）南青山2-24-15"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>建物・マンション名</label></p>
                                <div class="input"><input name="建物・マンション名" type="text" placeholder="例）青山タワービル10階"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>専門学校名<span>*</span></label></p>
                                <div class="input"><input name="専門学校名" type="text" placeholder="例）◯◯専門学校"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>卒業（見込み）年月<span>*</span></label></p>
                                <div class="input"><input name="卒業（見込み）年月" type="text" placeholder="例）2024年3月"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>免許・資格</label></p>
                                <div class="input"><input name="免許・資格" type="text" placeholder="例）普通自動車免許など"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>志望動機<span>*</span></label>
                                    <small>入社したいと思った理由をおしえてください</small>
                                </p>
                                <div class="input"><textarea name="志望動機" rows="6"></textarea></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>自己PR<span>*</span></label>
                                    <small>入社後の目標や、学生生活で取り組んできたこと、アルバイト経験など</small>
                                </p>
                                <div class="input"><textarea name="自己PR" rows="6"></textarea></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>特技・趣味・得意科目など<span>*</span></label>
                                    <small>あればご入力ください</small>
                                </p>
                                <div class="input"><textarea name="特技・趣味・得意科目など" rows="6"></textarea></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>第１希望店舗<span>*</span></label></p>
                                <div class="input">
                                    <ul class="check m02">
                                        <li><label><input name="第１希望店舗" value="AFLOAT_GINZA（銀座）" type="radio"> AFLOAT GINZA（銀座）</label></li>
                                        <li><label><input name="第１希望店舗" value="AFLOAT_RUVUA（新宿）" type="radio"> AFLOAT RUVUA（新宿）</label></li>
                                        <li><label><input name="第１希望店舗" value="AFLOAT_D'L（表参道）" type="radio"> AFLOAT D'L（表参道）</label></li>
                                        <li><label><input name="第１希望店舗" value="AFLOAT_Leino（銀座）" type="radio"> AFLOAT Leino（銀座）</label></li>
                                        <li><label><input name="第１希望店舗" value="AFLOAT_Eserle（名古屋）" type="radio"> AFLOAT Eserle（名古屋）</label></li>
                                        <li><label><input name="第１希望店舗" value="AFLOAT_pd+_KOBE（神戸）" type="radio"> AFLOAT pd+ KOBE（神戸）</label></li>
                                        <li><label><input name="第１希望店舗" value="その他" type="radio"> その他</label></li>
                                    </ul>
                                    <input name="第１希望店舗（その他）" type="text">
                                </div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>第２希望店舗<span>*</span></label></p>
                                <div class="input">
                                    <ul class="check m02">
                                        <li><label><input name="第２希望店舗" value="AFLOAT_GINZA（銀座）" type="radio"> AFLOAT GINZA（銀座）</label></li>
                                        <li><label><input name="第２希望店舗" value="AFLOAT_RUVUA（新宿）" type="radio"> AFLOAT RUVUA（新宿）</label></li>
                                        <li><label><input name="第２希望店舗" value="AFLOAT_D'L（表参道）" type="radio"> AFLOAT D'L（表参道）</label></li>
                                        <li><label><input name="第２希望店舗" value="AFLOAT_Leino（銀座）" type="radio"> AFLOAT Leino（銀座）</label></li>
                                        <li><label><input name="第２希望店舗" value="AFLOAT_Eserle（名古屋）" type="radio"> AFLOAT Eserle（名古屋）</label></li>
                                        <li><label><input name="第２希望店舗" value="AFLOAT_pd+_KOBE（神戸）" type="radio"> AFLOAT pd+ KOBE（神戸）</label></li>
                                        <li><label><input name="第２希望店舗" value="その他" type="radio"> その他</label></li>
                                    </ul>
                                    <input name="第２希望店舗（その他）" type="text">
                                </div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>InstagramのID<span>*</span></label>
                                    <small>※選考には一切関係ありません</small>
                                </p>
                                <div class="input"><input name="InstagramのID" type="text" placeholder="例）@afloat_ceo"></div>
                            </div>
                            <div class="box">
                                <p class="ttl"><label>最後にPRしたい作品等あれば1枚アップしてください</label>
                                    <small>例：スタイル写真、得意科目、特技や趣味に関わるものなど<br>
                                        ※動画不可</small>
                                </p>
                                <div class="input file">
                                    <label>
                                        <input type="file" name="PRしたい作品等[]" onchange="previewFile(event,'pr')">
                                        <span>ファイルを追加</span>
                                    </label>
                                    <div class="preview" id="preview_pr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-rct-link"><button type="submit" class="p-rct-link__btn"><span>確認画面へ</span></button></div>
                </form>
                </div>
            </section>
            <?php include($path . 'libs/li-rct-menu.php'); ?>
            <?php include($path . 'libs/li-rct-navi.php'); ?>
        </article>
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script>
        $(function() {
            $('.p-new-faq__item button,.p-new-sch__item button').click(function(){
                $(this).toggleClass('is-active').next('p').slideToggle(300);
                return false;
            });
        });
    </script>

</body>

</html>