<!doctype html>
<html lang="fr">
    <!--<div id="cursor" style="transform: translate3d(153.4px, 2.4px, 0px);" class="">
        <div class="cursor__circle" style="transform: rotate(-180deg) scale(1);"></div>
    </div>-->
    <head>
        <meta name="google-site-verification" content="j8sfEn45m61C-HJoqygoOb1T3lqc-gongaHzvKGuKYs" />
        <meta name="robots" content="noindex, nofollow">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title></title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Crete+Round">
        <link rel="stylesheet" href="src/css/style.css">

        <script src="src/js/loadScript.js"></script>
        <script src="src/js/Class/RequestManager.js"></script>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <h1>Portfolio<span class="bleu">.</span> <span class="nom_pren">BOITTE Enzo</span></h1>
                <nav>
                    <ul>
                        <li><a>Accueil</a></li>
                        <li><a>Mes Competences</a></li>
                        <li><a>Mes Projets</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="content">
            <section id="bandeau">
                <div class="wrapper">
                    <h2>Je transforme les défis techniques<br><strong>en innovations performantes</strong></h2>
                </div>
            </section>
            <section id="etapes">
                <div class="wrapper">
                    <ul>
                        <li id="etape1">
                            <h4>Planifier</h4>
                            <!--<div class="separator"></div>
                            <p>.</p>-->
                        </li>
                        <li id="etape2">
                            <h4>Organiser</h4>
                            <!--<div class="separator"></div>
                            <p>.</p>-->
                        </li>
                        <li id="etape3">
                            <h4>Rapide</h4>
                            <!--<div class="separator"></div>
                            <p>.</p>-->
                        </li>
                    </ul>
                </div>

            </section>
            <section id="offres">
                <div class="backdrop"></div>
                <h4>Découvrez mes compétences</h4>
                <div class="separator"></div>
                <div id="articles" class="articles">
                    <div id="wrapper-arts" class="wrapper">
                        <article id="art1" class="scale-80">
                            <div class="texte_article">
                                <img src="src/assets/images/css.png">
                                <h4>Css</h4>
                            </div>
                        </article>
                        <article id="art2">
                            <div class="texte_article">
                                <img src="src/assets/images/html.png">
                                <h4>HTML</h4>
                            </div>
                        </article>
                        <article id="art3" class="scale-80">
                            <div class="texte_article">
                                <img src="src/assets/images/js.png">
                                <h4>JavaScript</h4>
                            </div>
                        </article>
                    </div>
                </div>
                <a href="#">Et plus encore !</a>
            </section>
            <section id="contact">
                <div class="wrapper">
                    <h3>Contactez-moi</h3>
                    <div class="separator"></div>
                    <div class="info">
                        <p>Architecte de solutions numériques polyvalent, je conçois des systèmes complets du frontend au backend, maîtrisant une vaste palette de langages de programmation et d’outils logiciels. Avec une maîtrise en réseaux et matériel informatique.</p>
                        <form method="post">
                            <label for="name">Nom</label>
                            <input type="text" id="name" placeholder="Votre nom">

                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" pattern="^\+?[\d\s]{1,}(?:[\s.-][\d\s]{2,})*$" placeholder="Votre numéro de telephone">

                            <label for="email">Email</label>
                            <input type="text" id="email" placeholder="Votre email">

                            <label for="desc">Desciption</label>
                            <input type="text" id="desc" placeholder="Votre description">

                            <input type="submit" value="Envoyer" class="button2">

                        </form>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <div class="wrapper">
                <h1>Portfolio<span class="bleu">.</span> <span class="nom_pren">BOITTE Enzo</span></h1>
                <div class="copyright">Copyright © Tous droits réservés.</div>
            </div>
        </footer>
    </body>
    <script src="src/js/index.js"></script>
</html>