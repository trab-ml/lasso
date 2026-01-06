<!doctype html>
<html lang="fr">

<head>
    <title>Accueil</title>
    <?php include_once __DIR__ . '/../components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="styles/home.css">
</head>

<body>
    <?php include_once __DIR__ . '/../components/header.php'; ?>

    <main id="main-section" class="main-section custom-font grid-item-main">
        <section id="home-main-section" class="home-main-section m-0">
            <h1 class="heading1 my-3">Accueil</h1>
            <div class="my-0 px-4 text-start fs-4 content-container">
                <p class="mx-0 my-2 intro-text">
                    Bienvenue sur le site de <strong>L’Asso</strong>, une association humanitaire engagée pour
                    l’accès à l’éducation pour tous. <br>
                    Convaincus que le savoir est un levier fondamental d’émancipation et de développement,
                    nous œuvrons chaque jour pour offrir à chacun les moyens d’apprendre, de comprendre et
                    de révéler son potentiel. <br>
                    Depuis sa création, L’Asso met en place des actions solidaires, éducatives et inclusives
                    afin de réduire les inégalités et de favoriser la transmission des connaissances,
                    partout où elle est nécessaire.
                </p>
                <section>
                    <h2 class="heading2">Contactez-nous</h2>
                    <p>
                        Vous souhaitez en savoir plus sur nos actions, proposer un projet ou collaborer
                        avec nous ?
                        <a href="question">Contactez-nous</a>, nous serons ravis d’échanger avec vous.
                    </p>
                </section>
                <section>
                    <h2 class="heading2">Rejoignez-nous</h2>
                    <p>
                        Que vous soyez étudiant, enseignant, bénévole ou simplement sensible à la cause de
                        l’éducation, vous pouvez vous engager à nos côtés et
                        <a href="#" target="_blank">rejoindre L’Asso</a>.
                    </p>
                </section>
                <section>
                    <h2 class="heading2">Soutenez-nous</h2>
                    <p>
                        En faisant un don, vous contribuez directement au financement de projets éducatifs
                        et solidaires.
                        <a href="#" target="_blank">Faire un don</a>.
                    </p>
                    <p>
                        Ensemble, ouvrons l’accès au savoir et libérons le potentiel de chacun.
                    </p>
                </section>
                <section>
                    <h2 class="heading2">Galerie</h2>
                    <p>
                        Découvrez nos actions, événements et projets éducatifs dans notre
                        <a href="gallery">galerie</a>.
                    </p>
                </section>
            </div>
        </section>
    </main>

    <?php include_once __DIR__ . '/../components/footer.php'; ?>
    <?php include_once __DIR__ . '/../components/scripts.php'; ?>
</body>

</html>