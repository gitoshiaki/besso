<?php get_header(); ?>
    <main>

      <div class="hero">
        <div class="hero__textbox">
          <h1 class="hero__title">馨荘</h1>
          <p class="hero__subtitle">Besso</p>
        </div>
        <div class="hero__container">
          <svg id="hero_svg" width="100%" height="100%" viewBox="0 0 1000 800">
            <?php for ($i=0; $i < $limit = 7 ; $i++): ?>
              <circle class="a-hero__circle" cx="0" cy="<?= 800/$limit*$i ?>"/>
            <?php endfor; ?>
          </svg>
        </div>
      </div>

      <div class="about">
          <h2 class="about__title">馨荘とは</h2>
          <p class="about__description">
            匂いは普段の生活の中に自然に寄り添い、懐かしさや安心を与えてくれます。
            それはもともと香っている物に限らず、場所やそこに住まう人々から生まれ、大切な思い出を醸し出すこともある、大切な感覚です。
            馨荘では、訪れた方々が心休まり安心して過ごせるような空間を、様々な「今」を表現する皆様とともに、等身大の自分に戻り、ほっとするような場所を提供させていただけたらと考えております。
          </p>
      </div>

      <div class="news">
        <h2 class="news__title--italic">News</h2>
        <div class="news__container">
          <ul class="feed__container">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <li class="feed__item">
                <div class="feed__img eyecatch">
                  <?php
                    if ( has_post_thumbnail() ) {
                		    the_post_thumbnail();
                		}else {
                		    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.jpg" />';
                		}
                   ?>
                </div>
                <div class="feed__textarea">
                  <h3 class="feed__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="feed__text">
                    <?php the_content(); ?>
                  </div>
                </div>
              </li>

            <?php endwhile; else : ?>
            	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

          </ul>
          <div class="button__container">
            <a href="#" class="button">もっとみる</a>
          </div>
        </div>
      </div>

      <!-- <div class="gallary">
        <h2 class="gallary__title--italic">Gallary</h2>
        <svg>
          <line></line>

        </svg>
      </div> -->

    </main>
<?php get_footer(); ?>
