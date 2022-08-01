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
<meta name="keywords" content="印刷,チラシ,パンフレット,会社案内,ホームページ制作,動画制作,のぼり,デザイン事務所,デザインスタジオ,撮影,神戸市">
<meta name="description" content="神戸市のデザインスタジオ、ニコリエデザインプランニング。地域密着型のデザイン事務所を目指しています。">
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

<h1 class="main__logo"><img src="<?php echo $base_url . '/'; ?>img/logo.svg" alt="ニコリエデザインプランニング"></h1>

<section class="main__box">
<h2 class="main__box__title">地域密着型デザインスタジオ<br>
<img src="<?php echo $base_url . '/'; ?>img/main_box_title.svg" alt="ニコリエデザインプランニング"></h2>

<ul class="news">
<li class="news__item">
<dl>
<dt class="news__item__date">2022.06.15</dt>
<dd class="news__item__description">神戸御影に、サテライトオフィスが出来ました！<br>
お洒落な空間で、15人程度の会議も可能です。<a href="">詳しくはこちら</a></dd>
</dl>
</li>
<li class="news__item">
<dl>
<dt class="news__item__date">2022.06.10</dt>
<dd class="news__item__description">カセットテープやDAT音源などのデータ変換も承ります。<br>
音響のプロが完璧に調整して驚きの安価です。</dd>
</dl>
</li>
<li class="news__item">
<dl>
<dt class="news__item__date">2022.06.05</dt>
<dd class="news__item__description">カセットテープやDAT音源などのデータ変換も承ります。<br>
音響のプロが完璧に調整して驚きの安価です。</dd>
</dl>
</li>
</ul>

<div class="works">
<h3 class="works__title">About Works</h3>

<p class="works__lead">印刷会社で培った取材、撮影、グラフィックデザイン。<br>
デザインブランドの運営で培った企画、イベント、プロダクトデザイン。<br>
アートディレクターとして培ったチームでの様々な企画制作。<br>
これらを昇華させ、強力なネットワークを駆使しあらゆるご要望にお応えします。</p>

<ul class="works__list">
<li class="works__item">
<dl>
<dt class="works__item__term">印刷</dt>
<dd class="works__item__description">長年培ってきた印刷知識、編集技術、ネットワークを活用し、どんな状態のデータでも最適な印刷データに再構築し、大ロットから小ロットまで安価にお届けいたします。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">チラシ・ポスター</dt>
<dd class="works__item__description">思わず、手に取りたくなるチラシ。ふと、足を止めてしまうポスター。キャッチーでありながらも、きちんと内容が伝わるものを制作します。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">会社案内</dt>
<dd class="works__item__description">まず、御社の事業内容をしっかりと伺い、その魅力を伝えるために必要な媒体、仕様、ボリュームをご提案します。ぜひ原稿作りからお手伝いさせてください。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">カタログ</dt>
<dd class="works__item__description">明瞭なカテゴライズ、検索性の高いレイアウトとページネーションで、美しく読みやすい編集をいたします。商品の魅力をスマートに伝えられます。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">ロゴマーク制作</dt>
<dd class="works__item__description">ロゴマークに最も大切なことは、企業コンセプトをきちんと表現し、創業時の想いやビジョンが伝わってくる形かどうかということ。納得がいくまで作り直しいたします。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">キャラクター制作</dt>
<dd class="works__item__description">根強い人気のゆるキャラから、個性あふれる奇抜なデザインのものまで、お望みのタイプに合ったイラストレーターが制作いたします。強力な広告塔をぜひ手に入れてください。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">ノベルティ</dt>
<dd class="works__item__description">需要の高い除菌ウェットティッシュやマスクをはじめ、イベント時の配布に最適なうちわ、付箋、カレンダー、メモ帳など、オリジナルグッズの製作を、多彩なアイテムからご提案します。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">商品パッケージ</dt>
<dd class="works__item__description">どんなに良い商品でも、売り場でその魅力が伝わらないとお客様の手に届きません。限られたコストの中で最大限のパフォーマンスが出せる仕様をご提案いたします。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">展示会サポート</dt>
<dd class="works__item__description">ブースデザインからパネル、バナー、POP制作など、トータルにプロデュースいたします。特に、1〜2コマが得意です。パーツ1点から製作いたしますので、ぜひご相談ください。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">ブランドプロデュース</dt>
<dd class="works__item__description">ブランド運営はスタートがとても大切です。しっかりしたブランディングを構築し、ぶれない運営を確立していくためのトータルのお手伝いをいたします。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">のぼり・横断幕</dt>
<dd class="works__item__description">工場直販価格で、圧倒的なコストパフォーマンス！ 1枚から承ります！ポップなデザインからクールなデザインなど、幅広くお任せいただけます。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">ホームページ制作</dt>
<dd class="works__item__description">今はスマホで全てが完結できる時代です。スマホに最適化し、洗練されたデザインのHPを制作しませんか？お手軽なプランから様々なニーズに合わせて制作いたします。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">動画制作</dt>
<dd class="works__item__description">YouTubeがテレビの存在を脅かす昨今、もはや会社PRなどは動画制作が当たり前。YouTubeへのアップまでサポートします。オンラインライブ配信もお任せください。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">看板制作</dt>
<dd class="works__item__description">各種屋外看板の制作も安価に承ります。掲出の際に必要な各種申請書の役所への提出も代行できますので、トータルに安心してお任せいただけます。</dd>
</dl>
</li>
<li class="works__item">
<dl>
<dt class="works__item__term">トラックマーキング</dt>
<dd class="works__item__description">トラックや社用車などに、社名等をデザインし施工します。かなり珍しい「差し替え式」も安価に施工できます。ぜひ一度ご相談ください。</dd>
</dl>
</li>
</ul>

<p class="works__text">And the various requests</p>

<p class="works__logo"><img src="<?php echo $base_url . '/'; ?>img/logo_green.svg" alt="ニコリエデザインプランニング"></p>

</div>

</section>

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
	include_once 'common/common_script.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/common_script.php');
}
?>

<!--sp_menu-->
<?php
if ($_SERVER["HTTP_HOST"] == 'localhost') {
	include_once 'common/sp_menu.php';
} else {
	include_once ($_SERVER['DOCUMENT_ROOT'] .'/common/sp_menu.php');
}
?>
<!--/sp_menu-->

<div class="start">
<p class="start__logo"><img src="<?php echo $base_url . '/'; ?>img/logo.svg" alt="ニコリエデザインプランニング"></p>
</div>

<script src="<?php echo $base_url . '/'; ?>js/top.js"></script>
</body>
</html>