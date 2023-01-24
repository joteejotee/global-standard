<?php get_header(); ?>
<?php
/*
Template Name: download
*/
?>
<main class="main">
  <div class="page-about-top page-download-top">
    <div class="about-top-titles">
      <h1 class="about-top-title contact-top-title">DOWNLOAD</h1>
      <p class="about-top-sub-title">資料ダウンロード</p>
    </div>
  </div>
  <!-- /.page-about-top -->
  <section class="page-download">
    <div class="page-download-inner">
      <div class="page-download-left">
        <p class="page-download-left-ttl">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</p>
        <img src="<?php echo get_template_directory_uri() ?>/img/download/pamphlet.png" alt="" class="page-download-left-img">
        <p class="page-download-left-text-up">急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。 ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。</p>
        <p class="page-download-left-text-down">英語に苦手意識のある方でもご安心ください。 ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。 まずはこちらの資料をごらんください。</p>
      </div>
      <div class="page-download-right">
        <h3 class="page-contact-ttl page-download-ttl">資料ダウンロード</h3>
        <!-- ここからコピペ -->
        <form class="contact-form" action="/">
          <dl class="contact-form__dl">
            <!-- 会社名 -->
            <dt class="contact-form__label">
              <label for="your-company" class="contact-form__label-label">会社名</label>
            </dt>
            <dd class="contact-form__input">
              <input class="contact-form__input-input" id="your-company" type="text" placeholder="例）○○株式会社" />
            </dd>
            <!-- 部署 -->
            <dt class="contact-form__label">
              <label for="your-company" class="contact-form__label-label">部署</label>
            </dt>
            <dd class="contact-form__input">
              <input class="contact-form__input-input" id="your-company" type="text" placeholder="例）人事部" />
            </dd>
            <!-- お名前 -->
            <dt class="contact-form__label">
              <label for="your-name" class="contact-form__label-label">お名前</label>
              <p class="required">必須</p>
            </dt>
            <dd class="contact-form__input">
              <input class="contact-form__input-input" id="your-name" type="text" placeholder="例）鈴木　一郎" />
            </dd>
            <!-- お名前（フリガナ） -->
            <dt class="contact-form__label">
              <label for="your-ruby" class="contact-form__label-label">お名前（フリガナ）</label>
              <p class="required">必須</p>
            </dt>
            <dd class="contact-form__input">
              <input class="contact-form__input-input" id="your-ruby" type="text" placeholder="例）スズキ　イチロウ" />
            </dd>
            <!-- メールアドレス -->
            <dt class="contact-form__label">
              <label for="your-email" class="contact-form__label-label">メールアドレス</label>
              <p class="required">必須</p>
            </dt>
            <dd class="contact-form__input">
              <input class="contact-form__input-input" id="your-email" type="email" placeholder="例）info@example.com" inputmode="email" />
            </dd>
          </dl>
          <div class="contact-form__check">
            <label>
              <input type="checkbox" name="your-radio" />
              <span><a href="" class="js-open-button" data-target=".target-modal">個人情報保護方針</a>に同意します。</span>
            </label>
          </div>
          <div class="contact-form__button">
            <input type="submit" value="資料をダウンロードする" />
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
<!-- /.main -->
<?php get_footer(); ?>