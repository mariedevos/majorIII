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

<h1 class='logo-boven'>
      <a href="index.php?page=home" class='logo-home'><img src="assets/img/logo-groot.svg" alt="" class="logo-foto" width="100px" height= "100px"></a>
      <p class="hidden">internationaal straattheater festival Beveren</p></h1>
    <nav>
      <ul class="navigatie">
        <li><a href="index.php?page=programma">programma</a></li>
        <li><a href="index.php?page=activiteiten">activiteiten</a></li>
        <li class="navigatie-praktisch"><a href="index.php?page=praktisch">info</a></li>
      </ul>
    </nav>

     <aside>
      <img class="aside-ster" src="assets/img/ster.svg" alt="" width="100px">
      <p class='aside-text'>nog <span class="countdown" id="demo"></span> nachtjes slapen tot het intertnationaal straatheater festival</p>
    </aside>
    </header>

    <?php echo $content;?>
    <?php echo $js; ?>



    <footer>
      <div class="footer-text">
      <h1 class="logo-footer"><p class="hidden">internationaal straattheater festival Beveren</p><img src="assets/img/logo-groot.svg" width="100rem" alt=""></h1>
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
   <img src="assets/img/facebook.svg" width="40px" alt=""><span class="hidden">facebook</span>
   </a>

   <a href="">
   <img src="assets/img/instagram.svg" width="40px" alt=""><span class="hidden">instagram</span>
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
