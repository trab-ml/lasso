<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Mentions légales</title>
    <?php include_once __DIR__ . "/../components/head.php"; ?>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <?php include_once __DIR__ . "/../components/header.php"; ?>

    <main class="container py-5">
        <h1 class="text-center mb-4">Mentions légales</h1>

        <section class="mb-4">
            <h2 class="h5 fw-bold">Propriétaire du site</h2>
            <p>
                <strong>L'Asso</strong><br>
                Association humanitaire œuvrant pour l'accès à l'éducation pour tous.<br>
                Siège social : 26 Rue de l'éducation, 59200 Lille - France.<br>
                Numéro RNA : W123456789<br>
                Numéro SIREN : 123456789<br>
                Contact :
                <a href="mailto:contact@lasso.org" class="text-primary fw-bold">
                    contact@lasso.org
                </a>
            </p>
        </section>

        <section class="mb-4">
            <h2 class="h5 fw-bold">Hébergement</h2>
            <p>
                Le site est hébergé par : Amazing Hosting Service<br>
                Adresse de l'hébergeur : 26 Rue de l'hébergement, 59200 Lille - France
            </p>
        </section>

        <section class="mb-4">
            <h2 class="h5 fw-bold">Protection des données personnelles</h2>
            <p>
                Conformément au Règlement Général sur la Protection des Données (RGPD),
                L'Asso s'engage à respecter la vie privée des utilisateurs.
            </p>
            <ul>
                <li>Aucune donnée personnelle n'est collectée à des fins commerciales</li>
                <li>Le site ne propose pas de création de compte utilisateur</li>
                <li>Les données transmises via le formulaire de contact sont utilisées uniquement pour répondre aux
                    demandes</li>
                <li>Aucune information n'est cédée ou vendue à des tiers</li>
            </ul>
        </section>

        <section class="mb-4">
            <h2 class="h5 fw-bold">Droits d'utilisation</h2>
            <p>
                L'ensemble des contenus présents sur ce site (textes, images, logos,
                graphismes) est protégé par le droit de la propriété intellectuelle.
                Toute reproduction, diffusion ou utilisation sans autorisation préalable
                de L'Asso est strictement interdite.
            </p>
        </section>

        <section class="mb-4">
            <h2 class="h5 fw-bold">Vos droits</h2>
            <p>
                Conformément à la législation en vigueur, vous disposez d'un droit d'accès,
                de rectification et de suppression des données vous concernant.
            </p>
            <ul>
                <li>
                    Par email :
                    <a href="mailto:contact@lasso.org" class="text-primary">
                        contact@lasso.org
                    </a>
                </li>
                <li>
                    Via la page
                    <a href="contact" class="text-primary">Contact</a>
                </li>
            </ul>
        </section>

        <section>
            <h2 class="h5 fw-bold">Ressources externes</h2>
            <p>
                <a href="https://icons8.com/icon/118497/facebook" target="_blank" class="text-primary">
                    Icône Facebook
                </a>
                et
                <a href="https://icons8.com/icon/Xy10Jcu1L2Su/instagram" target="_blank" class="text-primary">
                    Icône Instagram
                </a>
                par
                <a href="https://icons8.com" target="_blank" class="text-primary">
                    Icons8
                </a>.<br>
                <a href="https://unsplash.com/fr" target="_blank" class="text-primary">
                    Unsplash
                </a>.
            </p>
        </section>

    </main>

    <?php include_once __DIR__ . "/../components/footer.php"; ?>
    <?php include_once __DIR__ . "/../components/scripts.php"; ?>
</body>

</html>