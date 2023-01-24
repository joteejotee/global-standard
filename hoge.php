<!-- 最後に消すphpファイル -->

<!-- for文にしてみました -->
<?php if (have_posts()) : for ($i = 0; $i <= 2; ++$i && have_posts()) : the_post(); ?>
    <!-- 繰り返し処理する内容 -->
  <?php endfor; ?>
<?php else : ?>
  <p>記事がありません。</p>
<?php endif; ?>

<nav class="drawer-nav header-nav">
  <ul class="drawer-menu header-nav-list">
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="<?php echo home_url(); ?>">トップ</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="<?php echo get_template_directory_uri(); ?>/about.php">当社について</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="<?php echo get_template_directory_uri(); ?>/service.php">サービス</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="<?php echo get_template_directory_uri(); ?>/archive-case.php">導入事例</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="<?php echo get_template_directory_uri(); ?>/archive.php">お知らせ</a>
    </li>
    <li class="header-nav-download">
      <a class="header-nav-download-link" href="<?php echo get_template_directory_uri(); ?>/download.php">資料ダウンロード</a>
    </li>
    <li class="header-nav-contact">
      <a class="header-nav-contact-link" href="<?php echo get_template_directory_uri(); ?>/contact.php">お問い合わせ</a>
    </li>
  </ul>
</nav>

<nav class="drawer-nav header-nav">
  <ul class="drawer-menu header-nav-list">
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="#">トップ</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="#">当社について</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="#">サービス</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="#">導入事例</a>
    </li>
    <li class="header-nav-item">
      <a class="header-nav-item-link" href="#">お知らせ</a>
    </li>
    <li class="header-nav-download">
      <a class="header-nav-download-link" href="#">資料ダウンロード</a>
    </li>
    <li class="header-nav-contact">
      <a class="header-nav-contact-link" href="#">お問い合わせ</a>
    </li>
  </ul>
</nav>


<?php
if (mb_strlen($post->post_title) > 20) {
  $title = mb_substr($post->post_title, 0, 20);
  echo $title . '...';
} else {
  echo $post->post_title;
}
?>