<section class="detail">
  <div class="detail-1">
<a class="detail__link" href="index.php?page=programma"> < terug naar de programma pagina</a>
<h2 class="detail__title"><?php echo $detailAct['titel'];?></h2>
<h3 class="detail__artiest"><?php echo $detailAct['artiest'];?></h3>
</div>

<img class='detail__foto' src="assets/img/orig/<?php echo $detailAct['foto'];?>.jpg" alt="" height="200px">

<div class="detail-2">
<p class="detail__info-text"><?php echo $detailAct['info'];?></p>

<a class="detail__url" href="<?php echo $detailAct['url'];?>"><?php echo $detailAct['url'];?></a>
</div>

<div class="detail__info">
<img class='' src="assets/img/klok.svg" alt="" width="30px" height="30px">
<p class="detail__info_text" ><?php echo $detailActData['uur'];?></p>


<img class='' src="assets/img/kalender.svg" alt="" width="30px" height="30px">
<p class="detail__info_text"><?php echo $detailActData['dag'];?></p>


<img class='' src="assets/img/locatie.svg" alt="" width="30px" height="30px">
<p class="detail__info_text"><?php echo $detailActData['locatie'];?></p>
</div>

<div class="map">
<h3 class="detail__kaart__titel">waar is <?php echo $detailAct['titel'];?> te zien? </h3>
<img class="detail__kaart__img" src="assets/img/kaartbeveren.svg" alt="">
</div>


</section>
