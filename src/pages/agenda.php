<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Agenda</title>
    <?php include_once __DIR__ . '/../components/head.php'; ?>
</head>

<body>
    <?php include_once __DIR__ . '/../components/header.php'; ?>

    <main>
        <section class="pb-3">
            <div class="container">
                <div class="row justify-content-center text-center my-3">
                    <div class="col-xl-9 col-xxl-8">
                        <h1 class="heading1">Notre agenda</h1>
                        <p class="lead">Les prochains rendez-vous éducatifs et solidaires de L'Asso</p>
                    </div>
                </div>

                <div class="row align-items-center gy-md-5">

                    <!-- event 1 -->
                    <div class="col-md-6">
                        <div class="mt-4 mt-md-0">
                            <img alt="Journées de sensibilisation à l'éducation"
                                class="img-fluid rounded my-md-0 my-4"
                                src="images/rectangle-wide.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-primary fw-semibold text-decoration-none">Éducation & Sensibilisation</p>
                        <h3 class="heading3">Journées de sensibilisation à l'éducation</h3>
                        <p class="text-muted">Samedi 10 et dimanche 18 janvier 2026</p>
                        <div class="my-1 my-lg-2 fs-6 lh-sm lh-lg-base">
                            <ul>
                                <li>Ateliers pédagogiques et échanges autour de l'apprentissage</li>
                                <li>Présentations de projets éducatifs menés par l'association</li>
                                <li>Conférences et rencontres avec des intervenants engagés</li>
                            </ul>
                        </div>
                        <a class="btn-link" href="#" target="_blank">En savoir plus</a>
                    </div>

                    <!-- event 2 -->
                    <div class="col-md-6">
                        <div class="mt-4 mt-md-0">
                            <img alt="Journée découverte et partage"
                                class="img-fluid rounded my-md-0 my-4"
                                src="images/rectangle-wide.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-primary fw-semibold text-decoration-none">Découverte & Partage</p>
                        <h3 class="heading3">Journée découverte et échanges éducatifs</h3>
                        <p class="text-muted">Samedi 02 Mai 2026</p>
                        <p>
                            Rencontres, discussions et retours d'expérience autour de projets éducatifs
                            innovants et solidaires.
                        </p>
                        <p>
                            Inscriptions : <a href="mailto:contact@lasso.org">contact@lasso.org</a>
                        </p>
                    </div>

                    <!-- event 3 -->
                    <div class="col-md-6">
                        <div class="mt-4 mt-md-0">
                            <img alt="L'Asso en fête" class="img-fluid rounded my-md-0 my-4"
                                src="images/rectangle-wide.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-primary fw-semibold text-decoration-none">Évènement solidaire</p>
                        <h3 class="heading3">L'Asso en fête</h3>
                        <p class="text-muted">Dimanche 25 janvier 2026</p>
                        <p>
                            Un moment convivial pour rassembler bénévoles, partenaires et bénéficiaires
                            autour des valeurs de l'éducation et du partage.
                        </p>
                    </div>

                    <!-- event 4 -->
                    <div class="col-md-6">
                        <div class="mt-4 mt-md-0">
                            <img alt="Assemblée générale de L'Asso" class="img-fluid rounded my-md-0 my-4"
                                src="images/assembleeGenerale.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-primary fw-semibold text-decoration-none">Vie associative</p>
                        <h3 class="heading3">Assemblée générale</h3>
                        <p class="text-muted">Février 2025</p>
                        <p>
                            Présentation du bilan, des projets à venir et échanges avec les membres
                            de l'association.
                        </p>
                    </div>

                    <!-- information letter -->
                    <div class="col-md-6">
                        <div class="mt-4 mt-md-0">
                            <a href="assets/lettre-d'information-L'Asso.pdf" target="_blank" rel="noopener noreferrer">
                                <img alt="Lettre d'information de L'Asso" class="img-fluid rounded my-md-0 my-4"
                                    src="images/rectangle-wide.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-primary fw-semibold text-decoration-none">Information</p>
                        <h3 class="heading3">
                            <a href="assets/lettre-d'information-L'Asso.pdf" target="_blank">
                                Lettre d'information
                            </a>
                        </h3>
                        <p>
                            Restez informé des actions, projets et évènements de L'Asso.
                        </p>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include_once __DIR__ . '/../components/footer.php'; ?>
    <?php include_once __DIR__ . '/../components/scripts.php'; ?>
</body>

</html>