<section class="filter">
    <h2 class="filter__title">Filter</h2>
    <form action="index.php" class="filter__form">
    <input type="hidden" name="action" value="filter" />
      <label for="term" class="form__label">
        <span class="hidden">Search</span>
        <input type="search" id="name" name="name" class="input input--filter" value="<?php echo $name;?>">
        <select name="type">
          <option value="">type:</option>
        <?php foreach($acts as $act):?>
          <option value="<?php echo $act['type'];?>" <?php if($type == $type['type']) echo 'selected';?>><?php echo $type['type'];?></option>
        <?php endforeach;?>
        </select>
      </label>
      <input type="submit" value="Filter" class="form__submit input input--button">
    </form>
  </section>


<div class='programma'>
<?php
  foreach($events as $event) {
    ?>

      <li>
      <!-- <img  class='foto' src="assets/img/<?php echo $d['foto'];?>.jpg" alt="" height="200px"> -->
      <div class='act'>
        <p><?php echo $event['locatie'];?></p>
        <?php echo $event['uur'];?></p>
        <!-- <a href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>">detail</a> -->
        </div>
        </li>

    <?php
  }
?>
</div>
