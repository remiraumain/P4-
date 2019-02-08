<!DOCTYPE html>
<html>
<head>
    <title>
        <?= isset($title) ? $title : 'Jean Forteroche' ?>
    </title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="/materialize/css/materialize.css" type="text/css" />
    <!-- <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=8pfy2ce1w2wznu2sl4peivm2990w6ck75m8ozvipust9m6kn"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</head>

<body>
<div id="wrap">
    <header>
        <h1><a href="/">Jean Forteroche</a></h1>
        <p>P4 - Openclassrooms</p>
    </header>

    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
            <?php if ($user->isAuthenticated()) { ?>
                <li><a href="/admin/">Admin</a></li>
                <li><a href="/admin/billet-insert.html">Ajouter un billet</a></li>
                <li><a href="/admin/disconnect.html">Déconnexion</a></li>
            <?php } ?>
        </ul>
    </nav>

    <div id="content-wrap">
        <section id="main">
            <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>

            <?= $content ?>
        </section>
    </div>

    <footer></footer>
</div>
</body>
</html>