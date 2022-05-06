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
                <div class="head_title center wow fadeInUp">
                    <h2 class="title">Mes travaux</h2>
                    <p>Voici les différents projets sur lesquels je travaille ou que j'ai pu effectué</p>
                </div>

                <div class="main_portfolio_content center wow fadeInUp">
                    <div class="main_mix_menu m-y-2">
                        <ul class="text-uppercase">
                            <li class="filter" data-filter="all">Tout</li>
                            <li class="filter" data-filter=".cat1">Personnel</li>
                            <li class="filter" data-filter=".cat2">Cours</li>
                            <li class="filter" data-filter=".cat3">Stage</li>
                        </ul>
                    </div>



                    <div id="mixcontent" class="mixcontent zoomIn">
                        <div class="col-md-4 mix cat2">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/raven.png" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <a href="#modal-01"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Raven</h3>
                                    <p>Site de commerce</p>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 mix cat2">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/loup-garou.png" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <a href="#!"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Loup Garou</h3>
                                    <p>Adaptation du célèbre jeu de carte</p>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 mix cat3">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/cofidur.png" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <a href="#!"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>VTOMJOB</h3>
                                    <p>Planificateur de copie</p>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 mix cat2">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>/public/images/crocsvinton.png" alt="" />
                                    <div class="mixi_portfolio_overlay">
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



                        <div class="col-md-4 mix cat3">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/topmedecin.png" alt="" />
                                    <div class="mixi_portfolio_overlay">
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



                        <div class="col-md-4 mix cat2">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/nodejs.png" alt="" />
                                    <div class="mixi_portfolio_overlay">
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



                        <div class="col-md-4 mix cat1">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/portfolio.png" alt="" />
                                    <div class="mixi_portfolio_overlay">
                                        <a href="#!"><i class="fa
                                                        fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="single_portfolio_text">
                                    <h3>Portfolio</h3>
                                    <p>Site professionnel</p>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 mix cat1">
                            <div class="single_mixi_portfolio center">
                                <div class="single_portfolio_img">
                                    <img src="<?= WEBROOT ?>public/images/djs.png" alt="" />
                                    <div class="mixi_portfolio_overlay">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>