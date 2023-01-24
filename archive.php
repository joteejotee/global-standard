<?php get_header(); ?>
<?php
/*
Template Name: archive
*/
?>
<div class="page-news-outer">
  <div class="page-news-top">
    <div class="news-top-titles">
      <h1 class="news-top-title">NEWS</h1>
      <p class="news-top-sub-title">ニュース</p>
    </div>
  </div>
  <!-- /.page-news-top -->
  <section class="page-news">
    <div class="page-news-inner">
      <main class="page-news-left">
        <h3 class="page-news-left-ttl">ニュース</h3>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="page-news-left-article">
              <a href="#" class="page-news-left-article-link">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium', array('class' => 'page-news-left-article-img')); ?>
                <?php else : ?>
                  <p>サムネイルがないです</p>
                <?php endif; ?>
                <div class="page-news-left-article-texts">
                  <div class="page-news-left-article-categories">
                    <div class="page-news-left-article-cat-flex">
                      <div class="page-news-left-article-cat">
                        <?php
                        // カテゴリーのデータを取得
                        $cat = get_the_category();
                        $cat = $cat[0];
                        ?>
                        <?php echo $cat->cat_name; ?>
                      </div>
                      <div class="page-news-left-article-new">NEW</div>
                    </div>
                    <div class="page-news-left-article-date"><?php the_date('Y.m.d'); ?></div>
                  </div>
                  <div class="page-news-left-article-text">
                    <?php
                    if (mb_strlen($post->post_title) > 34) {
                      $title = mb_substr($post->post_title, 0, 34);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </div>

                </div>
              </a>
            </article>
          <?php endwhile; ?>
        <?php else : ?>
          <p>記事がありません。</p>
        <?php endif; ?>
      </main>
      <!-- /.page-news-left -->
      <aside class="page-news-right">
        <div class="page-news-right-news">
          <p class="page-news-right-news-ttl">新着記事</p>




          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <!-- 繰り返し処理する内容 -->
              <article class="page-news-right-article">
                <a href="#" class="page-news-right-article-link">


                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium', array('class' => 'page-news-right-article-img')); ?>
                  <?php else : ?>
                    <p>サムネイルがないです</p>
                  <?php endif; ?>





                  <!-- <img src="/img/04-news/icatch-news.jpg" alt="" class="page-news-right-article-img"> -->



                  <div class="page-news-right-article-texts">
                    <div class="page-news-right-article-categories">
                      <div class="page-news-right-article-cat">カテゴリ</div>
                      <div class="page-news-right-article-date">2021.01.01</div>
                    </div>
                    <div class="page-news-right-article-text">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</div>
                  </div>
                </a>
              </article>
            <?php endwhile;
          else : ?>
            <p>記事がありません。</p>
          <?php endif; ?>


          <!-- <article class="page-news-right-article">
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
          </article> -->
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