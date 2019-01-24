  <main>
    <section class="voorstellingen">
      <h2 class="voorstellingen-titel ">uitgelichte voorstellingen</h2>
      <div class='act-home'>
        <?php foreach($acts as $act){ ?>
          <article class="act">
            <!-- <div class="act-titel">
              <h3><?php echo $act["titel"];?></h3>
              <h4><?php echo $act["artiest"];?></h4>
            </div> -->
            <img  class='foto-home' src="assets/img/<?php echo $act['foto'];?>.jpg" alt="">
          </article>
          <?php } ?>
          </div>
          <a class="button" href="index.php?page=programma">ontdek de voorstellingen  &rtrif; </a>
      </section>

  <section class="familiedag">
  <h2>zaterdag familiedag</h2>
  <img src="" alt="">
  <p class="familiedag-text">Op zaterdag organiseert het internationaal straattheater festival Beveren een Speciale familie dag. Op deze dag zijn er speciale acts en voorstellingen geschikt voor het gezin! </p>
  <a class="button" href="index.php?page=programma">ontdek de voorstellingen  &rtrif; </a>
  </section>

  <section class="quote">
  <blockquote>"een weekend vol verwondering en bewondering"</blockquote>
  </section>

  <section class="kaart">
    <h2>kaart van Beveren</h2>
    <img class="kaart-img" src="assets/img/kaartbeveren.svg" alt="">
  </section>

  <section class="info">
    <h2>praktische info</h2>
    <a class="button" href="index.php?page=programma"> toegankelijkheid  &rtrif; </a>
    <a class="button" href="index.php?page=programma"> word vrijwilliger  &rtrif; </a>
  </section>

  </main>

