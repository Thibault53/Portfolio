<!-- Section acceuil -->
<section class="home" id="home">
    <div class="max-width">
        <div class="home-content">
            <div class="text-1">Bonjour, mon nom est</div>
            <div class="text-2">Thibault Yvard</div>
            <div class="text-3">Et je suis développeur <span class="typing"></span></div>
        </div>
    </div>
</section>





<!-- Section A propos -->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">A propos de moi</h2>
        <div class="about-content">
            <div class="column left">
                <img src="<?= WEBROOT ?>public/images/CV.png" alt="">
            </div>
            <div class="column right">
                <div class="text">Je suis Thibault Yvard <span class="typing-2"></span></div>
                <p> J'ai actuellement 21 ans et je suis étudiant en BTS SIO option SLAM à Laval. Vous trouverez ici mes travaux réalisés dans le cadre de mes études et de ma carrière professionnelle.</p>
                <a href="https://btsinfo53.fr/mahara/user/view.php?id=259">Voir plus</a>
            </div>
        </div>
    </div>
</section>
<hr />





<!-- Section Compétences -->
<section class="skills" id="skills">
    <div class="max-width">
        <h2 class="title">Mes compétences</h2>
        <div class="skills-content">
            <div class="column left">
                <div class="text">Mes compétences</div>
                <p>Lors de mon cursus, j'ai aquis plusieurs compétences que ce soit informatique ou humain. J'ai appris les méthodes agiles, le versioning, la gestion de projet, mettre en place une veille technologique ... </p>
                <a href="https://btsinfo53.fr/mahara/user/view.php?id=259">Voir plus</a>
            </div>
            <div class="column right">
                <div class="bars">
                    <div class="info">
                        <span>HTML</span>
                        <span>90%</span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>CSS</span>
                        <span>60%</span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>JavaScript</span>
                        <span>60%</span>
                    </div>
                    <div class="line js"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>PHP</span>
                        <span>70%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>MySQL</span>
                        <span>70%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Git</span>
                        <span>50%</span>
                    </div>
                    <div class="line git"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr />





<!-- Section Parcours -->
<section class="parcours" id="parcours">
    <div class="container">
        <h2 class="title">Mon parcours</h2>
        <div class="row">
            <div class="col-md-12">
                <div id="content">
                    <ul class="timeline">
                        <li class="event" data-date="Février - Mars 2022">
                            <h3>Développeur logiciel</h3>
                            <p>Lors d'un stage à cofidur EMS, j'ai réalisé un scheduler en C#.</p>
                        </li>
                        <li class="event" data-date="Juillet 2022">
                            <h3>Préparateur de commande</h3>
                            <p>Travail Saisonnier à Noz.</p>
                        </li>
                        <li class="event" data-date="Mai 2022 - Juin 2022">
                            <h3>Développeur web</h3>
                            <p>Lors d'un stage, j'ai réalisé un site web Wordpress</p>
                        </li>
                        <li class="event" data-date="2020 - 2022">
                            <h3>BTS SIO option SLAM</h3>
                            <p>Lycée Douanier Rousseau à Laval</p>
                        </li>
                        <li class="event" data-date="2019 - 2020">
                            <h3>Bac STI2D option SIN</h3>
                            <p>Lycée Réaumur à Laval</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<hr />




<!-- Section Travaux -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="main_portfolio_area m-y-3">
                <div class="head_title center">
                    <h2 class="title">Mes travaux</h2>
                    <p>Voici les différents projets sur lesquels je travaille ou que j'ai pu effectué</p>
                </div>

                <div class="main_portfolio_content center wow fadeInUp">
                    <div class="main_mix_menu m-y-2">
                        <ul class="text-uppercase portfolio-filter">
                            <li class="filter" data-filter="all">Tout</li>
                            <li class="filter" data-filter=".cat1">Personnel</li>
                            <li class="filter" data-filter=".cat2">Cours</li>
                            <li class="filter" data-filter=".cat3">Stage</li>
                        </ul>
                    </div>


                    <!-- RAVEN -->
                    <div id="mixcontent" class="mixcontent zoomIn">





                        <div class="col-md-4 mix cat2">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/raven.png" alt="" />
                                    <div class="mixi_portfolio_overlay" data-bs-toggle="modal" data-bs-target="#RavenModal">
                                        <a><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Raven</h3>
                                    <p>Site de commerce</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="RavenModal" tabindex="-1" aria-labelledby="RavenModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Raven</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Raven est mon deuxième projet web réalisé durant mon BTS SIO.
                                        C'est une compagnie e-sport qui vend, via un site e-commerce, les produits dérivés de nos équipes compétitives. Le site est réalisé en HTML, CSS, JavaScript, jQuery, PHP, MySql, Bootstrap et utilise le framwork MVC.
                                        <br> Vous pouvez retrouver le site <a href="http://195.221.60.26:11019/2022-raven/"> ici.</a><br>
                                        Le projet contient aussi une application C# permettant de gérer la base de données qui utilise le modèle MVVM.<br>
                                        Nous avons aussi travaillés en mode projet<br> <a href="https://btsinfo53.fr/mahara/view/view.php?id=3976">Voir en détails</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!-- LOUP GAROU -->
                        <div class="col-md-4 mix cat2">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/loup-garou.png" alt="" />
                                    <div class="mixi_portfolio_overlay" data-bs-toggle="modal" data-bs-target="#LoupGarouModal">
                                        <a><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Loup Garou</h3>
                                    <p>Adaptation du célèbre jeu de carte</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="LoupGarouModal" tabindex="-1" aria-labelledby="LoupGarouModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Loup Garou</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Le Loup Garou est un projet de 1er année de BTS SIO où nous avons réalisé le jeu de société du loup garou sous C#.
                                        <a href="https://btsinfo53.fr/mahara/view/view.php?id=3765"> Voir en détails</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- VTOMJOB -->
                        <div class="col-md-4 mix cat3">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/cofidur.png" alt="" />
                                    <div class="mixi_portfolio_overlay" data-bs-toggle="modal" data-bs-target="#vtomjobModal">
                                        <a><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>VTOMJOB</h3>
                                    <p>Planificateur de copie</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="vtomjobModal" tabindex="-1" aria-labelledby="vtomjobModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">VTOMJOB</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        L'application VTOMJOB est un projet de stage. Elle consiste à gérer des "Jobs" (Copie de fichiers dans des dossiers tout en le modifiant). L'application est réalisée en C#, j'ai aussi développé une Library, puis réalisé une IHM sous WINDEV.<br>
                                        <a href="https://btsinfo53.fr/mahara/view/view.php?id=4133"> Voir en détails</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PORTFOLIO -->
                        <div class="col-md-4 mix cat1">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/portfolio.png" alt="" />
                                    <div class="mixi_portfolio_overlay" data-bs-toggle="modal" data-bs-target="#PortfolioModal">
                                        <a href="#!"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Ce site web</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="PortfolioModal" tabindex="-1" aria-labelledby="PortfolioModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Ce site web</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Projet personnel dans laquel je souhaite avoir un site qui centralisera mes différents projets, héberger des services, me servir de documentation, ... <br> Pour le moment, ce n'est qu'un portfolio.<br>
                                        Le site est réalisé en HTML5, CSS3, Bootstrap, Javascript, jQuery, PHP, Git et utilise le Framework MVC
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- BOT DISCORD -->
                        <div class="col-md-4 mix cat1">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/djs.png" alt="" />
                                    <div class="mixi_portfolio_overlay" data-bs-toggle="modal" data-bs-target="#DiscordModal">
                                        <a href="#!"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Bot Discord</h3>
                                    <p>Robot utilisable sur le réseau social Discord</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="DiscordModal" tabindex="-1" aria-labelledby="DiscordModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Discord</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Projet personnel qui consiste à créer un bot Discord qui permettera de faciliter l'organisation d'événements grâce à des commandes.
                                        Ce bot est réalisé avec Discord.Js qui est un module Node.Js. J'utilise aussi Git pour le versioning.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        
                        <!-- CROCS VINTON -->
                        <div class="col-md-4 mix cat2">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>/public/images/crocsvinton.png" alt="" />
                                    <div class="mixi_portfolio_overlay" data-bs-toggle="modal" data-bs-target="#CrocsVitonModal">
                                        <a href="#!"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Crocs Vinton</h3>
                                    <p>Site de commerce</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="CrocsVitonModal" tabindex="-1" aria-labelledby="CrocsVitonModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Crocs Vinton</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Crocs Vinton est mon premier projet web réalisé durant mon BTS SIO.
                                        C'est une entreprise qui se veux luxieuse qui vend, via un site e-commerce, des "crocs" à des prix exorbitant.<br>
                                        Il est réalisé en HTML, CSS, PHP et MySQL.
                                        <br> Vous pouvez retrouver le site <a href="http://195.221.60.26:11019/2022-promotion_sio/crocsvinton/index.php"> ici.</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- TOPMEDECIN -->
                        <div class="col-md-4 mix cat3">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/topmedecin.png" alt="" />
                                    <div class="mixi_portfolio_overlay" data-bs-toggle="modal" data-bs-target="#TopmedecinModal">
                                        <a href="#!"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>TopMedecin</h3>
                                    <p>Site de promotion</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="TopmedecinModal" tabindex="-1" aria-labelledby="TopmedecinModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Topmedecin</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Topmedecin est un site Wordpress réalisé en stage. Ce site souhaite faire face au désert médical qui sévit dans le village de Saint-Ouën-des-Toits en faisant la promotion de ce dernier.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- SONOLIGHT -->
                        <div class="col-md-4 mix cat2">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/nodejs.png" alt="" />
                                    <div class="mixi_portfolio_overlay" data-bs-toggle="modal" data-bs-target="#SonolightModal">
                                        <a href="#!"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Sonolight</h3>
                                    <p>Site évenementiel</p>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="SonolightModal" tabindex="-1" aria-labelledby="SonolightModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Sonolight</h3>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sonolight est notre dernier projet de cours en BTS SIO. Nous avons été contactés par le gérant de l'association "Sonolight" qui souhaite avoir une application mobile permettant de plus facilement gérer les évnènements liés à son association.
                                        L'application consiste à envoyer des photos prise par des invités qui sera par la suite affiché sur un écran. Un admin doit aussi pouvoir like ou dislike comme sur tinder pour accepter ou non l'affichage de la photo.<br>
                                        Ce projet est réalisé en NodeJS.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>