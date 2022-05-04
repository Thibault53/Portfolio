<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio de Thibault Yvard</title>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://kit.fontawesome.com/5abf606b2a.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
  <link href="<?= WEBROOT ?>public/css/bootstrap.min.css" rel="stylesheet">


  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?= WEBROOT ?>public/css/style.css">
  <script src="<?= WEBROOT ?>public/js/script.js"></script>



  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/jquery-2.2.3.min.js"></script>


  <!-- Mixitup js -->
  <script type="text/javascript" src="<?= WEBROOT ?>public/js/jquery.mixitup.min.js"></script>
</head>


<body data-spy="scroll" data-target=".navbar-desktop">

  <div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
  </div>
  <nav class="navbar">
    <div class="max-width">
      <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
      <ul class="menu">
        <li><a href="#home" class="menu-btn">Accueil</a></li>
        <li><a href="#about" class="menu-btn">A propos</a></li>
        <li><a href="#skills" class="menu-btn">Compétences</a></li>
        <li><a href="#portfolio" class="menu-btn">Travaux</a></li>
        <!--    <li><a href="#contact" class="menu-btn">Contact</a></li>   -->
      </ul>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>



  <!-- Features -->
  <section>

    <?php echo $content_for_layout ?>

  </section>


  <footer>
    <div class="container">
      <div class="col-sm-6 col-xs-12">
        <div class="m-t-2">
          <p class=""><i class="fa-solid fa-copyright"></i> 2022 Thibault YVARD, Tous droits réservés. </p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="text-sm-right m-t-2">
          <a href="https://www.linkedin.com/in/thibault-yvard-754133207/"><i class="fa-brands fa-linkedin"></i></i></a>
          <a href="https://github.com/Thibault53"><i class="fa-brands fa-github"></i></a>
        </div>
      </div>
  </footer>

</body>

</html>