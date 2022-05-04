<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio de Thibault Yvard</title>
  <link rel="stylesheet" href="css\style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="css\bootstrap.min.css" rel="stylesheet">


  <!-- Your custom styles (optional) -->
  <link href="css\style.css" rel="stylesheet">
  <script src="js\script.js"></script>



   <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js\jquery-2.2.3.min.js"></script>


    <!-- Mixitup js -->
    <script type="text/javascript" src="js\jquery.mixitup.min.js"></script>
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
    <span>Created By <a href="https://www.codingnepalweb.com">CodingNepal</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
  </footer>

</body>

</html>