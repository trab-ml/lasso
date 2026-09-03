<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
    content="L'Asso, une association humanitaire engagée pour l'accès à l'éducation pour tous. Au quotidien, nous œuvrons pour révéler son potentiel !">
<meta name="google-site-verification" content="OiyVLS4mHZzellHklWRlakkcrgb85aoqPeC9HSE3iRQ" />
<meta name="robots" content="index,follow">
<meta name="referrer" content="strict-origin-when-cross-origin">

<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:url" content="https://lasso-v1-0-0.onrender.com/">
<meta property="og:site_name" content="L'Asso">
<meta property="og:title" content="L'Asso, une association engagée pour l'accès à l'éducation">
<meta property="og:description"
    content="L'Asso, une association humanitaire engagée pour l'accès à l'éducation pour tous. Au quotidien, nous œuvrons pour révéler son potentiel !">
<meta property="og:image" content="https://lasso-v1-0-0.onrender.com/tea-homepage.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/png">
<meta property="og:image:alt" content="Ethicarch homepage">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="L'Asso | L'ignorance est une TERRE sans lumière !">
<meta name="twitter:description"
    content="L'Asso, une association humanitaire engagée pour l'accès à l'éducation pour tous. Au quotidien, nous œuvrons pour révéler son potentiel !">
<meta name="twitter:image" content="https://lasso-v1-0-0.onrender.com/portfolio-homepage.png">

<title>L'Asso | L'ignorance est une TERRE sans lumière !</title>

<link rel="canonical" href="https://lasso-v1-0-0.onrender.com/">
<link rel="stylesheet" href="styles/bootstrap.min.css">
<link rel="stylesheet" href="styles/main.css">

<!-- critical css -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: grid;
        grid-template-rows: repeat(3, auto);
        box-sizing: border-box;
        font-family: "Nunito Sans", sans-serif;
    }

    /* Loading overlay */
    #page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: opacity 0.3s ease-out;
    }

    #page-loader.hidden {
        opacity: 0;
        pointer-events: none;
    }

    .spinner-grow {
        display: inline-block;
        width: 3rem;
        height: 3rem;
        vertical-align: text-bottom;
        background-color: #0d6efd;
        border-radius: 50%;
        opacity: 0;
        animation: spinner-grow 0.75s linear infinite;
    }

    @keyframes spinner-grow {
        0% {
            transform: scale(0);
            opacity: 0;
        }

        50% {
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 0;
        }
    }

    .visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }
</style>

