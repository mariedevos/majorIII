  <main>

    <section class="voorstellingen">
      <h2 class="voorstellingen-titel ">uitgelichte voorstellingen</h2>
      <div class='act-home'>
        <?php foreach($acts as $act){ ?>
          <article class="act">
          <img class='foto-home' src="assets/img/orig/<?php echo $act['foto'];?>.jpg" alt="">
            <div class="act-titel">
              <h3 class="act-h3"><?php echo $act["titel"];?></h3>
              <h4 class="act-h4"><?php echo $act["artiest"];?></h4>
            </div>
          </article>
          <?php } ?>
          </div>
          <a class="button button__programma " href="index.php?page=programma">ontdek de voorstellingen  &rtrif; </a>
      </section>

  <section class="familiedag">
  <h2 class="familiedag__titel">zaterdag familiedag</h2>
  <!-- <img class="familiedag__foto" src="assets/img/familiedag.svg" alt=""> -->
  <p class="familiedag-text">Op zaterdag organiseert het internationaal straattheater festival Beveren een speciale familie dag. Deze dag zijn er speciale acts en voorstellingen geschikt voor het hele gezin! </p>
  <a class="button button__programma button__familiedag" href="index.php?page=programma">ontdek de voorstellingen  &rtrif; </a>
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
    <a class="button info_button" href="index.php?page=programma"> toegankelijkheid  &rtrif; </a>
    <a class="button" href="index.php?page=programma"> word vrijwilliger  &rtrif; </a>
  </section>


  </div>
  </main>

