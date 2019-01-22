<?php
  foreach($acts as $act){
    ?>
    <li class='act'>
        <p><?php echo $act['artiest'];?></p>
        <><?php echo $act['titel'];?></p>
        <a href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>">detail</a>

    </li>
    <?php
  }
?>
