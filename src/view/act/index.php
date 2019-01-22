

  <main>
  <section class="voorstellingen">
  <h2>uitgelichte voorstellingen</h2>

  <?php
  foreach($acts as $act){
    ?>
    <li class='act'>
        <p><?php echo $act["artiest"];?></p>
        <p><?php echo $act["titel"];?></p>

    </li>
    <?php
  }
?>



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
  </body>
