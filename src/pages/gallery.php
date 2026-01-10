<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once __DIR__ . '/../components/head.php'; ?>
    <title>Galerie</title>

    <style>
        .gallery-item img {
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.2s;
        }

        .gallery-item:hover img {
            box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.35);
            scale: 1.1;
            animation: ease-in 15ms;
        }

        .gal-box {
            width: 430px;
            height: 284px;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-white text-black">
    <?php include_once __DIR__ . '/../components/header.php'; ?>

    <h1 class="text-center my-3">Galerie - Nos actions en images</h1>

    <section class="photo-gallery mb-3 fs-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="images/gallery/children-solidarity.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="children solidarity" />

                    <img src="images/gallery/great-place-to-collab.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="great place to collab" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="images/gallery/around-same-tree.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="people around same tree" />

                    <img src="images/gallery/do-something-great.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="do something great" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="images/gallery/seeking-human-kindness.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="seeking human kindness" />

                    <img src="images/gallery/come-join-us.jpg" class="w-100 shadow-1-strong rounded mb-4"
                        alt="come join us" />
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../components/footer.php'; ?>
    <?php include_once __DIR__ . '/../components/scripts.php'; ?>
</body>

</html>