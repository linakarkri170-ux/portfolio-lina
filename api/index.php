<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lina Karkri | Portfolio Développement Digital</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

        /* =========================================================
           VARIABLES
        ========================================================= */

        :root {
            --blue: #2563eb;
            --blue-dark: #173b8f;
            --blue-light: #eaf2ff;

            --bg: #f7faff;
            --white: #ffffff;

            --text: #172554;
            --text-dark: #1e293b;
            --text-muted: #64748b;

            --border: #e2e8f0;

            --shadow: 0 15px 40px rgba(37, 99, 235, 0.08);
            --shadow-hover: 0 25px 55px rgba(37, 99, 235, 0.15);
        }


        /* =========================================================
           GENERAL
        ========================================================= */

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background: var(--bg);
            color: var(--text-dark);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }


        /* =========================================================
           HERO
        ========================================================= */

        .hero {
            position: relative;
            min-height: 650px;

            background:
                radial-gradient(
                    circle at 85% 15%,
                    rgba(37, 99, 235, 0.15),
                    transparent 32%
                ),
                radial-gradient(
                    circle at 5% 90%,
                    rgba(96, 165, 250, 0.12),
                    transparent 30%
                ),
                #f5f9ff;

            display: flex;
            align-items: center;
            overflow: hidden;

            padding: 60px 30px;
        }

        .hero::before {
            content: "";
            position: absolute;

            width: 450px;
            height: 450px;

            border-radius: 50%;

            border: 1px solid rgba(37, 99, 235, 0.08);

            right: -150px;
            top: -150px;
        }

        .hero::after {
            content: "";
            position: absolute;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background: rgba(37, 99, 235, 0.04);

            left: -120px;
            bottom: -100px;
        }

        .overlay {
            position: absolute;
            inset: 0;
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 1180px;

            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 70px;
        }


        /* =========================================================
           HERO TEXT
        ========================================================= */

        .hero-text {
            flex: 1;
            max-width: 650px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            background: var(--white);

            color: var(--blue);

            padding: 10px 18px;

            border-radius: 50px;

            font-size: 0.78rem;
            font-weight: 700;

            margin-bottom: 22px;

            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.08);
        }

        .hero h1 {
            margin: 0;

            font-family: 'Playfair Display', serif;

            font-size: clamp(2.8rem, 5vw, 5rem);

            line-height: 1.08;

            color: var(--text);

            font-weight: 700;
        }

        .hero h1 span {
            color: var(--blue);
        }

        .hero-subtitle {
            margin-top: 22px;

            font-size: 1rem;

            color: var(--text-muted);

            letter-spacing: 2px;

            font-weight: 600;

            text-transform: uppercase;
        }

        .hero-description {
            max-width: 570px;

            margin-top: 22px;

            color: #64748b;

            font-size: 1rem;

            line-height: 1.9;
        }

        .hero-buttons {
            display: flex;

            gap: 12px;

            margin-top: 30px;

            flex-wrap: wrap;
        }

        .hero-btn {
            display: inline-flex;

            align-items: center;

            gap: 9px;

            padding: 13px 22px;

            border-radius: 10px;

            font-size: 0.85rem;

            font-weight: 600;

            transition: 0.3s;
        }

        .hero-btn-primary {
            background: var(--blue);

            color: white;

            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.22);
        }

        .hero-btn-primary:hover {
            background: var(--blue-dark);

            transform: translateY(-3px);
        }

        .hero-btn-secondary {
            background: white;

            color: var(--text);

            border: 1px solid var(--border);
        }

        .hero-btn-secondary:hover {
            border-color: var(--blue);

            color: var(--blue);

            transform: translateY(-3px);
        }


        /* =========================================================
           PHOTO
        ========================================================= */

        .hero-photo-wrapper {
            position: relative;

            width: 390px;

            flex-shrink: 0;

            display: flex;

            justify-content: center;
        }

        .hero-photo-wrapper::before {
            content: "";

            position: absolute;

            width: 330px;
            height: 330px;

            border-radius: 50%;

            background: rgba(37, 99, 235, 0.10);

            top: 70px;

            z-index: 0;
        }

        .hero-photo-wrapper::after {
            content: "";

            position: absolute;

            width: 95px;
            height: 95px;

            border-radius: 50%;

            border: 2px solid rgba(37, 99, 235, 0.18);

            right: 0;

            top: 30px;

            z-index: 0;
        }

        .profile-photo {
            position: relative;

            z-index: 2;

            width: 350px;

            height: 510px;

            object-fit: cover;

            object-position: center top;

            border-radius: 180px 180px 28px 28px;

            border: 8px solid rgba(255, 255, 255, 0.95);

            background: white;

            box-shadow:
                0 25px 60px rgba(37, 99, 235, 0.16),
                0 0 0 12px rgba(255, 255, 255, 0.5);

            transition: 0.4s;
        }

        .profile-photo:hover {
            transform: translateY(-8px);

            box-shadow:
                0 30px 70px rgba(37, 99, 235, 0.22),
                0 0 0 12px rgba(255, 255, 255, 0.7);
        }


        /* =========================================================
           MAIN CONTAINER
        ========================================================= */

        .container {
            width: 100%;

            max-width: 1200px;

            margin: 0 auto;

            padding: 70px 25px 100px;
        }


        /* =========================================================
           GRID
        ========================================================= */

        .grid-layout {
            display: grid;

            grid-template-columns:
                repeat(auto-fit, minmax(330px, 1fr));

            gap: 25px;
        }


        /* =========================================================
           CARDS
        ========================================================= */

        .card {
            position: relative;

            background: rgba(255,255,255,0.96);

            border: 1px solid var(--border);

            border-radius: 18px;

            padding: 27px;

            box-shadow: var(--shadow);

            overflow: hidden;

            transition: 0.35s ease;

            display: flex;

            flex-direction: column;
        }

        .card::before {
            content: "";

            position: absolute;

            left: 0;
            top: 0;

            width: 100%;

            height: 4px;

            background: linear-gradient(
                90deg,
                #2563eb,
                #60a5fa,
                #93c5fd
            );

            transform: scaleX(0);

            transform-origin: left;

            transition: 0.35s;
        }

        .card:hover {
            transform: translateY(-7px);

            box-shadow: var(--shadow-hover);

            border-color: rgba(37,99,235,0.18);
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card-full {
            grid-column: 1 / -1;
        }


        /* =========================================================
           CARD TITLES
        ========================================================= */

        h2 {
            margin: 0 0 20px;

            display: flex;

            align-items: flex-start;

            gap: 12px;

            color: var(--text);

            font-size: 1.05rem;

            line-height: 1.5;

            font-weight: 700;
        }

        h2 i {
            flex-shrink: 0;

            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background: var(--blue-light);

            color: var(--blue);

            font-size: 1rem;
        }


        /* =========================================================
           FORMS
        ========================================================= */

        .form {
            width: 100%;
        }

        .form-group {
            display: flex;

            flex-direction: column;

            gap: 7px;

            margin-bottom: 17px;
        }

        label {
            color: var(--text-muted);

            font-size: 0.75rem;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 0.8px;
        }

        .input {
            width: 100%;

            padding: 12px 15px;

            border-radius: 10px;

            border: 1px solid var(--border);

            background: #f8fafc;

            color: var(--text);

            font-family: inherit;

            font-size: 0.9rem;

            transition: 0.3s;

            outline: none;
        }

        .input:focus {
            border-color: var(--blue);

            background: white;

            box-shadow:
                0 0 0 4px rgba(37,99,235,0.08);
        }


        /* =========================================================
           BUTTONS
        ========================================================= */

        .form-actions {
            display: flex;

            flex-wrap: wrap;

            gap: 10px;

            margin-top: 18px;
        }

        .btn {
            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            padding: 11px 17px;

            border: none;

            border-radius: 9px;

            background: var(--blue);

            color: white;

            font-family: inherit;

            font-size: 0.82rem;

            font-weight: 600;

            cursor: pointer;

            transition: 0.3s;

            box-shadow:
                0 7px 18px rgba(37,99,235,0.16);

            flex: 1;

            min-width: 120px;
        }

        .btn:hover {
            background: var(--blue-dark);

            transform: translateY(-2px);

            box-shadow:
                0 10px 22px rgba(37,99,235,0.23);
        }

        .btn-secondary {
            background: #f1f5f9;

            color: #475569;

            border: 1px solid var(--border);

            box-shadow: none;
        }

        .btn-secondary:hover {
            background: var(--blue-light);

            color: var(--blue);

            border-color: #bfdbfe;

            box-shadow: none;
        }


        /* =========================================================
           LINKS
        ========================================================= */

        .links {
            display: flex;

            flex-wrap: wrap;

            gap: 9px;

            margin-top: 5px;
        }

        .link {
            width: 40px;
            height: 40px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background: #f1f5f9;

            border: 1px solid var(--border);

            color: var(--blue);

            font-size: 0.82rem;

            font-weight: 700;

            transition: 0.25s;
        }

        .link:hover {
            background: var(--blue);

            color: white;

            transform: translateY(-3px);

            box-shadow:
                0 8px 18px rgba(37,99,235,0.20);
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        .footer {
            text-align: center;

            padding: 35px 20px;

            background: white;

            border-top: 1px solid var(--border);

            color: var(--text-muted);

            font-size: 0.8rem;
        }

        .footer strong {
            color: var(--blue);
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 900px) {

            .hero {
                min-height: auto;

                padding: 60px 25px;
            }

            .hero-content {
                flex-direction: column;

                text-align: center;

                gap: 45px;
            }

            .hero-text {
                max-width: 700px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-photo-wrapper {
                order: 2;
            }

        }


        @media (max-width: 600px) {

            .hero {
                padding: 45px 18px;
            }

            .hero h1 {
                font-size: 2.6rem;
            }

            .hero-subtitle {
                font-size: 0.75rem;
            }

            .hero-photo-wrapper {
                width: 100%;
            }

            .profile-photo {
                width: 285px;
                height: 410px;
            }

            .hero-photo-wrapper::before {
                width: 270px;
                height: 270px;
            }

            .container {
                padding: 45px 15px 70px;
            }

            .grid-layout {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 22px;
            }

            .card-full {
                grid-column: auto;
            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     HERO
========================================================= -->

<section class="hero">

    <div class="overlay"></div>

    <div class="hero-content">


        <!-- TEXT -->

        <div class="hero-text">

            <div class="hero-badge">
                <i class="fas fa-sparkles"></i>
                Portfolio Personnel
            </div>

            <h1>
                Bonjour,<br>
                je suis <span>Lina Karkri</span>
            </h1>

            <div class="hero-subtitle">
                Développement Digital • Web • PHP
            </div>

            <div class="hero-description">
                Étudiante en développement digital, passionnée par
                la création de sites web, le design et les nouvelles
                technologies.
            </div>

            <div class="hero-buttons">

                <a href="#projets" class="hero-btn hero-btn-primary">
                    <i class="fas fa-folder-open"></i>
                    Découvrir mes projets
                </a>

                <a href="#contact" class="hero-btn hero-btn-secondary">
                    <i class="fas fa-envelope"></i>
                    Contact
                </a>

            </div>

        </div>


        <!-- PHOTO -->

        <div class="hero-photo-wrapper">

            <!--
                IMPORTANT:
                linaPhoto.jpg doit être dans le même dossier
                que index.php
            -->

            <img
                src="linaPhoto.jpg"
                alt="Lina Karkri"
                class="profile-photo"
            >

        </div>

    </div>

</section>



<!-- =========================================================
     MAIN
========================================================= -->

<div class="container">

    <div class="grid-layout" id="projets">


<?php

include_once 'Traitements.php';

$groupe = "Dev 104";
$plt = "Vercel";



/* =========================================================
   PRESENTATION
========================================================= */

echo "<div class='card card-full'>";

echo "<h2>
        <i class='fas fa-desktop'></i>
        Premier site de $groupe sur $plt
      </h2>";

echo "<p style='color:#64748b; margin:0;'>
        Bienvenue sur mon portfolio. Vous trouverez ici mes
        travaux pratiques, ateliers, projets PHP et réalisations
        en développement digital.
      </p>";

echo "</div>";



/* =========================================================
   COURS PHP
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-book'></i>
        Cours PHP
      </h2>";

echo "<a href='/php.pptx' class='btn'>
        <i class='fas fa-download'></i>
        Télécharger le cours
      </a>";

echo "</div>";



/* =========================================================
   COMMUNICATION
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-paper-plane'></i>
        Communication via formulaire
      </h2>";

?>

<form method="POST" action="login.php" class="form">

    <div class="form-group">

        <label>Login :</label>

        <input
            type="text"
            name="log"
            class="input"
        >

    </div>


    <div class="form-group">

        <label>Password :</label>

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
            class="btn btn-secondary"
        >

    </div>

</form>

<?php

echo "</div>";



/* =========================================================
   TABLE
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-table'></i>
        Appel Table
      </h2>";

?>

<form method="POST" action="index.php" class="form">

    <div class="form-group">

        <label>Nombre de lignes :</label>

        <input
            type="text"
            name="rows"
            class="input"
        >

    </div>


    <div class="form-group">

        <label>Nombre de colonnes :</label>

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
            class="btn btn-secondary"
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

echo "</div>";



/* =========================================================
   TRIANGLE VIA FORM
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-caret-up'></i>
        Appel Triangle via formulaire
      </h2>";

?>

<form method="POST" action="index.php" class="form">

    <div class="form-group">

        <label>Nombre de lignes :</label>

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
            class="btn btn-secondary"
        >

    </div>

</form>

<?php

if (!empty($_POST['action3'])) {

    Triangle($_POST['rowst']);

}

echo "</div>";



/* =========================================================
   TRIANGLE VIA LIENS
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-link'></i>
        Appel Triangle via liens hypertextes
      </h2>";

echo "<div class='links'>";

for ($i = 3; $i <= 10; $i++) {

    echo "<a
            href='index.php?action4=$i'
            class='link'
          >
            $i
          </a>";

}

echo "</div>";

if (!empty($_GET['action4'])) {

    Triangle($_GET['action4']);

}

echo "</div>";



/* =========================================================
   ATELIER 1
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-laptop-code'></i>
        Atelier 1
      </h2>";

echo "<a href='/At1.pdf' class='btn'>
        <i class='far fa-file-pdf'></i>
        Voir PDF
      </a>";

echo "</div>";



/* =========================================================
   ATELIER 2
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-user-plus'></i>
        Atelier 2 - Gestion d'un formulaire d'inscription
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At2.pdf' class='btn btn-secondary'>
        <i class='far fa-file-pdf'></i>
        Voir PDF
      </a>";

echo "<a href='inscription.php' class='btn'>
        <i class='fas fa-pen-alt'></i>
        Inscription en ligne
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 3
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-cloud-upload-alt'></i>
        Atelier 3 - Upload de fichiers en PHP
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At3_enn.pdf' class='btn btn-secondary'>
        Énoncé Atelier 3
      </a>";

echo "<a href='/At3.pdf' class='btn btn-secondary'>
        Voir Rapport Atelier 3
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier3_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 4
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-graduation-cap'></i>
        Atelier 4 - Gestion des étudiants
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At4.pdf' class='btn btn-secondary'>
        Énoncé Atelier 4
      </a>";

echo "<a href='/Rapp4.pdf' class='btn btn-secondary'>
        Voir Rapport Atelier 4
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier4_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 5
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-cookie-bite'></i>
        Atelier 5 - Gestion des sessions et cookies
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At5.pdf' class='btn btn-secondary'>
        Énoncé Atelier 5
      </a>";

echo "<a href='/Rapp5.pdf' class='btn btn-secondary'>
        Voir Rapport Atelier 5
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier5_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 6
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-cube'></i>
        Atelier 6 - La POO en PHP
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At6.pdf' class='btn btn-secondary'>
        Énoncé Atelier 6
      </a>";

echo "<a href='#' class='btn btn-secondary'>
        Voir Rapport Atelier 6
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier6_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 7
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-cubes'></i>
        Atelier 7 - POO en PHP avec Sessions
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At7.pdf' class='btn btn-secondary'>
        Énoncé Atelier 7
      </a>";

echo "<a href='/Rapp7.pdf' class='btn btn-secondary'>
        Voir Rapport Atelier 7
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier7_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 8
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-shopping-basket'></i>
        Atelier 8 - Application E-Fruits
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At8.pdf' class='btn btn-secondary'>
        Énoncé Atelier 8
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier8_dev101.git'
        class='btn btn-secondary'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "<a
        href='https://efruits.vercel.app/acc.php'
        class='btn'
        target='_blank'
      >
        <i class='fas fa-store'></i>
        My Store E-Fruit
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/fruits.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Vercel
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 9
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-database'></i>
        Atelier 9 - MySQL PDO : Gestion des étudiants
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/ApplicationBDD.pptx' class='btn btn-secondary'>
        Énoncé Atelier 9
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier9_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 10
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-list-ol'></i>
        Atelier 10 - La Pagination en PHP
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At10.pdf' class='btn btn-secondary'>
        Énoncé Atelier 10
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier10_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 11
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fab fa-js'></i>
        Atelier 11 - Ajax Réponse HTML
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At11.pdf' class='btn btn-secondary'>
        Énoncé Atelier 11
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier11_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 12
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-code'></i>
        Atelier 12 - Ajax Réponse JSON
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At12.pdf' class='btn btn-secondary'>
        Énoncé Atelier 12
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier12_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 13
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-server'></i>
        Atelier 13 - Services Web
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At13.pdf' class='btn btn-secondary'>
        Énoncé Atelier 13
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier13_dev101.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 14
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-hamburger'></i>
        Atelier 14 - Burger_Code
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/burger_code.pptx' class='btn btn-secondary'>
        Énoncé Atelier 14
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/burgercode.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   ATELIER 15
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-sitemap'></i>
        Atelier 15 - Architecture MVC
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At15.pdf' class='btn btn-secondary'>
        Énoncé Atelier 15
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/MVC.git'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "</div>";

echo "</div>";



/* =========================================================
   MY STORE
========================================================= */

echo "<div class='card'>";

echo "<h2>
        <i class='fas fa-store-alt'></i>
        My Store
      </h2>";

echo "<div style='display:flex; flex-direction:column; gap:10px;'>";

echo "<a href='/At15.pdf' class='btn btn-secondary'>
        Énoncé My Store
      </a>";

echo "<a
        href='https://github.com/fatimazahraelbakkali78-blip/My_store'
        class='btn'
        target='_blank'
      >
        <i class='fab fa-github'></i>
        GitHub Repo Local
      </a>";

echo "</div>";

echo "</div>";

?>

    </div>

</div>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer class="footer" id="contact">

    <div>
        © <?php echo date("Y"); ?>
        <strong>Lina Karkri</strong>
        — Portfolio Développement Digital
    </div>

</footer>


</body>
</html>