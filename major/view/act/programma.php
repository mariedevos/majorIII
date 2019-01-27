
  <section class="filter">
    <h2></h2>
    <form action="index.php" method="get" class="form" >
    <input type="hidden" name="page" value="programma" />
    <div class="onder">
    <div class="filter__dag">
    <!-- <input class="hidden" type="radio" id="alle" name="dag" value="alle">
    <label class="dag" for="alle">alle dagen</label> -->

    <label for="vrijdag">
    <input class="hidden test" type="radio" id="dag_vrijdag" name="dag" value="vrijdag">
    <label class="dag" for="dag_vrijdag">vrijdag</label>
    </label>

    <label for="dag_zaterdag">
    <input class="hidden test" type="radio" id="dag_zaterdag" name="dag" value="zaterdag">
    <label class="dag" for="dag_zaterdag">zaterdag</label>
    </label>

    <label for="dag_zondag">
    <input class="hidden test" type="radio" id="dag_zondag" name="dag" value="zondag">
    <label class="dag" for="dag_zondag">zondag</label>
    </label>

    </div>

    <div class="filter__type">

    <input  class="hidden"  type="radio" id="type_straatact" name="type" value="straatact">
    <label class="type" for="type_straatact">straatact
    <span class="circle"></span>
    </label>
    <input  class="hidden"  type="radio" id="type_voorstelling" name="type" value="voorstelling">
    <label class="type" for="type_voorstelling">voorstelling
    <span class="circle"></span>
    </label>

    </div>
    <input type="submit" value="zoek">
    </div>
    </form>
  </section>


<ul class='programma'>
<?php
  foreach($events as $event) {
    ?>
      <li class='programma-item'>



 <!-- <picture class="programma__foto">
          <source
            type="image/webp"
            srcset="
              assets/img/optim/<?php echo $event['foto'];?>_100.webp,
              assets/img/optim/<?php echo $event['foto'];?>_20.webp,
              assets/img/optim/<?php echo $event['foto'];?>_33.webp,
              assets/img/optim/<?php echo $event['foto'];?>_50.webp,
              assets/img/optim/<?php echo $event['foto'];?>_67.webp,
              assets/img/optim/<?php echo $event['foto'];?>_75.webp,
              assets/img/optim/<?php echo $event['foto'];?>_85.webp,
              assets/img/optim/<?php echo $event['foto'];?>_100.webp,
              assets/img/optim/<?php echo $event['foto'];?>_200.webp,
            "
          />
          <source
            type="image/jpeg"
            srcset="
              assets/img/optim/<?php echo $event['foto'];?>_100.jpg,
              assets/img/optim/<?php echo $event['foto'];?>_20.jpg,
              assets/img/optim/<?php echo $event['foto'];?>_33.jpg,
              assets/img/optim/<?php echo $event['foto'];?>_50.jpg,
              assets/img/optim/<?php echo $event['foto'];?>_67.jpg,
              assets/img/optim/<?php echo $event['foto'];?>_75.jpg,
              assets/img/optim/<?php echo $event['foto'];?>_85.jpg,
              assets/img/optim/<?php echo $event['foto'];?>_100.jpg,
              assets/img/optim/<?php echo $event['foto'];?>_200.jpg,

            "
          />
          <img
            src="assets/img/optim/<?php echo $event['foto'];?>_33.jpg"
            alt="img"
            width="100"
            height="100"
          />
        </picture> -->










        <article>
        <a href="index.php?page=detail&amp;id=<?php echo $event['id']; ?>">
        <img  class='programma__foto' src="assets/img/orig/<?php echo $event['foto'];?>.jpg" alt="" height="200px">
        </a>
        <div class="programma__text">
              <h3 class=""><?php echo $event["titel"];?></h3>
              <h4 class=""><?php echo $event["artiest"];?></h4>
            </div>
        </article>

        <?php
        foreach($times as $time) {
          if ($time['acts_id'] == $event['id']){
            echo $time['uur'];
          }
        }
        ?>

        </li>
    <?php
  }
?>
</ul>
