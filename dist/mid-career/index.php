<?php
$thisPageName = 'mid-career';
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/recruit.min.css" rel="stylesheet">
</head>

<body id="mid-career" class="mid-career">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <div class="pankuzu">
            <ul>
                <li><a href="<?php echo APP_URL; ?>" class="opacity">AFLOAT TOP</a></li>
                <li><a href="<?php echo APP_URL; ?>" class="opacity">RECRUIT</a></li>
                <li>MID CAREER RECRUITMENT</li>
            </ul>
        </div>
        <article class="p-rct-wrap">
            <div class="p-mid-head">
                <p class="p-rct-enttl --pink --lg">MID CAREER RECRUITMENT</p>
                <h1 class="p-rct-ttl--white">中途採用</h1>
            </div>
            <section class="p-mid-recruit scroll-anim to-anim-top">
                <p class="p-rct-enttl">RECRUIT</p>
                <h2 class="p-rct-ttl"><span>募集要項</span></h2>
                <p class="p-rct-txt">AFLOATでは、現在レセプション・<br>バックオフィスのメンバーを募集しています</p>       
                <div class="p-mid-recruit__wrap scroll-anim to-anim-top">
                    <div class="p-mid-recruit__inner">
                        <ul class="p-mid-recruit__tab">
                            <li><button class="p-mid-recruit__tab__btn is-active" data-cate="reception"><span>レセプション</span></button></li>
                            <li><button class="p-mid-recruit__tab__btn" data-cate="backoffice"><span>バックオフィス</span></button></li>
                        </ul>
                        <div class="p-mid-recruit__sec" id="reception">
                            <table class="p-mid-recruit__tbl">
                                <tr>
                                    <th>募集要項</th>
                                    <td>AFLOAT中途採用/レセプション</td>
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
                        <div class="p-mid-recruit__sec" id="backoffice" style="display:none;">
                            <table class="p-mid-recruit__tbl">
                                <tr>
                                    <th>募集要項</th>
                                    <td>AFLOAT中途採用/バックオフィス</td>
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
                    </div>
                </div>
            </section>
            <section class="p-rct-form">
                <div class="scroll-anim to-anim-top">
                    <p class="p-rct-enttl --pink">FORM</p>
                    <h2 class="p-rct-ttl"><span>応募フォーム</span></h2>
                    <form>
                        <div class="p-rct-form__inner">
                        </div>
                        <div class="p-rct-link"><button type="submit" class="p-rct-link__btn"><span>応募する</span></button></div>
                    </form>
                </div>
            </section>
            <?php include($path . 'libs/li-rct-menu.php'); ?>
            <?php include($path . 'libs/li-rct-navi.php'); ?>
        </article>
    </main>

    <?php include($path . 'libs/footer.php'); ?>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.p-mid-recruit__tab__btn');
    const posts = document.querySelectorAll('.p-mid-recruit__sec');

    const urlParams = new URLSearchParams(window.location.search);
    const categoryParam = urlParams.get('category');

    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            const category = button.getAttribute('data-cate');

            buttons.forEach(function(btn) {
                btn.classList.remove('is-active');
            });

            button.classList.add('is-active');

            posts.forEach(function(post) {
                post.style.display = 'none';
            });

            const filteredPosts = document.querySelector('#' + category);
            filteredPosts.style.display = 'block';

            const url = new URL(window.location.href);
            url.searchParams.set('category', category);
            window.history.pushState({}, '', url);
        });
    });

    if (categoryParam) {
        const activeButton = document.querySelector(`[data-cate="${categoryParam}"]`);
        if (activeButton) {
            activeButton.click();
        }
    } else {
        buttons[0].click();
    }
});

    </script>
</body>

</html>