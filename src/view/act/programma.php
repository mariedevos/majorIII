<?php
  foreach($acts as $act){
    ?>
    <li class='act'>
      <img src="assets/img/<?php echo $act['foto'];?>.jpg" alt="" width="200px">
        <p><?php echo $act['artiest'];?></p>
        <?php echo $act['titel'];?></p>
        <a href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>">detail</a>

    </li>
    <?php
  }
?>
