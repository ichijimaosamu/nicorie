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
<link rel="stylesheet" href="<?php echo $base_url . '/'; ?>css/work.css" />
</head>
<body id="work" itemscope="itemscope" itemtype="http://schema.org/WebPage">

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

<h1 class="main__logo"><img src="<?php echo $base_url . '/'; ?>img/work.svg" alt="Work"></h1>

<div class="main__box">

<h2 class="work__title">印刷<small>そんじょそこらの印刷屋さんより、知識も経験も豊富です。</small></h2>
<p class="work__text">多くの印刷会社は、変化を嫌います。（特に関西は。）<br>
環境を変えると必ず不具合や不都合が発生するし、設備投資などが伴う場合も多いからです。<br>
幸いにも、私が長く在籍した印刷会社は、新しい事へ取り組む姿勢を評価してくれる環境でしたので、私は常に学び続ける事が出来ました。もちろんトラブルの連続でしたが、これらを解決するプロセスが、さらに強力に私を育ててくれたと思います。理解のある会社で、本当に心から感謝しています。<br>
<br>
これらの経験により、印刷に関することならどんなことでも、必ず、最善の回答をご提供いたします。<br>
<br>
また、小ロットから大ロットまで、それぞれに最適な環境をチョイスし印刷を行いますので、安価でありながら高品質な印刷物をご提供しています。<br>
<br>
ぜひ、どんなことでもお問い合わせください。</p>

<h2 class="work__title">チラシ・ポスター制作<small>キレイとか、カッコイイだけでは効果は望めません。</small></h2>
<p class="work__text">チラシは、手に取り、興味を引きつけ、情報を伝えるもの。<br>
ポスターは、目に止まり、足を止め、情報を伝えるもの。<br>
<br>
それぞれに最適なデザインはもちろん、紙質、フォントサイズ、情報量など、様々な要素を最善の構成で組み上げることで、最大の効果を得ることが出来ます。<br>
<br>
デザインはロジックです。<br>
正解は無いように思われがちですが、確実にあります。<br>
商品の販売促進やイベントの周知拡大など、結果に繋がるためのデザインをご提案いたします。</p>

<h2 class="work__title">会社案内制作<small>スタンダードなご要望なら、ほとんど原稿無しでも作成できます。</small></h2>
<p class="work__text">最初のお打ち合わせは、手ぶらで大丈夫。発注も未定、相談だけで問題ありません。<br>
（電話やメールだけでも結構です。）<br>
予算の目安と、ザックリとしたご要望を伺いましたら、御社HP（お持ちであれば）などの情報からひとまずラフデザイン案を作成いたします。<br>
<br>
2度目のお打ち合わせからが本番です。<br>
この作成しましたラフ案を見ながら、情報の過不足やデザインテイストなどをチェックしていただき、万が一、ご要望のレベルに届かない印象があれば、この時点でお仕事をお断りいただいて結構です。<br>
もちろん費用も一切発生しません。<br>
対応、クオリティ、レスポンス等、厳しくご評価ください。<br>
<br>
無事に受注が確定しましたら、いよいよ具体的な内容を詰めていきます。<br>
基本的には、原稿無しで進めることも可能です。しっかりとお客様の生業を理解把握いたしますので、冒頭の会社説明文の作成や、極端な話、ご要望があれば社長の挨拶も作成いたします。<br>
<br>
こちら主導で進められますから、仮にご担当者様が不慣れであっても全くご心配ありません。<br>
必ず、社長にご満足いただける会社案内になるよう、様々な角度から気を配りながら進めて参ります。<br>
<br>
なお、取材・ライティング・撮影・デザインと、全て一人で行えますから、確実に他社より安価です。</p>

<p class="works__logo"><img src="<?php echo $base_url . '/'; ?>img/logo_green.svg" alt="ニコリエデザインプランニング"></p>

</div>

<p class="main__address">&#12306;654-0162 兵庫県神戸市須磨区神の谷6丁目2-106-204<br>
info@nicorie.com<br>
070-1552-7400<br>
神戸市須磨区・長田区・垂水区・西区・明石市</p>

<!--/main-->
</article>

</main>

<!--/content-->
</div>

<!--/container-->
</div>

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