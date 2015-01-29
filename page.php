<?php get_header(); ?>
    <main class="l-contents">
      <article class="l-entry-area post-<?php the_ID(); ?> <?php post_class(); ?>">
        <header class="entry-header">
          <h2 class="entry-title">
            <?php the_title(); ?>
          </h2>
        </header>
        <div class="entry-body">
          <?php if(has_post_thumbnail())
            the_post_thumbnail( 'large' );
          ?>
          <h2>
            見出し
          </h2>
          <p></p>
          親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。<blockquote>弱虫やーい。と囃したからである。</blockquote>
          <p></p>
          小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから、
          <h3>
            この次は抜かさずに飛んで見せますと答えた。（青空文庫より）
          </h3>
          <ul>
            <li>
              親譲りの無鉄砲で小供の時から損ばかりしている。
            </li>
            <li>
              小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。
            </li>
          </ul>
          <p>
            なぜそんな無闇をしたと聞く人があるかも知れぬ。
          </p>
          <ol>
            <li>
              別段深い理由でもない。
            </li>
            <li>
              弱虫やーい。
            </li>
          </ol>
          <p>
            と囃したからである。小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから.
          </p>
        </div>
      </article>
    </main>
<?php get_footer(); ?>