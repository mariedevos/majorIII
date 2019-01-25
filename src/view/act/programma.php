
  <section class="filter">
    <h2></h2>
    <form action="index.php" method="get" class="form" >
    <input type="hidden" name="page" value="programma" />
      <input type="radio" id="dag" name="dag" value="vrijdag">vrijdag
      <input type="radio" id="dag" name="dag" value="zaterdag">zaterdag
      <input type="radio" id="dag" name="dag" value="zondag">zondag
      <input type="radio" id="type" name="type" value="straatact">act
      <input type="radio" id="type" name="type" value="voorstelling">voorstelling
      <input type="submit" value="filter">
    </form>
  </section>


<div class='programma'>
<?php
  foreach($events as $event) {
    ?>
      <li class='programma-item'>
      <img  class='foto' src="assets/img/<?php echo $event['foto'];?>.jpg" alt="" height="200px">
      <div class='act'>
        <?php
        echo $event['titel'] . $event['id'];
        foreach($times as $time) {
          if ($time['acts_id'] == $event['id']){
            echo $time['uur'];
          }
        }
        ?>
        <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>">detail</a>
        </div>
        </li>
    <?php
  }
?>
</div>
