  <main>

    <section class="voorstellingen">
      <h2 class="voorstellingen__titel ">uitgelichte voorstellingen</h2>
      <div class='act__home'>
        <?php foreach($acts as $act){ ?>
          <article class="act">
          <img class='foto__home' src="assets/img/orig/<?php echo $act['foto'];?>.jpg" alt="<?php echo $act["alt"];?>">
            <div class="act__titel">
              <h3 class="act__h3"><?php echo $act["titel"];?></h3>
              <h4 class="act__h4"><?php echo $act["artiest"];?></h4>
            </div>
          </article>
          <?php } ?>
          </div>
          <a class="button button__programma button__voorstellingen" href="index.php?page=programma">ontdek de voorstellingen  &rtrif; </a>
      </section>

  <section class="familiedag">

  <h2 class="familiedag__titel">zaterdag familiedag</h2>
  <img class="familiedag__foto" src="assets/img/familie.jpg" alt="mama met 2 dochters" width="320">
  <p class="familiedag__text">Op zaterdag organiseert het internationaal straattheater festival Beveren een speciale familie dag. Deze dag zijn er speciale acts en voorstellingen geschikt voor het hele gezin! </p>
  <a class="button button__programma button__familiedag" href="index.php?page=programma">ontdek de voorstellingen  &rtrif; </a>
  </section>

   <section class="activeiten">
  <h2 class=" familiedag__titel actitiveiten__titel">activiteiten</h2>
  <img class="familiedag__foto" src="assets/img/activiteit.jpg" width="320" alt="kind speelt op bal">
  <a class="button button__programma button__familiedag" href="index.php?page=programma">ontdek onze actitiveiten  &rtrif; </a>
  </section>


  <section class="quote">
  <blockquote>"een weekend vol verwondering en bewondering"</blockquote>
  </section>



  <section class="info">
    <h2>praktische info</h2>
    <a class="button info__button" href="index.php?page=programma"> toegankelijkheid  &rtrif; </a>
    <a class="button info__button" href="index.php?page=programma"> word vrijwilliger  &rtrif; </a>

  </section>

  <section class="kaart">
    <h2>Ontdek onze locaties</h2>
    <img class="kaart-img" src="assets/img/kaartbeveren.svg" alt="plattegrond van Beveren">
  </section>
  </div>
  </main>

