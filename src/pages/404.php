<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page non trouvée</title>
    <link rel="preload" href="styles/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <style>
        :root {
            --light-gray: #ece8f0ff;
            --black: #000;
            --white: #fff;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: var(--light-gray);
        }

        .error-container {
            text-align: center;
        }

        .error-container h1 {
            font-size: 6rem;
            font-weight: bold;
            margin: 0 0 1rem;
            padding: 0;
        }

        .error-container p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        button {
            padding: 0.5rem;
            border-radius: 0.5rem;
        }

        button a {
            text-decoration: none;
            color: var(--light-gray);
        }
    </style>
</head>

<body>
    <div class="error-container">
        <h1>404</h1>
        <p>Oops! La page que vous cherchez n'existe pas.</p>
        <button type="button" class="btn btn-primary">
            <a href="home">Retourner à l'accueil</a>
        </button>
    </div>
</body>

</html>