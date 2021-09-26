<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body <?php body_class();?>>
    <div class="u-all-wrap">
      
      <!--header-->
      <header class="l-top-header u-another-background u-padding4">
          <div class="u-js-nav-wrapper1">
            <nav>
              <ul class="c-flex-nav u-padding5">
                <li class="u-js-nav-item"><a class="c-flex-nav__link change1" href="<?php echo esc_url(home_url('/'));?>">Top</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change2" href="<?php echo esc_url(home_url('/'));?>#search">Search</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change3" href="<?php echo esc_url(home_url('/'));?>#function">Function</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change4" href="<?php echo esc_url(home_url('case'));?>">Case</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change5" href="<?php echo esc_url(home_url('security'));?>">Security</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change7" href="<?php echo esc_url(home_url('price'));?>">Price</a></li>
                <li class="u-js-nav-item u-another-header-pc">
                  <p class="c-flex-nav__link change8">Option ▼</p>
                  <ul class="c-flex-nav__mouseover">
                    <li><a href="<?php echo home_url('fos');?>">F・O・S</a></li>
                    <li><a href="<?php echo home_url('online');?>">オリジナルワーク設計</a></li>
                    <li><a href="<?php echo home_url('upcomerkit');?>">Upcomer kit</a></li>
                  </ul>
                </li>
                <li class="u-js-nav-item u-another-header-sp"><a class="c-flex-nav__link" href="<?php echo esc_url(home_url('fos'));?>">F・O・S</a></li>
                <li class="u-js-nav-item u-another-header-sp"><a class="c-flex-nav__link" href="<?php echo esc_url(home_url('online'));?>">オリジナルワーク設計</a></li>
                <li class="u-js-nav-item u-another-header-sp"><a class="c-flex-nav__link" href="<?php echo esc_url(home_url('upcomerkit'));?>">Upcomer kit</a></li>
              </ul>
            </nav>
          </div>
          <div class="u-js-nav-wrapper">
            <nav class="u-js-header-nav">
              <ul class="c-flex-nav u-padding5">
                <li class="u-js-nav-item"><a class="c-flex-nav__link change1" href="<?php echo esc_url(home_url('/'));?>">Top</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change2" href="<?php echo esc_url(home_url('/'));?>#search">Search</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change3" href="<?php echo esc_url(home_url('/'));?>#function">Function</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change4" href="<?php echo esc_url(home_url('case'));?>">Case</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change5" href="<?php echo esc_url(home_url('security'));?>">Security</a></li>
                <li class="u-js-nav-item"><a class="c-flex-nav__link change7" href="<?php echo esc_url(home_url('price'));?>">Price</a></li>
                <li class="u-js-nav-item">
                  <p class="c-flex-nav__link change8">Option ▼</p>
                  <ul class="c-flex-nav__mouseover">
                    <li><a href="<?php echo esc_url(home_url('fos'));?>">F・O・S</a></li>
                    <li><a href="<?php echo esc_url(home_url('online'));?>">オリジナルワーク設計</a></li>
                    <li><a href="<?php echo esc_url(home_url('upcomerkit'));?>">Upcomer kit</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>

          <!--ハンバーガーメニュー-->
          <div class="u-js-burger-btn">
            <span class="u-js-bar u-js-bar__top"></span>
            <span class="u-js-bar u-js-bar__mid"></span>
            <span class="u-js-bar u-js-bar__bottom"></span>
          </div>

      </header>