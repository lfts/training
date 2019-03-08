<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Forum technique - Maquette du projet DevOps">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Maquette DevOps</title>
        <!-- FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- CSS -->
        <link rel="stylesheet" href="css/material.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <!-- LAYOUT -->
        <div class="mdl-layout mdl-js-layout">
            <!-- HEADER -->
            <!--<header class="mdl-layout__header mdl-layout__header--transparent">-->
            <header class="mdl-layout__header header-custom">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">DevOps</span>
                    <!-- Spacer to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation -->
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="#presentation">Mais c'est quoi ?</a>
                        <a class="mdl-navigation__link" href="#stateArt">Dev VS Ops : aïe aïe aïe</a>
                        <a class="mdl-navigation__link" href="#how">Et ça marche comment ?</a>
                        <a class="mdl-navigation__link" href="#stakes">Et ça apporte quoi en fait ?</a>
                        <a class="mdl-navigation__link" href="#ccl">On conclut !</a>
                    </nav>
                </div>
            </header>
            <!-- END HEADER -->
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">DevOps</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="#presentation">Présentation</a>
                    <a class="mdl-navigation__link" href="#stateArt">Dev VS Ops</a>
                    <a class="mdl-navigation__link" href="#how">DevOps : fonctionnement</a>
                    <a class="mdl-navigation__link" href="#stakes">Enjeux</a>
                    <a class="mdl-navigation__link" href="#ccl">Conclusion</a>
                </nav>
            </div>
            <!-- CONTENT -->
            <main class="mdl-layout__content">                

                <div class="parallax parallax-0">
                    
                </div>

                <div id="presentation" class="content-part parallax parallax-1">
                    <h2 class="mdl-typography--display-1">Présentation</h2>
                    <div>
                        <h3 class="mdl-typography--headline">Définition</h3>
                        <p>Le mot « DevOps » vient de la contraction des mots « development » (développement) et « operations » (exploitation).</p>
                        <p>Définition Wikipédia :</br>
                        « Le DevOps est un mouvement visant à l’alignement de l’ensemble des équipes du SI sur un objectif commun, à commencer par les équipes de Dev chargées de faire évoluer le SI et les Ops responsables des infrastructures. »</p>
                        <p>DevOps est un mouvement qui vise à éliminer la frontière entre les équipes de développement (Dev) et les équipes d’exploitation (Ops) afin de les aligner sur un objectif commun.</p>
                        <p>DevOps c’est aussi une culture, un modèle de développement et une stratégie opérationnelle qui tend à améliorer la communication et la collaboration entre les deux équipes. C’est également un ensemble de bonnes pratiques destiné à répondre à un besoin croissant d’industrialisation et de normalisation du SI.</p>
                    </div>

                    <div>
                        <h3 class="mdl-typography--headline">Origines</h3>
                        <p>DevOps est à l'origine ...</p>
                    </div>
                </div>
            
                <div id="stateArt" class="content-part parallax parallax-2">
                    <h2 class="mdl-typography--display-1">Dev VS Ops : état de l'art</h2>
                    <div>
                        <div class="mdl-grid">
                            <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Les rôles</h3>
                            <div class="mdl-cell mdl-cell--8-col">
                                <ul>
                                    <li>Les Devs : Personnes impliquées dans la fabrication d’un logiciel avant que celui-ci n’atteigne la production. Se sont généralement des développeurs et toutes les personnes impliquées dans le développement d’un produit.</li>
                                    <br/>
                                    <li>Les Ops : Personnes impliquée dans l’exploitation et la maintenance de la production. Se sont généralement des ingénieurs systèmes, des administrateurs systèmes, des ingénieurs réseaux, des professionnels de sécurité, …</li>
                                </ul>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col cell-img">
                                <img src="img/devops-bridge.png" width="60%">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="mdl-typography--headline">Les développeurs VS l'exploitation</h3>
                        <p>Aujourd’hui, il est fréquent que l’on retrouve dans les entreprises une division des équipes en fonction de leur travail. Par cette organisation, celles-ci se retrouvent souvent isolées. Au fil des années, le monde du développement et de l’exploitation se sont éloignés et leurs cultures ont divergées.</p>
                        <p>Ils se sont d’abord éloignés physiquement : les équipes ont été cloisonnées, externalisées, voire même délocalisées. Puis, éloignés culturellement : les développeurs doivent répondre à un besoin métier, faire preuve de réactivité et déployer le plus souvent possible, tandis que l’exploitation doit s’assurer que le système est et restera opérationnel.</p>
                        <p>L’équipe d’exploitation se focalise plutôt sur la contrainte qualité au détriment des délais et des coûts : la meilleure solution d’atteindre son objectif étant de contrôler sévèrement la qualité des changements apportés aux systèmes qu’elle maintient.</p>
                        <p>L’équipe de développement, quant à elle, se focalise plutôt sur des changements nécessaires au moindre coût et le plus rapidement possible, souvent au détriment de la qualité, et ce, surtout lorsque des retards surviennent.</p>
                        <p>La séparation des devoirs entre les deux équipes a rapidement mené à un conflit perpétuel du fait de l’incompatibilité de leurs objectifs respectifs.</p>
                        <ul>
                            <li>Les Devs recherchent des changements</li>
                            <li>Les Ops recherchent la stabilité organisationnelle</li>
                        </ul>
                        <p>Certains signes spécifiques permettent de démontrer qu’une rupture s’est engagée tels que le manque de communication, le renvoi mutuel des responsabilités lorsqu’un déploiement a provoqué de nombreux incidents, le manque de réactivité, la perte de temps due au travail de chacun peu ou pas délimité, …</p>
                    </div>
                </div>

                <div id="how" class="content-part parallax parallax-3">
                    <h2 class="mdl-typography--display-1">DevOps, comment ça marche ?</h2>
                    <div>
                        <h3 class="mdl-typography--headline">Principes de fonctionnement</h3>
                        <p>Les principes bla bla ...</p>
                    </div>

                    <div>
                        <h3 class="mdl-typography--headline">Les pilliers CALMS</h3>
                        <p>C.A.L.M.S</p>
                    </div>
                </div>

                <div id="stakes" class="content-part parallax parallax-4">
                    <h2 class="mdl-typography--display-1">Enjeux</h2>
                    <div>
                        <h3 class="mdl-typography--headline">Enjeux économiques</h3>
                        <p>Les enjeux d'ordre économiques sont ...</p>
                    </div>

                    <div>
                        <h3 class="mdl-typography--headline">Les enjeux organisationnels</h3>
                        <p>Les enjeux d'ordre organisationnels sont ...</p>
                    </div>
                </div>

                <div id="ccl" class="content-part parallax parallax-5">
                    <h2 class="mdl-typography--display-1">Conclusion</h2>
                    <div>
                        <h3 class="mdl-typography--headline">En quelque mots</h3>
                        <p>La conclusion est la suivante ...</p>
                    </div>
                </div>
                
                <!-- FOOTER -->
                <footer class="mdl-mega-footer">
                    <span>Copyright</span>
                </footer>
                <!-- END FOOTER -->
                
            </main>
            <!-- END CONTENT -->
        </div>
        <!-- END LAYOUT -->
        
        <!-- JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/material.min.js"></script>
        <script src="js/myscript.js"></script>
    </body>
</html>