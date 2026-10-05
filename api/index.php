<?php

include_once 'Traitements.php';

$groupe = "Dev 104";
$plt = "Vercel";

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lina Karkri | Portfolio Développement Digital</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    >

    <style>

        /* =========================================================
           VARIABLES
        ========================================================= */

        :root {

            --bg: #f6f2ec;
            --bg-light: #fbf9f5;

            --card: #e8ded2;

            --accent: #c98f8a;
            --accent-dark: #b87974;
            --accent-light: #f2dada;

            --brown: #8b7065;
            --brown-dark: #604b43;

            --text: #1e1c19;
            --text-secondary: #746d67;

            --white: #ffffff;

            --border: rgba(116, 109, 103, 0.20);

            --shadow: 0 12px 35px rgba(70, 55, 45, 0.08);

        }


        /* =========================================================
           RESET
        ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {

            font-family: 'Montserrat', sans-serif;

            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(201,143,138,0.08),
                    transparent 30%
                ),
                var(--bg);

            color: var(--text);

            line-height: 1.6;
        }


        a {
            text-decoration: none;
            color: inherit;
        }


        /* =========================================================
           CONTAINER
        ========================================================= */

        .container {

            width: min(1200px, 92%);

            margin: auto;
        }


        /* =========================================================
           NAVBAR
        ========================================================= */

        .navbar {

            position: sticky;

            top: 0;

            z-index: 1000;

            background: rgba(246,242,236,0.94);

            backdrop-filter: blur(12px);

            border-bottom: 1px solid var(--border);
        }


        .nav-content {

            min-height: 75px;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .logo {

            font-family: 'Playfair Display', serif;

            font-size: 1.7rem;

            font-weight: 700;

            color: var(--text);
        }


        .logo span {
            color: var(--accent);
        }


        .nav-links {

            display: flex;

            gap: 28px;

            align-items: center;
        }


        .nav-links a {

            font-size: 0.82rem;

            font-weight: 600;

            color: var(--text-secondary);

            transition: 0.3s;
        }


        .nav-links a:hover {
            color: var(--accent-dark);
        }


        /* =========================================================
           HERO
        ========================================================= */

        .hero {

            min-height: 680px;

            padding: 70px 0 80px;

            display: flex;

            align-items: center;
        }


        .hero-grid {

            display: grid;

            grid-template-columns: 1.1fr 0.9fr;

            align-items: center;

            gap: 70px;
        }


        .hero-small {

            text-transform: uppercase;

            letter-spacing: 4px;

            font-size: 0.72rem;

            font-weight: 700;

            color: var(--accent-dark);

            margin-bottom: 18px;
        }


        .hero h1 {

            font-family: 'Playfair Display', serif;

            font-size: clamp(3rem, 6vw, 5.4rem);

            line-height: 1.02;

            font-weight: 600;

            margin-bottom: 22px;
        }


        .hero h1 span {
            color: var(--accent-dark);
        }


        .hero-description {

            max-width: 600px;

            font-size: 1rem;

            color: var(--text-secondary);

            margin-bottom: 28px;
        }


        .hero-buttons {

            display: flex;

            flex-wrap: wrap;

            gap: 12px;
        }


        /* =========================================================
           BUTTONS
        ========================================================= */

        .btn {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 9px;

            padding: 12px 22px;

            border-radius: 30px;

            background: var(--accent);

            color: white;

            font-size: 0.82rem;

            font-weight: 600;

            border: 1px solid var(--accent);

            transition: 0.3s;

            cursor: pointer;
        }


        .btn:hover {

            background: var(--accent-dark);

            transform: translateY(-2px);

            box-shadow: 0 8px 20px rgba(201,143,138,0.25);
        }


        .btn-outline {

            background: transparent;

            color: var(--brown-dark);

            border-color: var(--brown);
        }


        .btn-outline:hover {

            background: var(--brown);

            color: white;
        }


        /* =========================================================
           PHOTO
        ========================================================= */

        .hero-photo-wrapper {

            display: flex;

            justify-content: center;

            position: relative;
        }


        .hero-photo-wrapper::before {

            content: "";

            position: absolute;

            width: 330px;

            height: 500px;

            background: var(--accent-light);

            border-radius: 180px 180px 40px 40px;

            transform: rotate(5deg);

            z-index: 0;
        }


        .hero-photo {

            position: relative;

            z-index: 2;

            width: 330px;

            height: 510px;

            object-fit: cover;

            object-position: center top;

            border-radius: 170px 170px 35px 35px;

            border: 8px solid var(--bg-light);

            box-shadow: 0 25px 55px rgba(70,55,45,0.18);
        }


        .photo-label {

            position: absolute;

            z-index: 5;

            bottom: 30px;

            left: 20px;

            background: rgba(255,255,255,0.92);

            padding: 12px 18px;

            border-radius: 20px;

            box-shadow: var(--shadow);

            font-size: 0.75rem;

            font-weight: 600;
        }


        /* =========================================================
           SECTION
        ========================================================= */

        section {

            padding: 80px 0;
        }


        .section-intro {

            margin-bottom: 35px;
        }


        .section-label {

            text-transform: uppercase;

            letter-spacing: 4px;

            color: var(--accent-dark);

            font-size: 0.7rem;

            font-weight: 700;

            margin-bottom: 8px;
        }


        .section-title {

            font-family: 'Playfair Display', serif;

            font-size: clamp(2.2rem, 4vw, 3.2rem);

            line-height: 1.1;
        }


        .section-description {

            margin-top: 10px;

            color: var(--text-secondary);

            max-width: 700px;
        }


        /* =========================================================
           INTRO CARD
        ========================================================= */

        .intro-card {

            background: var(--bg-light);

            border: 1px solid var(--border);

            border-radius: 28px;

            padding: 35px;

            box-shadow: var(--shadow);

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 30px;
        }


        .intro-card h3 {

            font-family: 'Playfair Display', serif;

            font-size: 1.7rem;

            margin-bottom: 12px;
        }


        .intro-card p {

            color: var(--text-secondary);

            font-size: 0.9rem;
        }


        .info-list {

            display: grid;

            gap: 13px;
        }


        .info-item {

            display: flex;

            align-items: center;

            gap: 12px;

            color: var(--text-secondary);

            font-size: 0.85rem;
        }


        .info-item i {

            width: 34px;

            height: 34px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: var(--accent-light);

            color: var(--accent-dark);

            border-radius: 50%;
        }


        /* =========================================================
           GRID
        ========================================================= */

        .grid {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 22px;
        }


        /* =========================================================
           CARD
        ========================================================= */

        .card {

            background: rgba(255,255,255,0.60);

            border: 1px solid var(--border);

            border-radius: 24px;

            padding: 28px;

            box-shadow: var(--shadow);

            transition: 0.35s;

            position: relative;

            overflow: hidden;
        }


        .card::before {

            content: "";

            position: absolute;

            left: 0;

            top: 0;

            width: 4px;

            height: 100%;

            background: var(--accent);

            opacity: 0;

            transition: 0.3s;
        }


        .card:hover {

            transform: translateY(-5px);

            box-shadow: 0 20px 45px rgba(70,55,45,0.12);
        }


        .card:hover::before {
            opacity: 1;
        }


        .card-icon {

            width: 45px;

            height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: var(--accent-light);

            color: var(--accent-dark);

            margin-bottom: 17px;

            font-size: 1rem;
        }


        .card h3 {

            font-family: 'Playfair Display', serif;

            font-size: 1.35rem;

            margin-bottom: 9px;
        }


        .card p {

            color: var(--text-secondary);

            font-size: 0.82rem;

            margin-bottom: 18px;
        }


        /* =========================================================
           FORMS
        ========================================================= */

        .form-group {

            margin-bottom: 15px;
        }


        label {

            display: block;

            font-size: 0.72rem;

            font-weight: 600;

            color: var(--text-secondary);

            margin-bottom: 7px;
        }


        .input {

            width: 100%;

            padding: 12px 15px;

            border-radius: 12px;

            border: 1px solid var(--border);

            background: var(--bg-light);

            color: var(--text);

            font-family: inherit;

            outline: none;

            transition: 0.3s;
        }


        .input:focus {

            border-color: var(--accent);

            box-shadow: 0 0 0 3px rgba(201,143,138,0.12);
        }


        .form-actions {

            display: flex;

            gap: 10px;

            flex-wrap: wrap;

            margin-top: 18px;
        }


        /* =========================================================
           MODULES
        ========================================================= */

        .modules-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }


        .module-card {

            background: var(--card);

            border-radius: 22px;

            padding: 25px;

            border: 1px solid rgba(116,109,103,0.12);

            transition: 0.3s;
        }


        .module-card:hover {

            transform: translateY(-5px);

            background: #eee4da;
        }


        .module-number {

            color: var(--accent-dark);

            font-size: 0.7rem;

            font-weight: 700;

            letter-spacing: 2px;

            margin-bottom: 8px;
        }


        .module-card h3 {

            font-family: 'Playfair Display', serif;

            font-size: 1.25rem;

            margin-bottom: 8px;
        }


        .module-card p {

            color: var(--text-secondary);

            font-size: 0.78rem;

            margin-bottom: 18px;
        }


        /* =========================================================
           LINKS
        ========================================================= */

        .links {

            display: flex;

            flex-wrap: wrap;

            gap: 9px;

            margin-top: 15px;
        }


        .link {

            width: 38px;

            height: 38px;

            border-radius: 50%;

            background: var(--bg-light);

            border: 1px solid var(--border);

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 600;

            font-size: 0.8rem;

            color: var(--brown-dark);

            transition: 0.3s;
        }


        .link:hover {

            background: var(--accent);

            color: white;

            transform: translateY(-2px);
        }


        /* =========================================================
           PROJECT CARD
        ========================================================= */

        .project-card {

            background: var(--card);

            border-radius: 25px;

            padding: 30px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 25px;
        }


        .project-card h3 {

            font-family: 'Playfair Display', serif;

            font-size: 1.7rem;

            margin-bottom: 8px;
        }


        .project-card p {

            color: var(--text-secondary);

            font-size: 0.85rem;
        }


        /* =========================================================
           CONTACT
        ========================================================= */

        .contact-grid {

            display: grid;

            grid-template-columns: 0.8fr 1.2fr;

            gap: 25px;
        }


        .contact-card {

            background: var(--bg-light);

            border: 1px solid var(--border);

            border-radius: 25px;

            padding: 30px;

            box-shadow: var(--shadow);
        }


        .contact-card h3 {

            font-family: 'Playfair Display', serif;

            font-size: 1.7rem;

            margin-bottom: 20px;
        }


        .contact-links {

            display: grid;

            gap: 14px;
        }


        .contact-link {

            display: flex;

            align-items: center;

            gap: 12px;

            color: var(--text-secondary);

            font-size: 0.82rem;

            word-break: break-word;
        }


        .contact-link i {

            width: 36px;

            height: 36px;

            flex-shrink: 0;

            display: flex;

            align-items: center;

            justify-content: center;

            background: var(--accent-light);

            color: var(--accent-dark);

            border-radius: 50%;
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        footer {

            background: var(--text);

            color: white;

            padding: 35px 0;

            margin-top: 40px;
        }


        .footer-content {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            flex-wrap: wrap;
        }


        footer p {

            font-size: 0.78rem;

            color: #cfc8c1;
        }


        .socials {

            display: flex;

            gap: 10px;
        }


        .socials a {

            width: 38px;

            height: 38px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(255,255,255,0.08);

            transition: 0.3s;
        }


        .socials a:hover {

            background: var(--accent);

            transform: translateY(-2px);
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 900px) {

            .hero-grid {

                grid-template-columns: 1fr;

                text-align: center;
            }


            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }


            .hero-buttons {
                justify-content: center;
            }


            .hero-photo-wrapper {
                margin-top: 30px;
            }


            .modules-grid {

                grid-template-columns: repeat(2, 1fr);
            }


            .contact-grid {

                grid-template-columns: 1fr;
            }
        }


        @media (max-width: 700px) {

            .nav-links {
                display: none;
            }


            .grid {

                grid-template-columns: 1fr;
            }


            .modules-grid {

                grid-template-columns: 1fr;
            }


            .intro-card {

                grid-template-columns: 1fr;
            }


            .project-card {

                flex-direction: column;

                align-items: flex-start;
            }


            .hero-photo {

                width: 280px;

                height: 430px;
            }


            .hero-photo-wrapper::before {

                width: 280px;

                height: 430px;
            }
        }

    </style>

</head>


<body>


<!-- =========================================================
     NAVBAR
========================================================= -->

<nav class="navbar">

    <div class="container nav-content">

        <a href="#" class="logo">
            Lina<span>.</span>
        </a>

        <div class="nav-links">

            <a href="#accueil">Accueil</a>

            <a href="#parcours">Mon parcours</a>

            <a href="#modules">Modules</a>

            <a href="#projets">Projets</a>

            <a href="#contact">Contact</a>

        </div>

    </div>

</nav>



<!-- =========================================================
     HERO
========================================================= -->

<section class="hero" id="accueil">

    <div class="container hero-grid">


        <div>

            <div class="hero-small">
                Portfolio personnel
            </div>


            <h1>
                Bonjour,<br>
                je suis <span>Lina Karkri</span>
            </h1>


            <p class="hero-description">

                Étudiante en deuxième année de
                <strong>Développement Digital</strong>,
                passionnée par la création web,
                le design et les nouvelles technologies.

            </p>


            <div class="hero-buttons">

                <a href="#modules" class="btn">
                    <i class="fas fa-book-open"></i>
                    Découvrir mes modules
                </a>


                <a href="#contact" class="btn btn-outline">
                    Me contacter
                </a>

            </div>

        </div>



        <!-- PHOTO -->

        <div class="hero-photo-wrapper">

            <img
                src="/linaPhoto.jpg"
                alt="Lina Karkri"
                class="hero-photo"
            >

            <div class="photo-label">
                <i class="fas fa-code"></i>
                Développement Digital
            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     PRESENTATION
========================================================= -->

<section id="parcours">

    <div class="container">

        <div class="section-intro">

            <div class="section-label">
                À propos de moi
            </div>

            <h2 class="section-title">
                Mon parcours
            </h2>

            <p class="section-description">
                Mon parcours et les compétences développées
                pendant ma formation en Développement Digital.
            </p>

        </div>



        <div class="intro-card">


            <div>

                <h3>
                    Une passion pour le digital
                </h3>

                <p>

                    Je suis <strong>Lina Karkri</strong>,
                    étudiante en deuxième année de
                    Développement Digital.

                    Je développe mes compétences dans la
                    conception, le développement web,
                    la gestion des données et les applications
                    modernes.

                </p>

            </div>



            <div class="info-list">


                <div class="info-item">

                    <i class="fas fa-user-graduate"></i>

                    <span>
                        2ème année – Développement Digital
                    </span>

                </div>


                <div class="info-item">

                    <i class="fas fa-code"></i>

                    <span>
                        Développement Web
                    </span>

                </div>


                <div class="info-item">

                    <i class="fas fa-palette"></i>

                    <span>
                        Design & création digitale
                    </span>

                </div>


                <div class="info-item">

                    <i class="fas fa-laptop-code"></i>

                    <span>
                        PHP, MySQL, JavaScript & MVC
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     PREMIER SITE + COURS + FORMULAIRES
========================================================= -->

<section>

    <div class="container">

        <div class="section-intro">

            <div class="section-label">
                Formation
            </div>

            <h2 class="section-title">
                Mes travaux
            </h2>

        </div>



        <div class="grid">


            <!-- Premier site -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-desktop"></i>
                </div>

                <h3>
                    Premier site
                </h3>

                <p>
                    Premier site du groupe
                    <strong><?= $groupe ?></strong>
                    déployé sur
                    <strong><?= $plt ?></strong>.
                </p>

            </div>



            <!-- Cours PHP -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-book"></i>
                </div>

                <h3>
                    Cours PHP
                </h3>

                <p>
                    Support de cours PHP utilisé
                    pendant la formation.
                </p>

                <a href="/php.pptx" class="btn">

                    <i class="fas fa-download"></i>

                    Télécharger le cours

                </a>

            </div>



            <!-- Communication -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-paper-plane"></i>
                </div>

                <h3>
                    Communication
                </h3>

                <p>
                    Formulaire de connexion.
                </p>


                <form
                    method="POST"
                    action="login.php"
                >

                    <div class="form-group">

                        <label>
                            Login
                        </label>

                        <input
                            type="text"
                            name="log"
                            class="input"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Password
                        </label>

                        <input
                            type="password"
                            name="pass"
                            class="input"
                        >

                    </div>


                    <div class="form-actions">

                        <input
                            type="submit"
                            name="action1"
                            value="Connexion"
                            class="btn"
                        >

                        <input
                            type="reset"
                            value="Réinitialiser"
                            class="btn btn-outline"
                        >

                    </div>

                </form>

            </div>



            <!-- Table -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-table"></i>
                </div>

                <h3>
                    Appel Table
                </h3>

                <form
                    method="POST"
                    action="index.php"
                >

                    <div class="form-group">

                        <label>
                            Nombre de lignes
                        </label>

                        <input
                            type="text"
                            name="rows"
                            class="input"
                        >

                    </div>


                    <div class="form-group">

                        <label>
                            Nombre de colonnes
                        </label>

                        <input
                            type="text"
                            name="cols"
                            class="input"
                        >

                    </div>


                    <div class="form-actions">

                        <input
                            type="submit"
                            name="action2"
                            value="Dessiner"
                            class="btn"
                        >

                        <input
                            type="reset"
                            value="Réinitialiser"
                            class="btn btn-outline"
                        >

                    </div>

                </form>


                <?php

                if (!empty($_POST['action2'])) {

                    table(
                        $_POST['rows'],
                        $_POST['cols']
                    );

                }

                ?>

            </div>



            <!-- Triangle form -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-caret-up"></i>
                </div>

                <h3>
                    Triangle via formulaire
                </h3>

                <form
                    method="POST"
                    action="index.php"
                >

                    <div class="form-group">

                        <label>
                            Nombre de lignes
                        </label>

                        <input
                            type="text"
                            name="rowst"
                            class="input"
                        >

                    </div>


                    <div class="form-actions">

                        <input
                            type="submit"
                            name="action3"
                            value="Dessiner"
                            class="btn"
                        >

                        <input
                            type="reset"
                            value="Réinitialiser"
                            class="btn btn-outline"
                        >

                    </div>

                </form>


                <?php

                if (!empty($_POST['action3'])) {

                    Triangle($_POST['rowst']);

                }

                ?>

            </div>



            <!-- Triangle liens -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-link"></i>
                </div>

                <h3>
                    Triangle via liens
                </h3>

                <p>
                    Choisissez le nombre de lignes.
                </p>


                <div class="links">

                    <?php

                    for ($i = 3; $i <= 10; $i++) {

                        echo "
                        <a
                            href='index.php?action4=$i'
                            class='link'
                        >
                            $i
                        </a>
                        ";

                    }

                    ?>

                </div>


                <?php

                if (!empty($_GET['action4'])) {

                    Triangle($_GET['action4']);

                }

                ?>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     MODULES
========================================================= -->

<section id="modules">

    <div class="container">

        <div class="section-intro">

            <div class="section-label">
                Ma formation
            </div>

            <h2 class="section-title">
                Mes modules
            </h2>

            <p class="section-description">

                Les principaux modules étudiés pendant
                ma deuxième année en Développement Digital.

            </p>

        </div>



        <div class="modules-grid">


            <!-- M201 -->

            <div class="module-card">

                <div class="module-number">
                    M201
                </div>

                <h3>
                    Préparation d’un projet web
                </h3>

                <p>
                    Préparation, organisation et réalisation
                    d'un projet web.
                </p>

                <a href="/At1.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Voir le travail
                </a>

            </div>



            <!-- M202 -->

            <div class="module-card">

                <div class="module-number">
                    M202
                </div>

                <h3>
                    Approche agile
                </h3>

                <p>
                    Organisation et gestion agile
                    des projets digitaux.
                </p>

                <a href="/At2.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Voir le travail
                </a>

            </div>



            <!-- M203 -->

            <div class="module-card">

                <div class="module-number">
                    M203
                </div>

                <h3>
                    Gestion des données
                </h3>

                <p>
                    Gestion des données, fichiers,
                    bases de données et MySQL.
                </p>

                <a href="/At4.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Voir le travail
                </a>

            </div>



            <!-- M204 -->

            <div class="module-card">

                <div class="module-number">
                    M204
                </div>

                <h3>
                    Développement front-end
                </h3>

                <p>
                    Création d'interfaces web avec
                    HTML, CSS et JavaScript.
                </p>

                <a href="/At11.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Voir le travail
                </a>

            </div>



            <!-- M205 -->

            <div class="module-card">

                <div class="module-number">
                    M205
                </div>

                <h3>
                    Développement back-end
                </h3>

                <p>
                    Développement côté serveur avec
                    PHP, POO, Sessions et MVC.
                </p>

                <a href="/At15.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Voir le travail
                </a>

            </div>



            <!-- M206 -->

            <div class="module-card">

                <div class="module-number">
                    M206
                </div>

                <h3>
                    Création d’une application Cloud native
                </h3>

                <p>
                    Création et déploiement d'applications
                    modernes sur le Cloud.
                </p>

                <a
                    href="https://efruits.vercel.app/acc.php"
                    target="_blank"
                    class="btn"
                >

                    <i class="fas fa-cloud"></i>

                    Voir le projet

                </a>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     PROJETS
========================================================= -->

<section id="projets">

    <div class="container">

        <div class="section-intro">

            <div class="section-label">
                Réalisations
            </div>

            <h2 class="section-title">
                Mes projets
            </h2>

        </div>


        <div class="grid">


            <!-- E-Fruits -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-shopping-basket"></i>
                </div>

                <h3>
                    Application E-Fruits
                </h3>

                <p>
                    Application web de vente de fruits
                    développée dans le cadre de la formation.
                </p>


                <div class="form-actions">

                    <a
                        href="https://efruits.vercel.app/acc.php"
                        target="_blank"
                        class="btn"
                    >
                        <i class="fas fa-store"></i>
                        Voir le site
                    </a>


                    <a
                        href="https://github.com/fatimazahraelbakkali78-blip/fruits.git"
                        target="_blank"
                        class="btn btn-outline"
                    >
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>

                </div>

            </div>



            <!-- My Store -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-store"></i>
                </div>

                <h3>
                    My Store
                </h3>

                <p>
                    Projet de boutique en ligne réalisé
                    dans le cadre de la formation.
                </p>


                <a
                    href="https://github.com/fatimazahraelbakkali78-blip/My_store"
                    target="_blank"
                    class="btn"
                >

                    <i class="fab fa-github"></i>

                    GitHub

                </a>

            </div>



            <!-- MVC -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-sitemap"></i>
                </div>

                <h3>
                    Architecture MVC
                </h3>

                <p>
                    Application développée selon
                    l'architecture MVC.
                </p>


                <a
                    href="https://github.com/fatimazahraelbakkali78-blip/MVC.git"
                    target="_blank"
                    class="btn"
                >

                    <i class="fab fa-github"></i>

                    GitHub

                </a>

            </div>



            <!-- Burger Code -->

            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-hamburger"></i>
                </div>

                <h3>
                    Burger Code
                </h3>

                <p>
                    Projet réalisé en PHP dans le cadre
                    des travaux pratiques.
                </p>


                <div class="form-actions">

                    <a
                        href="/burger_code.pptx"
                        class="btn"
                    >
                        <i class="fas fa-file-powerpoint"></i>
                        Énoncé
                    </a>


                    <a
                        href="https://github.com/fatimazahraelbakkali78-blip/burgercode.git"
                        target="_blank"
                        class="btn btn-outline"
                    >
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     ATELIERS / TRAVAUX SUPPLEMENTAIRES
========================================================= -->

<section>

    <div class="container">

        <div class="section-intro">

            <div class="section-label">
                Travaux pratiques
            </div>

            <h2 class="section-title">
                Mes réalisations PHP
            </h2>

        </div>


        <div class="grid">


            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>

                <h3>
                    Upload de fichiers
                </h3>

                <p>
                    Gestion de l'upload de fichiers
                    avec PHP.
                </p>

                <a href="/At3.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Rapport
                </a>

            </div>



            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>

                <h3>
                    Gestion des étudiants
                </h3>

                <p>
                    Gestion des étudiants avec fichiers,
                    photos et recherche.
                </p>

                <a href="/Rapp4.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Rapport
                </a>

            </div>



            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-cookie-bite"></i>
                </div>

                <h3>
                    Sessions & Cookies
                </h3>

                <p>
                    Gestion des sessions et des cookies
                    avec PHP.
                </p>

                <a href="/Rapp5.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Rapport
                </a>

            </div>



            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-cubes"></i>
                </div>

                <h3>
                    POO en PHP
                </h3>

                <p>
                    Programmation orientée objet
                    en PHP avec sessions.
                </p>

                <a href="/Rapp7.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Rapport
                </a>

            </div>



            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-database"></i>
                </div>

                <h3>
                    MySQL PDO
                </h3>

                <p>
                    Application de gestion des étudiants
                    avec MySQL PDO.
                </p>

                <div class="form-actions">

                    <a
                        href="/ApplicationBDD.pptx"
                        class="btn"
                    >
                        <i class="fas fa-file-powerpoint"></i>
                        Énoncé
                    </a>


                    <a
                        href="https://github.com/fatimazahraelbakkali78-blip/atelier9_dev101.git"
                        target="_blank"
                        class="btn btn-outline"
                    >
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>

                </div>

            </div>



            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-list-ol"></i>
                </div>

                <h3>
                    Pagination en PHP
                </h3>

                <p>
                    Mise en place de la pagination
                    avec PHP.
                </p>

                <div class="form-actions">

                    <a href="/At10.pdf" class="btn">
                        <i class="far fa-file-pdf"></i>
                        Énoncé
                    </a>


                    <a
                        href="https://github.com/fatimazahraelbakkali78-blip/atelier10_dev101.git"
                        target="_blank"
                        class="btn btn-outline"
                    >
                        <i class="fab fa-github"></i>
                        GitHub
                    </a>

                </div>

            </div>



            <div class="card">

                <div class="card-icon">
                    <i class="fab fa-js"></i>
                </div>

                <h3>
                    AJAX – HTML
                </h3>

                <p>
                    Utilisation d'AJAX avec une
                    réponse HTML.
                </p>

                <a href="/At11.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Énoncé
                </a>

            </div>



            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-code"></i>
                </div>

                <h3>
                    AJAX – JSON
                </h3>

                <p>
                    Communication AJAX avec
                    une réponse JSON.
                </p>

                <a href="/At12.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Énoncé
                </a>

            </div>



            <div class="card">

                <div class="card-icon">
                    <i class="fas fa-server"></i>
                </div>

                <h3>
                    Services Web
                </h3>

                <p>
                    Mise en pratique des services
                    web.
                </p>

                <a href="/At13.pdf" class="btn">
                    <i class="far fa-file-pdf"></i>
                    Énoncé
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     CONTACT
========================================================= -->

<section id="contact">

    <div class="container">

        <div class="section-intro">

            <div class="section-label">
                Contact
            </div>

            <h2 class="section-title">
                Contactez-moi
            </h2>

            <p class="section-description">
                N'hésitez pas à me contacter pour échanger
                autour d'un projet ou d'une opportunité.
            </p>

        </div>



        <div class="contact-grid">


            <!-- CONTACT INFO -->

            <div class="contact-card">

                <h3>
                    Mes coordonnées
                </h3>


                <div class="contact-links">


                    <a
                        href="mailto:linakarkri170@gmail.com"
                        class="contact-link"
                    >

                        <i class="fas fa-envelope"></i>

                        <span>
                            linakarkri170@gmail.com
                        </span>

                    </a>


                    <a
                        href="tel:+212644946533"
                        class="contact-link"
                    >

                        <i class="fas fa-phone"></i>

                        <span>
                            +212 6 44 94 65 33
                        </span>

                    </a>


                    <div class="contact-link">

                        <i class="fas fa-location-dot"></i>

                        <span>
                            Tanger, Maroc
                        </span>

                    </div>


                    <a
                        href="https://www.linkedin.com/in/lina-karkri"
                        target="_blank"
                        class="contact-link"
                    >

                        <i class="fab fa-linkedin-in"></i>

                        <span>
                            LinkedIn – Lina Karkri
                        </span>

                    </a>


                    <a
                        href="https://github.com/linakarkri170-ux"
                        target="_blank"
                        class="contact-link"
                    >

                        <i class="fab fa-github"></i>

                        <span>
                            GitHub – linakarkri170-ux
                        </span>

                    </a>


                </div>

            </div>



            <!-- CONTACT MESSAGE -->

            <div class="contact-card">

                <h3>
                    Parlons ensemble
                </h3>


                <p style="color:var(--text-secondary); margin-bottom:20px;">

                    Je suis toujours intéressée par les projets
                    digitaux, le développement web et les
                    nouvelles expériences.

                </p>


                <div class="form-actions">


                    <a
                        href="mailto:linakarkri170@gmail.com"
                        class="btn"
                    >

                        <i class="fas fa-envelope"></i>

                        Envoyer un email

                    </a>


                    <a
                        href="https://github.com/linakarkri170-ux"
                        target="_blank"
                        class="btn btn-outline"
                    >

                        <i class="fab fa-github"></i>

                        Voir mon GitHub

                    </a>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <div class="container footer-content">


        <div>

            <p>

                © <?= date("Y") ?>

                <strong>Lina Karkri</strong>

                — Portfolio Développement Digital

            </p>

        </div>


        <div class="socials">


            <a
                href="mailto:linakarkri170@gmail.com"
                aria-label="Email"
            >
                <i class="fas fa-envelope"></i>
            </a>


            <a
                href="https://github.com/linakarkri170-ux"
                target="_blank"
                aria-label="GitHub"
            >
                <i class="fab fa-github"></i>
            </a>


            <a
                href="https://www.linkedin.com/in/lina-karkri"
                target="_blank"
                aria-label="LinkedIn"
            >
                <i class="fab fa-linkedin-in"></i>
            </a>


        </div>


    </div>

</footer>


</body>

</html>