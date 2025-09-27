<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">

  <!-- Top bar with login / signup -->
  <div class="header-top">
   <div class="header-container">
    <div class="auth-buttons">
      <?php if ( is_user_logged_in() ) : 
        $current_user = wp_get_current_user(); ?>
        <a class="btn btn--ghost" href="<?php echo esc_url( admin_url( 'profile.php' ) ); ?>">
          <?php echo esc_html( $current_user->display_name ); ?>
        </a>
        <a class="btn btn--primary" href="<?php echo esc_url( wp_logout_url( home_url( '/' ) ) ); ?>">
          로그아웃
        </a>
      <?php else : ?>
        <a class="btn btn--ghost" href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>">
          로그인
        </a>
        <?php if ( get_option( 'users_can_register' ) ) : ?>
          <a class="btn btn--primary" href="<?php echo esc_url( wp_registration_url() ); ?>">
            회원가입
          </a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
   </div> 
  </div>

  <!-- Main header row -->
  <div class="header-main">
    <div class="site-logo">
      <a href="<?php echo esc_url( home_url('/') ); ?>">
        <img src="http://test-kegm.org/wp-content/uploads/2025/09/Screenshot-2025-09-09-at-3.22.46-PM.png" alt="<?php bloginfo('name'); ?>">
      </a>
    </div>

  <nav class="nav" aria-label="Primary">
    <ul class="menu">
      <li><a href="/about">교회소개</a></li>
      <li><a href="/worship">예배안내</a></li>
      <li><a href="/news">교회소식</a></li>
      <li><a href="/departments">교회내 부서</a></li>
      <li><a href="/board">부서게시판</a></li>
    </ul>

    <!-- 공통 메가패널 -->
    <div class="mega-panel" aria-hidden="true">
      <div class="mega-inner">
        <section>
          <ul>
            <li><a href="/about">교회소개</a></li>
            <li><a href="/about/satzung">법인체 정관</a></li>
            <li><a href="/about/rules">교회 회칙</a></li>
            <li><a href="/about/history">교회 연혁</a></li>
            <li><a href="/about/logo">교회 이름과 로고</a></li>
            <li><a href="/about/staff">교역자</a></li>
            <li><a href="/about/contact">연락처</a></li>
            <li><a href="/about/map">오시는 길</a></li>
          </ul>
        </section>

        <section>
          <ul>
            <li><a href="/worship">예배안내</a></li>
            <li><a href="/events">행사안내</a></li>
            <li><a href="/worship/sermons">설교</a></li>
          </ul>
        </section>

        <section>
          <ul>
            <li><a href="/news">교회소식</a></li>
            <li><a href="/news/bulletin">교회주보</a></li>
            <li><a href="/news/magazine">월간지</a></li>
          </ul>
        </section>

        <section>
          <ul>
            <li><a href="/departments">교회내 부서</a></li>
            <li><a href="/departments/education">교육부 안내</a></li>
            <li><a href="/departments/music">음악부 안내</a></li>
            <li><a href="/departments/selfgoverning">자치회 안내</a></li>
          </ul>
        </section>

        <section>
          <ul>
            <li><a href="/board/">부서게시판</a></li>
            <li><a href="/board/kids">유치부 게시판</a></li>
            <li><a href="/board/children">소년부 게시판</a></li>
            <li><a href="/board/youth">청소년부 게시판</a></li>
          </ul>
        </section>
      </div>
    </div>
  </nav>

</header>

<main id="primary" class="site-main">