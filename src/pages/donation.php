<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Donner</title>
    <?php include_once __DIR__ . '/../components/head.php'; ?>
    <style>
        .principal {
            font-size: 1.5rem;

            @media (min-width: 992px) {
                font-size: 1.3rem;
            }

            @media (min-width: 1200px) {
                font-size: 1.75rem;
            }
        }
    </style>
</head>

<body>
    <?php include_once __DIR__ . '/../components/header.php'; ?>

    <main>
        <section class="main-section d-flex flex-column align-items-center justify-content-center m-0">
            <h1 class="my-3">Soutenir nos actions</h1>

            <div class="container d-flex align-items-center justify-content-between mx-0 py-0 principal">
                <div class="row d-flex align-items-center justify-content-between m-0 p-0">

                    <div class="col-lg-5 d-flex flex-column align-items-center m-0 pe-2">
                        <img src="images/solidarity.jpg" alt="don pour l'éducation"
                            class="img--fluid border border-solid rounded-5 w-100 h-100" />
                    </div>

                    <div class="col-lg-7 m-0 p-0 ps-2 text-start">
                        <p class="mx-0 my-0 lh-lg">
                            Soutenir <strong>L'Asso</strong>, c'est investir dans l'éducation comme moteur
                            d'émancipation, d'égalité et d'avenir.
                            Partout dans le monde, de nombreuses personnes font encore face à un accès limité
                            aux ressources éducatives, à l'accompagnement pédagogique ou aux outils
                            nécessaires pour apprendre et se développer.
                        </p>

                        <p class="mx-0 my-3 lh-lg">
                            Grâce à votre soutien, nous pouvons mettre en place des projets éducatifs concrets :
                            ateliers pédagogiques, accès à des ressources de qualité, accompagnement des
                            apprenants et actions de sensibilisation.
                            Les dons permettent de financer directement ces initiatives et de renforcer
                            l'impact de nos actions sur le terrain.
                        </p>

                        <div class="px-0">
                            <span>Vous pouvez agir à nos côtés de plusieurs manières :</span>
                            <ul>
                                <li>
                                    En soutenant financièrement un projet éducatif via un
                                    <a href="#" class="fs-4 fw-semibold" target="_blank">
                                        don solidaire
                                    </a>.
                                </li>
                                <li>
                                    En vous engageant à nos côtés par le biais du
                                    <strong>mécénat de compétences</strong> :
                                    partage de savoir-faire, accompagnement pédagogique,
                                    aide technique ou logistique.
                                </li>
                            </ul>
                        </div>

                        <p class="mx-0 my-3 lh-lg">
                            Chaque contribution, quelle que soit sa forme, participe à ouvrir de nouvelles
                            opportunités d'apprentissage et à révéler le potentiel de chacun.
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