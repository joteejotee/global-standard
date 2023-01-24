<?php get_header(); ?>
<div class="page-news-outer">
  <div class="page-news-top">
    <div class="news-top-titles">
      <h1 class="news-top-title">CASE STUDY</h1>
      <p class="news-top-sub-title">導入事例</p>
    </div>
  </div>
  <!-- /.page-news-top -->
  <section class="page-news">
    <div class="page-news-inner">
      <main class="page-news-left">
        <div class="page-news-left-article-categories">
          <div class="page-news-left-article-cat">
            <?php $term = get_the_terms(get_the_ID(), 'case_category');
            echo $term[0]->name;
            ?>
          </div>
          <div class="page-news-left-article-date">2021.01.01</div>
        </div>
        <div class="single-news-left-ttl"><?php the_title(); ?>&nbsp;様</div>
        <!-- <div class="single-news-left-ttl"><?php echo get_post_meta($post->ID, '会社名', true); ?>&nbsp;様</div> -->
        <!-- <div class="single-news-left-ttl">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自立できる思考力・適応力を醸成する起爆剤研修。</div> -->
        <img src="/img/05-single-news/single.jpg" alt="" class="single-news-left-img">
        <p class="single-news-left-h2 h3">研修の目的</p>
        <p class="single-news-left-text"><?php echo get_post_meta($post->ID, '研修の目的', true); ?></p>
        <!-- <p class="single-news-left-text">ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。</p> -->
        <p class="single-news-left-h3 h3">選んだ理由</p>
        <p class="single-news-left-text"><?php echo get_post_meta($post->ID, '選んだ理由', true); ?></p>
        <p class="single-news-left-h4 h3">導入後の成果・効果</p>
        <p class="single-news-left-text"><?php echo get_post_meta($post->ID, '導入後の成果・効果', true); ?></p>
      </main>
      <!-- /.page-news-left -->
      <aside class="page-news-right">
        <div class="page-news-right-news">
          <p class="page-news-right-news-ttl">新着記事</p>
          <article class="page-news-right-article">
            <a href="#" class="page-news-right-article-link">
              <img src="/img/04-news/icatch-news.jpg" alt="" class="page-news-right-article-img">
              <div class="page-news-right-article-texts">
                <div class="page-news-right-article-categories">
                  <div class="page-news-right-article-cat">カテゴリ</div>
                  <div class="page-news-right-article-date">2021.01.01</div>
                </div>
                <div class="page-news-right-article-text">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</div>
              </div>
            </a>
          </article>
          <article class="page-news-right-article">
            <a href="#" class="page-news-right-article-link">
              <img src="/img/04-news/icatch-news.jpg" alt="" class="page-news-right-article-img">
              <div class="page-news-right-article-texts">
                <div class="page-news-right-article-categories">
                  <div class="page-news-right-article-cat">カテゴリ</div>
                  <div class="page-news-right-article-date">2021.01.01</div>
                </div>
                <div class="page-news-right-article-text">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</div>
              </div>
            </a>
          </article>
          <article class="page-news-right-article">
            <a href="#" class="page-news-right-article-link">
              <img src="/img/04-news/icatch-news.jpg" alt="" class="page-news-right-article-img">
              <div class="page-news-right-article-texts">
                <div class="page-news-right-article-categories">
                  <div class="page-news-right-article-cat">カテゴリ</div>
                  <div class="page-news-right-article-date">2021.01.01</div>
                </div>
                <div class="page-news-right-article-text">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</div>
              </div>
            </a>
          </article>
          <article class="page-news-right-article">
            <a href="#" class="page-news-right-article-link">
              <img src="/img/04-news/icatch-news.jpg" alt="" class="page-news-right-article-img">
              <div class="page-news-right-article-texts">
                <div class="page-news-right-article-categories">
                  <div class="page-news-right-article-cat">カテゴリ</div>
                  <div class="page-news-right-article-date">2021.01.01</div>
                </div>
                <div class="page-news-right-article-text">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</div>
              </div>
            </a>
          </article>
          <article class="page-news-right-article">
            <a href="#" class="page-news-right-article-link">
              <img src="/img/04-news/icatch-news.jpg" alt="" class="page-news-right-article-img">
              <div class="page-news-right-article-texts">
                <div class="page-news-right-article-categories">
                  <div class="page-news-right-article-cat">カテゴリ</div>
                  <div class="page-news-right-article-date">2021.01.01</div>
                </div>
                <div class="page-news-right-article-text">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</div>
              </div>
            </a>
          </article>
        </div>
        <!-- /.page-news-right-news -->
        <div class="page-news-right-cat">
          <p class="page-news-right-cat-ttl">カテゴリ</p>

          <ul class="page-news-right-cat-lists">
            <li class="page-news-right-cat-list">テキストテキスト</li>
            <li class="page-news-right-cat-list">テキストテキスト</li>
            <li class="page-news-right-cat-list">テキストテキスト</li>
            <li class="page-news-right-cat-list">テキストテキスト</li>
            <li class="page-news-right-cat-list">テキストテキスト</li>
            <li class="page-news-right-cat-list">テキストテキスト</li>
          </ul>

        </div>
        <!-- /.page-news-right-cat -->
      </aside>
      <!-- /.page-news-right -->
    </div>
    <!-- /.page-news-inner -->
  </section>
  <!-- /.page-news -->
</div>
<!-- /.page-news-outer -->
<?php get_footer(); ?>