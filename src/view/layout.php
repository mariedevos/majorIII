<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script>
  WebFont.load({
    custom: {
      families: ["baksosapi", "alvania"],
      urls: ["assets/font/fonts.css"]
    }
  });
  </script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>major III</title>
  <?php echo $css;?>
</head>
<body>
  <header>
    <aside>
      <img class="aside-ster" src="assets/img/ster.svg" alt="" width="130px">
      <p>nog  <span class="countdown">70</span> nachtjes slapen tot het intertnationaal straatheater festival</p>
    </aside>
    <h1 class="logo-home">
      <a href="index.php?page=home" class='logo-home'><img src="assets/img/logo-groot.svg" alt="" width=100px></a>
      <p class="hidden">internationaal straattheater festival Beveren</p></h1>
    <nav>
      <ul>
        <li><a href="index.php?page=programma">programma</a></li>
        <li><a href="index.php?page=activiteiten">activiteiten</a></li>
        <li><a href="index.php?page=praktisch">praktische info</a></li>
      </ul>
    </nav>
    </header>

    <?php echo $content;?>
    <?php echo $js; ?>



    <footer>
      <div class="footer-text">
      <h1 class="logo-footer"><a href="index.php?page=home">.</a><p class="hidden">internationaal straattheater festival Beveren</p></h1>
      <h3>contact</h3>
      <div class="contact">
        <p>Dienst projectcoördinatie</p>
        <p>03 750 16 29</p>
        <p>erik.apers@beveren.be</p>
        <p>Stationstraat 2 - 9120 Beveren</p>
      </div>

<div class="volg ons">
   <h3>volg ons</h3>
   <a href="">
   <img src="" alt="">facebook
   </a>
   <a href="">
   <img src="" alt="">instagram
   </a>
   </div>

   <h3>praktische info</h3>
   <div class="contact">
   <a href="">toegankelijkheid</a>
   <a href="">programma</a>
   <a href="">activiteiten</a>
   <a href="">praktische info</a>
   </div>
   </div>
  </footer>
</body>
</html>
