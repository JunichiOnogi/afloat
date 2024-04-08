// JavaScript Document

// Gナビ
$(function () {
  $('.nav-toggle').click(function () {
    $(this).toggleClass('opened');
    $('#gnav').toggleClass("active");
  });
  $('#gnav ul.navi li a').click(function () {
    $('.nav-toggle').toggleClass("opened");
    $('#gnav').toggleClass("active");
  });
  var icoInsta = $('header.white .ico .insta');
  var icoTiktok = $('header.white .ico .tiktok');
  var icoYoutube = $('header.white .ico .youtube');
  var icoCart = $('header.white .ico .cart');
  var icoInstaRep = icoInsta.find('[data-replace]');
  var icoTiktokRep = icoTiktok.find('[data-replace]');
  var icoYoutubeRep = icoYoutube.find('[data-replace]');
  var icoCartRep = icoCart.find('[data-replace]');
  var defaultSrcInsta = icoInstaRep.attr('src');
  var defaultSrcTiktok = icoTiktokRep.attr('src');
  var defaultSrcYoutube = icoYoutubeRep.attr('src');
  var defaultSrcCart = icoCartRep.attr('src');
  icoInstaRep.attr('src', icoInstaRep.data('replace'));
  icoTiktokRep.attr('src', icoTiktokRep.data('replace'));
  icoYoutubeRep.attr('src', icoYoutubeRep.data('replace'));
  icoCartRep.attr('src', icoCartRep.data('replace'));
  $(window).scroll(function () {
    if ($(this).scrollTop() > 600) {
      $('header.scroll').removeClass('white');
    } else {
      $('header.scroll').addClass('white');
    }
    if ($(window).scrollTop() > 600) {
      icoInstaRep.attr('src', defaultSrcInsta);
      icoTiktokRep.attr('src', defaultSrcTiktok);
      icoYoutubeRep.attr('src', defaultSrcYoutube);
      icoCartRep.attr('src', defaultSrcCart);
    } else {
      icoInstaRep.attr('src', icoInstaRep.data('replace'));
      icoTiktokRep.attr('src', icoTiktokRep.data('replace'));
      icoYoutubeRep.attr('src', icoYoutubeRep.data('replace'));
      icoCartRep.attr('src', icoCartRep.data('replace'));
    }
  });

  //スムーススクロール
  var headerHight = $('header').outerHeight();
  $('a[href^="#"]' + 'a:not(.non-scroll)').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHight;
    $("html, body").animate({ scrollTop: position }, 800, "swing");
    return false;
  });

  // inview
  $('.scroll-anim').on('inview', function (isInView, visible) {
    console.log(isInView, visible);
    if (isInView) {
      $(this).addClass('active');
    }
  });

  // ストーカーボタン
  var btnStalker = $('.btn-stalker,.btn-stalker-entry');
  var startPos = 0;
  $(window).scroll(function () {
    var currentPos = $(this).scrollTop();
    if (currentPos > startPos) {
      btnStalker.addClass("scroll");
    } else {
      btnStalker.removeClass("scroll");
    }
    startPos = currentPos;
  });

  // matchHeight
  $('.matchHeight').matchHeight();
});

//スタッフ一覧MOREボタン
$(".sec-staff .archive .btn-more").click(function () {
  $(this).prev().find(".hide").animate(
    { height: "toggle", opacity: "toggle" },
    "nomal"
  );
  $(this).css("display", "none");
});

// テキストコピー、右クリック禁止
window.onload = function(){
  document.body.oncopy = function(){return false;}
  document.body.oncontextmenu = function(){return false;}
}

// リクルートお問い合わせフォームファイルの名前プレビュー
function previewFile(event, targetId) {
  var file = event.target.files[0];
  var fileName = file.name;
  // var pFile = document.createElement('p');
  var preview = document.getElementById("preview_" + targetId);
  const fr = new FileReader();
  fr.onload = function (e) {
    preview.innerHTML = fileName;
  };
  fr.readAsDataURL(file);
}

function recruitFormCheck(){
	if(document.getElementById("requireFace").value == ""){
		window.alert('顔写真をアップしてください');
		return false;
	}
	else if(document.getElementById("requireGrade").value == ""){
		window.alert('成績証明書をアップしてください');
		return false;
	}
	else{
		return true;
	}
}