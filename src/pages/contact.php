<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact</title>
    <?php include_once __DIR__ . '/../components/head.php'; ?>
    <style>
        #contact {
            background: var(--contact-form-bg);
            border-radius: 1.5rem;
        }

        #send {
            width: 5rem;
            border: 1px solid;
            color: var(--heading-violet);
            background: #fff;
        }

        #send:hover {
            background: var(--heading-violet);
            color: #fff;
        }

        #contact-modal-trigger {
            width: 60px;
        }

        #contact-modal-trigger img {
            width: 100%;
        }

        @media (max-width: 768px) {
            #contact {
                margin-top: 1rem;
            }

            #contact-modal-trigger {
                margin-left: -1rem;
                margin-top: -1.75rem;
            }
        }
    </style>
</head>

<body>
    <?php include_once __DIR__ . '/../components/header.php'; ?>

    <main>
        <div class="container w-100 my-2 py-0 px-0">
            <div class="row w-sm-75 w-md-100 d-flex flex-column justify-content-center align-items-center mx-auto">
                <h1 class="m-0 text-center">Une question ? Un projet ?</h1>
                <p class="my-1 text-center fs-4">
                    Vous souhaitez en savoir plus sur <strong>L'Asso</strong>, nos actions éducatives,
                    proposer une idée, devenir bénévole ou nous faire part de vos suggestions ?
                    N'hésitez pas à nous contacter, nous vous répondrons dans les meilleurs délais.
                </p>
                <p id="response" class="my-1 fw-semibold text-center"></p>

                <div id="contact" class="position-relative col-8 col-sm-12 col-md-8 col-lg-6 px-md-5 py-3 border">
                    <div id="contact-modal-trigger" class="position-absolute top-0 start-0 mx-1">
                        <img src="images/icon/phone.png" alt="smartphone" data-bs-toggle="modal"
                            data-bs-target="#contactModal" />
                    </div>

                    <form action="" method="post" id="emailForm" class="needs-validation mt-3 px-md-5">
                        <div class="row g-2">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="firstName" name="firstName"
                                    placeholder="Prénom" required minlength="2" autocomplete title="Prénom requis.">
                            </div>

                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nom"
                                    required minlength="2" autocomplete title="Nom requis.">
                            </div>

                            <div class="col-12">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="vous@exemple.com" required autocomplete
                                    title="Adresse email invalide.">
                            </div>

                            <div class="col-12">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="0605040302"
                                    pattern="^\+?\d{1,3}(\s?\d){7,}$" minlength="8" title="Téléphone invalide"
                                    autocomplete>
                            </div>

                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="motif" name="motif"
                                    placeholder="Sujet de votre demande" required minlength="5" autocomplete
                                    title="Sujet valide requis.">
                            </div>

                            <div class="col-sm-12">
                                <textarea class="form-control" id="message" name="message" rows="3" minlength="30"
                                    placeholder="Votre message" required title="Message valide requis."></textarea>
                            </div>

                            <div class="col-sm-12">
                                <input class="form-check-input" type="checkbox" id="adherent" name="adherent">
                                <label class="form-check-label ms-1 cursor-pointer" for="adherent">
                                    Je suis membre / bénévole de L'Asso
                                </label>
                            </div>

                            <input type="hidden" name="returnUrl" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES) ?>">

                            <button id="send" class="my-1 mx-auto btn text-capitalize" type="submit">
                                Envoyer
                            </button>
                        </div>
                    </form>
                </div>

                <div class="position-relative col-8 col-sm-12 col-md-8 col-lg-6 px-md-5">
                    <section 
                        id="adresse" 
                        class="w-75 mx-auto mt-2 d-flex flex-column justify-content-center align-items-center fw-semibold lh-1 rounded-3 mx-0 px-0 border border-4 border-black">
                        <h5>Vous souhaitez nous rencontrer ?</h5>
                        <p class="my-1">Siège de L'Asso</p>
                        <p class="my-1">20 Rue de l'Éducation,</p>
                        <p class="my-1">59000 Lille</p>
                    </section>
                </div>

                <div id="contactModal" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nous appeler</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Vous pouvez également nous joindre par téléphone au :
                                    <strong>01 23 45 67 89</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once __DIR__ . '/../components/footer.php'; ?>
    <?php include_once __DIR__ . '/../components/scripts.php'; ?>
    <script src="scripts/sendEmail.js"></script>
</body>

</html>