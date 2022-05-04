<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio de Thibault Yvard</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

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
      <div class="main_coppyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <div class="copyright_text m-t-2 text-xs-center">
                <p class="wow zoomIn" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by Thibault Yvard</a> 2016. All
                  Rights Reserved</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="socail_coppyright text-sm-right m-t-2 text-xs-center wow zoomIn">
                <a href="#!"><i class="fa fa-facebook"></i></a>
                <a href="#!"><i class="fa fa-twitter"></i></a>
                <a href="#!"><i class="fa fa-google-plus"></i></a>
                <a href="#!"><i class="fa fa-rss"></i></a>
                <a href="#!"><i class="fa fa-vimeo"></i></a>
                <a href="#!"><i class="fa fa-pinterest"></i></a>
                <a href="#!"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </footer>

</body>

</html>