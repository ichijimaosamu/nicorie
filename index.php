<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/base_url.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/base_url.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="keywords" content="web,デザイン,制作,ニコリエ,地域密着型">
<meta name="description" content="地域密着型デザインスタジオ ニコリエデザインプランニング">
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/common_head.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_head.php');
}
?>
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/top.css" />
</head>
<body id="top" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<div id="container">
<!--container-->

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/header.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/header.php');
}
?>

<div id="content">
<!--content-->

<main role="main">

<article class="main">
<!--main-->

<div class="main__box">
<p class="main__logo"><img src="<?php echo $base_url . '/'; ?>img/logo.png" class="sp_none" alt="地域密着型デザインスタジオ ニコリエデザインプランニング"><img src="<?php echo $base_url . '/'; ?>img/logo_sp.png" class="pc_none" alt="地域密着型デザインスタジオ ニコリエデザインプランニング"></p>
</div>

<!--/main-->
</article>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/side.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/side.php');
}
?>

</main>

<!--/content-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/footer.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/footer.php');
}
?>

<!--/container-->
</div>

<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/common_script.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_script.php');
}
?>

<?php if(false) { ?>
<!--sp_menu-->
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/sp_menu.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/sp_menu.php');
}
?>
<!--/sp_menu-->
<?php } ?>

<script src="<?php echo $base_url . '/'; ?>js/top.js"></script>
</body>
</html>