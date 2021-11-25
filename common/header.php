<?php $URI = $_SERVER["REQUEST_URI"]; ?>
<header class="header <?php if(strpos($URI,'work') !== false || strpos($URI,'profile') !== false || strpos($URI,'product') !== false || strpos($URI,'contact') !== false) { echo '-lower'; } ?>" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<?php if(strpos($URI,'work') !== false || strpos($URI,'profile') !== false || strpos($URI,'product') !== false || strpos($URI,'contact') !== false) { ?>
<p class="header__logo"><a href="<?php echo $base_url . '/'; ?>"><img src="../img/logo_green.svg" alt="nicorie"></a></p>
<?php } ?>
<nav class="header__nav nav">
<ul class="header__nav__list">
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>"><span>Home</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>work/" class="-noready"><span>Work</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>profile/" class="-noready"><span>Profile</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>product/" class="-noready"><span>Product</span></a></li>
<li class="header__nav__item"><a href="<?php echo $base_url . '/'; ?>contact/"><span>Contact</span></a></li>
</ul>
</header>