<section class="detail">
<div class="detail__1">
<a class="detail__link" href="index.php?page=programma"> < terug naar de programma pagina</a>
<h2 class="detail__title"><?php echo $detailAct['titel'];?></h2>
<h3 class="detail__artiest"><?php echo $detailAct['artiest'];?></h3>
</div>

<img class='detail__foto' src="assets/img/orig/<?php echo $detailAct['foto'];?>.jpg" alt="<?php echo $detailAct['alt'];?>" height="200px">

<div class="detail__2">
<p class="detail__info-text"><?php echo $detailAct['info'];?></p>
<p class="detail__info-text"><?php echo $detailAct['extra'];?></p>
<a class="detail__url" href="<?php echo $detailAct['url'];?>"><?php echo $detailAct['url'];?></a>
</div>

<div class="detail__info">
<img class='' src="assets/img/klok.svg" alt="klok icoon" width="30px" height="30px">
<p class="detail__info_text" ><?php echo $detailActData['uur'];?></p>


<img class='' src="assets/img/kalender.svg" alt="kalender icoon" width="30px" height="30px">
<p class="detail__info_text"><?php echo $detailActData['dag'];?></p>


<img class='' src="assets/img/locatie.svg" alt="locatie icoon" width="30px" height="30px">
<p class="detail__info_text"><?php echo $detailActData['locatie'];?></p>
</div>


<div class="map">
<h3 class="detail__kaart__titel">waar is <?php echo $detailAct['titel'];?> te zien? </h3>
<img class="detail__kaart__img" src="assets/img/kaartbeveren.svg" alt="plattegrond van Beveren">
</div>

</section>

<article>
<?php
if(!empty($detailAct['film'])){
?>
<article class="detail__film">
  <h3 class="detail__kaart__titel">ontdek meer over <?php echo $detailAct['artiest'];?> </h3>
  <video class="detail__test" poster="assets/video/<?php echo $detailAct['film'];?>.jpg" controls>
  <source class="detail__test"  src="assets/video/<?php echo $detailAct['film'];?>.mp4" type="video/mp4">
</video>
</article>
<?php }?>
</article>
