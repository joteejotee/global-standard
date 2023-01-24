<?php get_header(); ?>
<?php
/*
Template Name: contact
*/
?>
<main class="main">
  <div class="page-about-top page-contact-top">
    <div class="about-top-titles">
      <h1 class="about-top-title contact-top-title">CONTACT</h1>
      <p class="about-top-sub-title">お問い合わせ</p>
    </div>
  </div>
  <!-- /.page-about-top -->
  <section class="page-contact">
    <div class="page-contact-inner">
      <p class="page-contact-text">研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br>2日以内に担当者からメールにてご連絡いたします。</p>
      <h3 class="page-contact-ttl">お問い合わせ</h3>

      <!-- ここからコピペ -->
      <form class="contact-form" action="/">
        <dl class="contact-form__dl">
          <!-- 会社名 -->
          <dt class="contact-form__label">
            <label for="your-company" class="contact-form__label-label">会社名</label>
            <p class="required">必須</p>
          </dt>
          <dd class="contact-form__input">
            <input class="contact-form__input-input" id="your-company" type="text" placeholder="例）○○株式会社" />
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
          <!-- 電話番号 -->
          <dt class="contact-form__label">
            <label for="your-tel" class="contact-form__label-label">電話番号</label>
            <p class="required">必須</p>
          </dt>
          <dd class="contact-form__input">
            <input class="contact-form__input-input" id="your-tel" type="tel" placeholder="例）0312345678" inputmode="tel" />
          </dd>
          <!-- メールアドレス -->
          <dt class="contact-form__label">
            <label for="your-email" class="contact-form__label-label">メールアドレス</label>
            <p class="required">必須</p>
          </dt>
          <dd class="contact-form__input">
            <input class="contact-form__input-input" id="your-email" type="email" placeholder="例）info@example.com" inputmode="email" />
          </dd>
          <!-- ご用件 -->
          <dt class="contact-form__label">
            <label for="your-subject" class="contact-form__label-label">ご用件</label>
            <p class="required">必須</p>
          </dt>
          <dd class="contact-form__input">
            <select class="contact-form__input-select" name="your-subject" id="your-subject">
              <option value="" disabled selected style="display:none;">ご選択ください</option>
              <option value="">セレクト1</option>
              <option value="">セレクト2</option>
              <option value="">セレクト3</option>
            </select>
          </dd>
          <!-- ご用件の詳細 -->
          <dt class="contact-form__label">
            <label for="your-message" class="contact-form__label-label">ご用件の詳細</label>
            <p class="required">必須</p>
          </dt>
          <dd class="contact-form__input">
            <textarea class="contact-form__input-text" name="your-message" id="your-message" placeholder="お問い合わせを入力してください"></textarea>
          </dd>
        </dl>
        <div class="contact-form__check">
          <label>
            <input type="checkbox" name="your-radio" />
            <span><a href="" class="js-open-button" data-target=".target-modal">個人情報保護方針</a>に同意します。</span>
          </label>
        </div>
        <div class="contact-form__button">
          <input type="submit" value="送信" />
        </div>
      </form>
    </div>
  </section>
  <!-- ここまでコピペ -->
</main>
<!-- /.main -->
<?php get_footer(); ?>