<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?= $title_for_layout; ?>Titre</title>
        <link href="../Public/css/materialize.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../Public/css/default.css" rel="stylesheet">
    </head>

    <body>

    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="../products/index" class="brand-logo">Bienvenue</a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <form action="search" method="get">
                            <div class="input-field">
                                <input class="search" name="search" type="search" required value="<?= (!empty($search_for_layout))?$search_for_layout:''; ?>" placeholder="Rechercher Produits...">
                                <label class="label-icon" for="search"><button class="btn-search" type="submit"><i class="material-icons">search </i></button></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </li>
                    <li><a href="../products/index"><i class="material-icons left">local_offer</i>Articles</a></li>
                    <li><a href="../users/edit"><i class="material-icons left">person</i>Profil</a></li>
                    <?= (isset($_SESSION['admin']))?'<li><a href="../admin/users/index"><i class="material-icons left">security</i>Administration</a></li>':''; ?>
                    <li><a href="../users/logout"><i class="material-icons left">power_settings_new</i>Déconnexion</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container main-container">
        <main>
            <div class="alert-flash"><?= $this->getFlash() ?></div>
            <?= $content_for_layout; ?>
        </main>
    </div>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Plus d'informations</h5>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contact</h5>
                    <ul>
                        <li>222 rue de PHP</li>
                        <li>06 06 06 06 06</li>
                        <li>Bref</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright Text
            </div>
        </div>
    </footer>
    <script src="../Public/js/materialize.min.js"></script>
    </body>
</html>
