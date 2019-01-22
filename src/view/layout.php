<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>major III</title>
    <?php echo $css;?>
  </head>
  <body>
  <header>
  <aside>nog 70 nachtjes slapen tot het intertnationaal straatheater festival</aside>
  <h1><p class="hidden">internationaal straattheater festival Beveren</p></h1>
  <nav>
  <ul>
  <li><a href="">programma</a></li>
  <li><a href="">activiteiten</a></li>
  <li><a href="">praktische info</a></li>
  </ul>
  </nav>
  </header>

  <main>
  <section class="voorstellingen">
  <h2>uitgelichte voorstellingen</h2>

<!-- <ul class="acts">
<?php
  foreach($acts as $act){
    ?>
    <li>
      <article class="act">
        <h3><?php echo $act["artiest"];?></h3>
        <h4><?php echo $act["titel"];?></h4>
        <p><?php echo $act["land"];?></p>
      </article>
    </li>
    <?php
  }
?>
</ul> -->

  <button>ontdek de voorstellingen</button>
  </section>

  <section class="familiedag">
  <h2>zaterdag familiedag</h2>
  <img src="" alt="">
  <p>Op zaterdag organiseert het internationaal straattheater festival Beveren een Speciale familie dag. Op deze dag zijn er speciale acts en voorstellingen geschikt voor het gezin! </p>
  <button>ontdek de voorstellingen</button>
  </section>

  <section class="quote">
  <blockquote>"een weekend vol verwondering en bewondering"</blockquote>
  </section>

  <section class="kaart">
    <h2>kaart van Beveren</h2>
    <img class="kaart-img" src="assets/img/kaartbeveren.svg" alt="">
  </section>

  <section>
    <h2>praktische info</h2>
    <button>toegankelijkheid</button>
    <button>word vrijwilliger</button>
  </section>

  </main>

      <section class="players">
        <?php echo $content;?>
        </section>
    <?php echo $js; ?>
  </body>
</html>
