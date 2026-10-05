<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lina Karkri | Portfolio Développement Digital</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

        /* =====================================================
           VARIABLES
        ===================================================== */

        :root {
            --bg: #f6f2ec;
            --card: #e8ded2;
            --card-light: #eee7dd;

            --accent: #c98f8a;
            --accent-dark: #ad726d;
            --accent-light: #f2dada;

            --text: #1e1c19;
            --text-secondary: #746d67;

            --white: #fffdf9;
            --border: rgba(30, 28, 25, 0.10);

            --shadow: 0 15px 40px rgba(60, 45, 35, 0.08);
            --radius: 22px;
        }


        /* =====================================================
           RESET
        ===================================================== */

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
            background: var(--bg);
            color: var(--text);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(246, 242, 236, 0.94);
            backdrop-filter: blur(15px);

            border-bottom: 1px solid var(--border);

            padding: 16px 6%;
        }

        .nav-content {
            max-width: 1250px;
            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 700;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            transition: .3s;
        }

        .nav-links a:hover {
            color: var(--accent-dark);
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            min-height: 650px;
            padding: 80px 6%;

            display: flex;
            align-items: center;

            background:
                radial-gradient(
                    circle at 85% 30%,
                    rgba(201,143,138,.18),
                    transparent 35%
                );
        }

        .hero-container {
            width: 100%;
            max-width: 1250px;
            margin: auto;

            display: grid;
            grid-template-columns: 1.1fr .9fr;
            align-items: center;
            gap: 70px;
        }

        .hero-text {
            animation: fadeUp .8s ease;
        }

        .small-title {
            color: var(--accent-dark);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;

            margin-bottom: 18px;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;

            font-size: clamp(42px, 6vw, 76px);
            line-height: 1.05;

            margin-bottom: 25px;
        }

        .hero h1 span {
            color: var(--accent);
        }

        .hero-description {
            max-width: 620px;

            color: var(--text-secondary);
            font-size: 17px;

            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }


        /* =====================================================
           HERO PHOTO
        ===================================================== */

        .hero-photo-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .photo-frame {
            position: relative;

            width: 390px;
            height: 520px;

            border-radius: 200px 200px 35px 35px;

            background: var(--card);

            padding: 12px;

            box-shadow: 0 25px 60px rgba(70,50,40,.16);
        }

        .photo-frame::before {
            content: "";

            position: absolute;

            width: 100%;
            height: 100%;

            border: 1px solid var(--accent);

            border-radius: 200px 200px 35px 35px;

            top: 18px;
            left: 18px;

            z-index: 0;
        }

        .profile-photo {
            position: relative;
            z-index: 2;

            width: 100%;
            height: 100%;

            object-fit: cover;

            border-radius: 190px 190px 28px 28px;

            display: block;
        }


        /* =====================================================
           BUTTONS
        ===================================================== */

        .btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 9px;

            padding: 12px 22px;

            border-radius: 30px;

            background: var(--accent);
            color: white;

            font-size: 13px;
            font-weight: 600;

            border: 1px solid var(--accent);

            transition: .3s;
        }

        .btn:hover {
            background: var(--accent-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--accent-dark);
        }

        .btn-outline:hover {
            color: white;
        }


        /* =====================================================
           GENERAL SECTIONS
        ===================================================== */

        .section {
            max-width: 1250px;
            margin: auto;
            padding: 90px 6%;
        }

        .section-title {
            margin-bottom: 45px;
        }

        .section-label {
            color: var(--accent-dark);

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 4px;
            text-transform: uppercase;

            margin-bottom: 8px;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;

            font-size: clamp(35px, 5vw, 52px);
        }

        .section-title p {
            color: var(--text-secondary);
            max-width: 650px;
            margin-top: 10px;
        }


        /* =====================================================
           PARCOURS
        ===================================================== */

        .grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 25px;
        }

        .card {
            background: rgba(255,253,249,.65);

            border: 1px solid var(--border);

            border-radius: var(--radius);

            padding: 32px;

            box-shadow: var(--shadow);

            transition: .35s;

            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";

            position: absolute;

            left: 0;
            top: 0;

            width: 4px;
            height: 0;

            background: var(--accent);

            transition: .35s;
        }

        .card:hover {
            transform: translateY(-7px);
            box-shadow: 0 25px 55px rgba(60,45,35,.12);
        }

        .card:hover::before {
            height: 100%;
        }

        .card-icon {
            width: 48px;
            height: 48px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--accent-light);
            color: var(--accent-dark);

            margin-bottom: 20px;
        }

        .card h3 {
            font-family: 'Playfair Display', serif;

            font-size: 25px;

            margin-bottom: 10px;
        }

        .card p {
            color: var(--text-secondary);
            font-size: 14px;
        }


        /* =====================================================
           MODULES
        ===================================================== */

        .modules-grid {
            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 20px;
        }

        .module {
            background: var(--card);

            border-radius: 20px;

            padding: 28px;

            border: 1px solid rgba(30,28,25,.05);

            transition: .3s;
        }

        .module:hover {
            transform: translateY(-5px);
            background: #e3d5c7;
        }

        .module-number {
            color: var(--accent-dark);

            font-size: 12px;
            font-weight: 700;

            letter-spacing: 2px;

            margin-bottom: 15px;
        }

        .module h3 {
            font-family: 'Playfair Display', serif;

            font-size: 23px;

            margin-bottom: 12px;
        }

        .module p {
            color: var(--text-secondary);
            font-size: 13px;
        }


        /* =====================================================
           PHP SECTION
        ===================================================== */

        .php-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;

            font-size: 12px;
            font-weight: 600;

            color: var(--text-secondary);

            margin-bottom: 7px;
        }

        .input {
            width: 100%;

            padding: 13px 15px;

            border: 1px solid #d7ccc0;

            border-radius: 12px;

            background: #fffdf9;

            color: var(--text);

            font-family: inherit;

            outline: none;

            transition: .3s;
        }

        .input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(201,143,138,.15);
        }

        .form-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }


        /* =====================================================
           LINKS
        ===================================================== */

        .links {
            display: flex;

            flex-wrap: wrap;

            gap: 9px;

            margin-top: 20px;
        }

        .link {
            width: 42px;
            height: 42px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--white);

            border: 1px solid #d8cdc2;

            color: var(--accent-dark);

            font-weight: 600;

            transition: .3s;
        }

        .link:hover {
            background: var(--accent);
            color: white;
            transform: scale(1.08);
        }


        /* =====================================================
           CONTACT
        ===================================================== */

        .contact-section {
            background: var(--card);

            border-radius: 35px;

            max-width: 1150px;

            margin: 70px auto;

            padding: 65px;

            box-shadow: var(--shadow);
        }

        .contact-grid {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 25px;
        }

        .contact-item {
            display: flex;

            align-items: center;

            gap: 15px;

            background: rgba(255,255,255,.4);

            padding: 18px;

            border-radius: 15px;

            border: 1px solid rgba(30,28,25,.05);
        }

        .contact-icon {
            min-width: 45px;
            height: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: var(--accent-light);
            color: var(--accent-dark);
        }

        .contact-item strong {
            display: block;

            font-size: 12px;

            color: var(--text-secondary);

            margin-bottom: 2px;
        }

        .contact-item span,
        .contact-item a {
            font-size: 14px;
            font-weight: 500;
        }

        .contact-item a:hover {
            color: var(--accent-dark);
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            text-align: center;

            padding: 45px 20px;

            border-top: 1px solid var(--border);

            color: var(--text-secondary);

            font-size: 13px;
        }

        .footer strong {
            color: var(--text);
        }


        /* =====================================================
           ANIMATION
        ===================================================== */

        @keyframes fadeUp {

            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .hero-container {
                grid-template-columns: 1fr;

                text-align: center;

                gap: 45px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .modules-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        @media (max-width: 700px) {

            .nav-links {
                display: none;
            }

            .hero {
                padding: 60px 5%;
            }

            .photo-frame {
                width: 300px;
                height: 410px;
            }

            .grid,
            .php-grid,
            .contact-grid,
            .modules-grid {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 65px 5%;
            }

            .contact-section {
                margin: 40px 5%;
                padding: 35px 20px;
            }

        }

    </style>
</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar">

    <div class="nav-content">

        <div class="logo">
            Lina <span>Karkri</span>
        </div>

        <ul class="nav-links">

            <li>
                <a href="#accueil">Accueil</a>
            </li>

            <li>
                <a href="#parcours">Parcours</a>
            </li>

            <li>
                <a href="#modules">Modules</a>
            </li>

            <li>
                <a href="#travaux">Travaux</a>
            </li>

            <li>
                <a href="#contact">Contact</a>
            </li>

        </ul>

    </div>

</nav>


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero" id="accueil">

    <div class="hero-container">


        <div class="hero-text">

            <div class="small-title">
                Portfolio • Développement Digital
            </div>

            <h1>
                Bonjour,<br>
                je suis <span>Lina</span>
            </h1>

            <p class="hero-description">
                Étudiante en Développement Digital, passionnée par
                la création web, le design et les nouvelles technologies.
                Bienvenue dans mon portfolio.
            </p>

            <div class="hero-buttons">

                <a href="#modules" class="btn">
                    <i class="fas fa-arrow-down"></i>
                    Découvrir mon parcours
                </a>

                <a href="#contact" class="btn btn-outline">
                    Me contacter
                </a>

            </div>

        </div>


        <!-- PHOTO -->
        <div class="hero-photo-wrapper">

            <div class="photo-frame">

                <img
                    src="linaPhoto.jpg"
                    alt="Lina Karkri"
                    class="profile-photo"
                >

            </div>

        </div>


    </div>

</section>


<!-- =====================================================
     PARCOURS
===================================================== -->

<section class="section" id="parcours">

    <div class="section-title">

        <div class="section-label">
            Mon parcours
        </div>

        <h2>
            Mon expérience digitale
        </h2>

        <p>
            Une collection de travaux pratiques, projets web
            et apprentissages réalisés pendant ma formation.
        </p>

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
                <strong>Dev 104</strong>
                déployé sur
                <strong>Vercel</strong>.
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
                Support de cours PHP utilisé pendant la formation.
            </p>

            <br>

            <a href="/php.pptx" class="btn">
                <i class="fas fa-download"></i>
                Télécharger le cours
            </a>

        </div>


    </div>

</section>


<!-- =====================================================
     MODULES
===================================================== -->

<section class="section" id="modules">

    <div class="section-title">

        <div class="section-label">
            Formation
        </div>

        <h2>
            Mes modules
        </h2>

        <p>
            Les principaux modules étudiés dans ma formation
            en Développement Digital.
        </p>

    </div>


    <div class="modules-grid">


        <!-- M201 -->

        <div class="module">

            <div class="module-number">
                M201
            </div>

            <h3>
                Préparation d’un projet web
            </h3>

            <p>
                Analyse des besoins, préparation,
                organisation et conception d’un projet web.
            </p>

        </div>


        <!-- M202 -->

        <div class="module">

            <div class="module-number">
                M202
            </div>

            <h3>
                Approche agile
            </h3>

            <p>
                Méthodes agiles, organisation du travail,
                planification et suivi des projets.
            </p>

        </div>


        <!-- M203 -->

        <div class="module">

            <div class="module-number">
                M203
            </div>

            <h3>
                Gestion des données
            </h3>

            <p>
                Bases de données, SQL, MySQL,
                PDO et gestion des informations.
            </p>

        </div>


        <!-- M204 -->

        <div class="module">

            <div class="module-number">
                M204
            </div>

            <h3>
                Développement front-end
            </h3>

            <p>
                HTML, CSS, JavaScript, interfaces web
                et création de pages modernes.
            </p>

        </div>


        <!-- M205 -->

        <div class="module">

            <div class="module-number">
                M205
            </div>

            <h3>
                Développement back-end
            </h3>

            <p>
                PHP, formulaires, sessions, cookies,
                POO, MVC et services web.
            </p>

        </div>


        <!-- M206 -->

        <div class="module">

            <div class="module-number">
                M206
            </div>

            <h3>
                Création d’une application Cloud native
            </h3>

            <p>
                Création, déploiement et utilisation
                d’applications web dans le Cloud.
            </p>

        </div>


    </div>

</section>


<!-- =====================================================
     TRAVAUX PRATIQUES
===================================================== -->

<section class="section" id="travaux">

    <div class="section-title">

        <div class="section-label">
            Travaux pratiques
        </div>

        <h2>
            Mes projets
        </h2>

        <p>
            Quelques réalisations et travaux pratiques
            effectués pendant ma formation.
        </p>

    </div>


    <div class="grid">


        <!-- Communication -->

        <div class="card">

            <div class="card-icon">
                <i class="fas fa-paper-plane"></i>
            </div>

            <h3>
                Communication
            </h3>

            <form method="POST" action="login.php">

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

            <form method="POST" action="index.php">

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

                if (function_exists('table')) {

                    table(
                        $_POST['rows'],
                        $_POST['cols']
                    );

                }

            }

            ?>

        </div>


        <!-- Triangle formulaire -->

        <div class="card">

            <div class="card-icon">
                <i class="fas fa-caret-up"></i>
            </div>

            <h3>
                Triangle via formulaire
            </h3>

            <form method="POST" action="index.php">

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

                if (function_exists('Triangle')) {

                    Triangle($_POST['rowst']);

                }

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
                Sélectionnez le nombre de lignes :
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

                if (function_exists('Triangle')) {

                    Triangle($_GET['action4']);

                }

            }

            ?>

        </div>


    </div>

</section>


<!-- =====================================================
     DOCUMENTS / RESSOURCES
===================================================== -->

<section class="section">

    <div class="section-title">

        <div class="section-label">
            Ressources
        </div>

        <h2>
            Mes documents
        </h2>

        <p>
            Supports et documents réalisés pendant ma formation.
        </p>

    </div>


    <div class="grid">


        <div class="card">

            <div class="card-icon">
                <i class="fas fa-file-pdf"></i>
            </div>

            <h3>
                Documents PDF
            </h3>

            <p>
                Retrouvez les différents documents et rapports
                réalisés pendant les travaux pratiques.
            </p>

            <br>

            <a href="/At1.pdf" class="btn">
                <i class="far fa-file-pdf"></i>
                Voir les documents
            </a>

        </div>


        <div class="card">

            <div class="card-icon">
                <i class="fas fa-code"></i>
            </div>

            <h3>
                Projets GitHub
            </h3>

            <p>
                Mes projets et travaux de développement
                disponibles sur GitHub.
            </p>

            <br>

            <a
                href="https://github.com/linakarkri170-ux"
                target="_blank"
                class="btn"
            >
                <i class="fab fa-github"></i>
                Mon GitHub
            </a>

        </div>


    </div>

</section>


<!-- =====================================================
     CONTACT
===================================================== -->

<section class="contact-section" id="contact">

    <div class="section-title">

        <div class="section-label">
            Contact
        </div>

        <h2>
            Restons en contact
        </h2>

        <p>
            Vous pouvez me contacter pour toute information
            concernant mon parcours, mes projets ou mes compétences.
        </p>

    </div>


    <div class="contact-grid">


        <!-- Email -->

        <div class="contact-item">

            <div class="contact-icon">

                <i class="fas fa-envelope"></i>

            </div>

            <div>

                <strong>Email</strong>

                <a href="mailto:linakarkri170@gmail.com">
                    linakarkri170@gmail.com
                </a>

            </div>

        </div>


        <!-- Téléphone -->

        <div class="contact-item">

            <div class="contact-icon">

                <i class="fas fa-phone"></i>

            </div>

            <div>

                <strong>Téléphone</strong>

                <a href="tel:+212644946533">
                    +212 6 44 94 65 33
                </a>

            </div>

        </div>


        <!-- Localisation -->

        <div class="contact-item">

            <div class="contact-icon">

                <i class="fas fa-location-dot"></i>

            </div>

            <div>

                <strong>Localisation</strong>

                <span>
                    Tanger, Maroc
                </span>

            </div>

        </div>


        <!-- LinkedIn -->

        <div class="contact-item">

            <div class="contact-icon">

                <i class="fab fa-linkedin-in"></i>

            </div>

            <div>

                <strong>LinkedIn</strong>

                <a
                    href="https://www.linkedin.com/in/lina-karkri"
                    target="_blank"
                >
                    Lina Karkri
                </a>

            </div>

        </div>


        <!-- GitHub -->

        <div class="contact-item">

            <div class="contact-icon">

                <i class="fab fa-github"></i>

            </div>

            <div>

                <strong>GitHub</strong>

                <a
                    href="https://github.com/linakarkri170-ux"
                    target="_blank"
                >
                    linakarkri170-ux
                </a>

            </div>

        </div>


    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="footer">

    © <?php echo date("Y"); ?>

    <strong>Lina Karkri</strong>

    — Portfolio Développement Digital

</footer>


</body>
</html>