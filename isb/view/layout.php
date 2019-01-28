<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
  WebFontConfig = {
    custom: {
      families: ["baksosapi", "alvania"],
      urls: ["assets/font/font.css"]
    }
  };

  (function(d) {
    var wf = d.createElement("script"),
    s= d.scripts[0];
    wf.src = "js/webfont.js"
    wf.async = true;
    s.parentNode.insertBefore(wf, s);
  })(document);


  </script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ISB</title>
  <?php echo $css;?>
</head>
<body>
  <header>

<h1 class='logo__boven'>
      <a href="index.php?page=home" class='logo__home'><img src="assets/img/logo-groot.svg" alt="" class="logo__foto" width="100px" height= "100px"></a>
      <p class="hidden">internationaal straattheater festival Beveren</p></h1>
    <nav>
      <ul class="navigatie">
        <li class="navigatie__items"><a href="index.php?page=programma">programma</a></li>
        <li class="navigatie__items"><a href="index.php?page=activiteiten">activiteiten</a></li>
        <li class="navigatie-praktisch navigatie__items"><a href="index.php?page=praktisch">info</a></li>
      </ul>
    </nav>

     <aside>
      <img class="aside__ster" src="assets/img/ster.svg" alt="" width="100px">
      <p class='aside__text'>nog <span class="countdown" id="demo"></span> nachtjes slapen tot het internationaal straatheater festival</p>
    </aside>
    </header>

    <?php echo $content;?>
    <?php echo $js; ?>



    <footer>
      <div class="footer__text">
      <h1 class="logo-footer"><p class="hidden">internationaal straattheater festival Beveren</p><img src="assets/img/logo-groot.svg" width="100rem" alt=""></h1>
      <div class="contact">
      <h3 class="footer__titel">contact</h3>

        <p>Dienst projectcoördinatie</p>
        <p>03 750 16 29</p>
        <p>erik.apers@beveren.be</p>
        <p>Stationstraat 2 - 9120 Beveren</p>
      </div>

<div class="footer__socialmedia">
   <h3 class="footer__titel">volg ons</h3>
   <div class="naast">
   <a href="">
   <img src="assets/img/facebook.svg" width="30px" alt=""><span class="hidden">facebook</span>
   </a>

   <a href="">
   <img src="assets/img/instagram.svg" width="30px" alt=""><span class="hidden">instagram</span>
   </a>
   </div>
   </div>

   <div class="footer__info">
   <h3 class="footer__titel">praktische info</h3>
   <a href="">toegankelijkheid</a>
   <a href="">programma</a>
   <a href="">activiteiten</a>
   <a href="">praktische info</a>
   </div>
   </div>
  </footer>
</body>
</html>
