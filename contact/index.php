<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/base_url.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/base_url.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="keywords" content="印刷,チラシ,パンフレット,会社案内,ホームページ制作,動画制作,のぼり,デザイン事務所,デザインスタジオ,撮影,神戸市">
<meta name="description" content="神戸市のデザインスタジオ、ニコリエデザインプランニング。地域密着型のデザイン事務所を目指しています。">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/common_head.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_head.php');
}
?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/contact.css" />
</head>
<body id="contact" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div id="container">
<!--container-->

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/header.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/header.php');
}
?>

<div id="content">
<!--content-->

<main role="main">

<article class="main">
<!--main-->

<h1 class="main__logo"><img src="<?php echo $base_url . '/'; ?>img/contact.svg" alt="Contact"></h1>

<div class="main__box">
<h2 class="main__box__title">どんなことでも、お気軽にご連絡ください。</h2>

<p class="contact__email"><a href="mailto:info@nicorie.com">info@nicorie.com</a></p>
<p class="contact__tel"><a href="tel:070-1552-7400">070-1552-7400</a></p>

<dl class="address">
<dt class="address__term">地域密着型デザインスタジオ<br>
<img src="<?php echo $base_url . '/'; ?>img/main_box_title.svg" alt="ニコリエデザインプランニング"></dt>
<dd class="address__description">&#12306;654-0162 兵庫県神戸市須磨区神の谷6丁目2-106-204</dd>
</dl>

</div>

<!--/main-->
</article>

</main>

<!--/content-->
</div>

<!--/container-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/footer.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/footer.php');
}
?>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/common_script.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_script.php');
}
?>

<?php if(false) { ?>
<!--sp_menu-->
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once '../common/sp_menu.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/sp_menu.php');
}
?>
<!--/sp_menu-->
<?php } ?>

<script src="<?php echo $base_url . '/'; ?>js/top.js"></script>
</body>
</html>