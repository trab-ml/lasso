<!doctype html>
<html lang="fr">

<head>
    <?php
    include_once __DIR__ . '/../components/head.php';
    include_once __DIR__ . '/../components/weather_api.php';
    ?>
    <link rel="stylesheet" type="text/css" href="styles/home.css">
    <link rel="stylesheet" type="text/css" href="styles/partners.css">
</head>

<body>
    <?php include_once __DIR__ . '/../components/header.php'; ?>

    <main id="main-section" class="main-section custom-font grid-item-main fs-4 mb-3">
        <section class="container">
            <h1 class="text-center my-3">Notre histoire</h1>

            <div class="my-0 px-4 text-start content-container">
                <p class="mx-0 my-2 intro-text">
                    <strong>L'Asso</strong> est née d'une conviction simple mais essentielle :
                    l'éducation est un droit fondamental et un levier puissant pour transformer
                    les vies et les sociétés.
                    Dans un monde où l'accès au savoir reste inégal, nous avons choisi d'agir pour
                    permettre à chacun de développer ses compétences, sa créativité et son esprit
                    critique.
                </p>
            </div>
        </section>
    </main>

    <?php include_once __DIR__ . '/../components/footer.php'; ?>
    <?php include_once __DIR__ . '/../components/scripts.php'; ?>
</body>

</html>