
  <section class="filter">
    <h2></h2>
    <form >
    <input type="hidden" name="page" value="programma" />
      <input type="radio" id="dag" name="dag" value="vrijdag">vrijdag
      <input type="radio" id="dag" name="dag" value="zaterdag">zaterdag
      <input type="radio" id="dag" name="dag" value="zondag">zondag
      <input type="submit" value="filter">
    </form>
  </section>


<div class='programma'>
<?php
  foreach($events as $event) {
    ?>
      <li class='programma-item'>
      <!-- <img  class='foto' src="assets/img/<?php echo $d['foto'];?>.jpg" alt="" height="200px"> -->
      <div class='act'>
        <p><?php echo $event['locatie'];?></p>
        <p><?php echo $event['uur'];?></p>
        <img  class='foto-programma' src="assets/img/<?php echo $event['foto'];?>.jpg" alt="">
        <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>">detail</a>
        </div>
        </li>
    <?php
  }
?>
</div>
