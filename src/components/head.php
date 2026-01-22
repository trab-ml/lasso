<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="L'Asso, une association humanitaire engagée pour l'accès à 
    l'éducation pour tous. Convaincus que le savoir est un levier fondamental d'émancipation et de développement, 
    nous œuvrons chaque jour pour offrir à chacun les moyens d'apprendre, de comprendre et de révéler son potentiel">

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

<link rel="stylesheet" href="styles/bootstrap.min.css">
<link rel="stylesheet" href="styles/main.css">

<title>L'Asso</title>
