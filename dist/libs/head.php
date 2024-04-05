<!DOCTYPE html>
<html lang="ja" class="<?php echo $html_class; ?>">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-54JX9CX');</script>
<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<?php
$current_url = 'http'.(!empty($_SERVER['HTTPS']) ? 's' : '').'://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
?>
<script src="https://cdn.jsdelivr.net/npm/viewport-extra@1.0.2/dist/viewport-extra.min.js"></script>

<title></title>

<!--css-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/layout/reset.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/layout/base.min.css" rel="stylesheet">
<!--/css-->

<link rel="icon" href="<?php echo APP_ASSETS; ?>img/common/favicon.png">
<link rel="shortcut icon" href="<?php echo APP_ASSETS; ?>img/common/favicon.png">
<link rel="apple-touch-icon" href="<?php echo APP_ASSETS; ?>img/common/favicon.png">
<meta name="apple-mobile-web-app-title" content="AFLOAT">

