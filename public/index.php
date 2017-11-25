<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>HOME｜瞥荘</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <header>

    </header>
    <main>

      <div class="hero">
        <div class="hero__textbox">
          <h1 class="hero__title">馨荘</h1>
          <p class="hero__subtitle">Besso</p>
        </div>
        <div class="hero__container">
          <svg id="hero_svg" width="100%" height="100%" viewBox="0 0 1000 800">
            <?php for ($i=0; $i < $limit = 7 ; $i++): ?>
              <circle cx="0" cy="<?= 800/$limit*$i ?>"/>
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

      <div class="gallary">
        <h2 class="gallary__title--italic">Gallary</h2>
        <svg>
          <line></line>

        </svg>
      </div>

      <div class="news">
        <h2 class="news__title--italic">News</h2>
        <div class="news__container">
          <ul class="feed__container">
            <?php for ($i=0; $i < 3 ; $i++): ?>
              <li class="feed__item">
                <div class="feed__img"></div>
                <div class="feed__textarea">
                  <h3 class="feed__title">11月20日 お茶会開催のお知らせ</h3>
                  <p class="feed__text">
                    以下のリンクにて詳細をご確認ください。<br>
                    http://facebook.com/event/1kfhdikdn
                  </p>
                </div>
              </li>
            <?php endfor; ?>

          </ul>
          <div class="button__container">
            <a href="#" class="button">もっとみる</a>
          </div>
        </div>
      </div>

      <div class="contact">
        <h2 class="contact__title--italic">Contact</h2>
        <div class="">

        </div>
      </div>

    </main>
    <footer>

    </footer>

    <script src="./js/bundle.js" charset="utf-8"></script>
  </body>
</html>
