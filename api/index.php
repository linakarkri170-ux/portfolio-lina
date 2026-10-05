<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lina Karkri | Portfolio Développement Digital</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

        /* =====================================================
           PALETTE
        ===================================================== */

        :root {
            --bg: #F6F2EC;
            --card: #E8DED2;
            --accent: #C98F8A;
            --accent-dark: #A96F6A;
            --text: #1E1C19;
            --muted: #746D67;
            --hover: #F2DADA;
            --white: #FFFDF9;
            --border: rgba(30, 28, 25, 0.10);
        }


        /* =====================================================
           RESET
        ===================================================== */

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            position: relative;
            min-height: 600px;
            padding: 70px 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;

            background:
                radial-gradient(
                    circle at 85% 25%,
                    rgba(201, 143, 138, 0.22),
                    transparent 32%
                ),
                radial-gradient(
                    circle at 10% 90%,
                    rgba(232, 222, 210, 0.8),
                    transparent 35%
                ),
                var(--bg);
        }


        .hero::before {
            content: "";

            position: absolute;

            width: 450px;
            height: 450px;

            background: var(--hover);

            border-radius: 50%;

            top: -220px;
            right: -100px;

            opacity: 0.6;
        }


        .hero::after {
            content: "";

            position: absolute;

            width: 350px;
            height: 350px;

            background: var(--card);

            border-radius: 50%;

            bottom: -200px;
            left: -130px;

            opacity: 0.55;
        }


        .hero-content {
            position: relative;
            z-index: 2;

            width: 100%;
            max-width: 1100px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 70px;
        }


        /* =====================================================
           PROFILE PHOTO
        ===================================================== */

        .profile-container {
            position: relative;

            flex-shrink: 0;
        }


        .profile-container::before {
            content: "";

            position: absolute;

            width: 330px;
            height: 330px;

            border-radius: 50%;

            background: var(--hover);

            top: 18px;
            left: 18px;

            z-index: -1;
        }


        .profile-photo {
            width: 330px;
            height: 330px;

            object-fit: cover;

            border-radius: 50%;

            border: 8px solid var(--white);

            box-shadow:
                0 20px 50px rgba(30, 28, 25, 0.15),
                0 0 0 10px rgba(201, 143, 138, 0.12);

            transition: 0.4s ease;
        }


        .profile-photo:hover {
            transform: translateY(-8px);

            box-shadow:
                0 25px 60px rgba(30, 28, 25, 0.18),
                0 0 0 14px rgba(201, 143, 138, 0.15);
        }


        /* =====================================================
           HERO TEXT
        ===================================================== */

        .hero-text {
            flex: 1;
            max-width: 620px;
        }


        .small-title {
            color: var(--accent-dark);

            font-size: 0.78rem;

            text-transform: uppercase;

            letter-spacing: 4px;

            font-weight: 600;

            margin-bottom: 15px;
        }


        .hero h1 {
            font-family: 'Playfair Display', serif;

            font-size: clamp(2.8rem, 5vw, 5rem);

            line-height: 1.05;

            font-weight: 500;

            color: var(--text);

            letter-spacing: -2px;
        }


        .hero h1 span {
            color: var(--accent);
        }


        .hero-description {
            margin-top: 25px;

            color: var(--muted);

            font-size: 1rem;

            max-width: 540px;
        }


        .hero-buttons {
            display: flex;

            flex-wrap: wrap;

            gap: 12px;

            margin-top: 30px;
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

            border: 1px solid var(--accent);

            text-decoration: none;

            font-size: 0.84rem;

            font-weight: 600;

            cursor: pointer;

            transition: 0.3s ease;
        }


        .btn:hover {
            background: var(--accent-dark);

            transform: translateY(-3px);

            box-shadow:
                0 10px 22px rgba(201, 143, 138, 0.25);
        }


        .btn-secondary {
            background: transparent;

            color: var(--accent-dark);

            border: 1px solid var(--accent);
        }


        .btn-secondary:hover {
            background: var(--hover);

            color: var(--text);
        }


        /* =====================================================
           MAIN CONTAINER
        ===================================================== */

        .container {
            max-width: 1200px;

            margin: 0 auto;

            padding: 55px 25px 90px;
        }


        /* =====================================================
           SECTION HEADER
        ===================================================== */

        .section-header {
            text-align: center;

            margin-bottom: 35px;
        }


        .section-header h2 {
            font-family: 'Playfair Display', serif;

            font-size: 2rem;

            font-weight: 500;

            color: var(--text);

            justify-content: center;

            margin-bottom: 8px;
        }


        .section-header p {
            color: var(--muted);

            font-size: 0.9rem;
        }


        /* =====================================================
           GRID
        ===================================================== */

        .grid-layout {
            display: grid;

            grid-template-columns:
                repeat(auto-fit, minmax(340px, 1fr));

            gap: 22px;
        }


        /* =====================================================
           CARDS
        ===================================================== */

        .card {
            position: relative;

            background: rgba(232, 222, 210, 0.70);

            padding: 28px;

            border-radius: 18px;

            border: 1px solid var(--border);

            box-shadow:
                0 8px 25px rgba(30, 28, 25, 0.05);

            transition: 0.35s ease;

            overflow: hidden;
        }


        .card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 4px;

            background: var(--accent);

            opacity: 0;

            transition: 0.3s;
        }


        .card:hover {
            transform: translateY(-6px);

            background: var(--white);

            border-color: rgba(201, 143, 138, 0.35);

            box-shadow:
                0 15px 35px rgba(30, 28, 25, 0.10);
        }


        .card:hover::before {
            opacity: 1;
        }


        .card-full {
            grid-column: 1 / -1;
        }


        /* =====================================================
           CARD TITLES
        ===================================================== */

        .card h2 {
            font-family: 'Playfair Display', serif;

            font-size: 1.3rem;

            font-weight: 500;

            color: var(--text);

            margin-bottom: 20px;

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .card h2 i {
            color: var(--accent);

            background: rgba(201, 143, 138, 0.15);

            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            font-size: 0.95rem;
        }


        /* =====================================================
           FORMS
        ===================================================== */

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
            font-size: 0.72rem;

            color: var(--muted);

            font-weight: 600;

            text-transform: uppercase;

            letter-spacing: 1px;
        }


        .input {
            width: 100%;

            padding: 13px 16px;

            border-radius: 10px;

            border: 1px solid rgba(30, 28, 25, 0.12);

            background: var(--white);

            color: var(--text);

            font-family: inherit;

            font-size: 0.9rem;

            transition: 0.3s;
        }


        .input:focus {
            outline: none;

            border-color: var(--accent);

            box-shadow:
                0 0 0 4px rgba(201, 143, 138, 0.12);
        }


        .form-actions {
            display: flex;

            flex-wrap: wrap;

            gap: 10px;

            margin-top: 18px;
        }


        /* =====================================================
           LINKS / PAGINATION
        ===================================================== */

        .links {
            display: flex;

            flex-wrap: wrap;

            gap: 10px;

            margin-top: 15px;
        }


        .link {
            width: 42px;
            height: 42px;

            display: flex;

            align-items: center;
            justify-content: center;

            background: var(--white);

            color: var(--accent-dark);

            border-radius: 50%;

            font-weight: 600;

            font-size: 0.85rem;

            text-decoration: none;

            border: 1px solid rgba(201, 143, 138, 0.25);

            transition: 0.25s;
        }


        .link:hover {
            background: var(--accent);

            color: white;

            transform: translateY(-3px);
        }


        /* =====================================================
           PHP OUTPUT
        ===================================================== */

        .php-output {
            margin-top: 20px;

            background: var(--text);

            color: var(--bg);

            padding: 18px;

            border-radius: 12px;

            border-left: 4px solid var(--accent);

            font-family: 'Courier New', monospace;

            font-size: 0.85rem;

            overflow-x: auto;
        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {
            text-align: center;

            padding: 35px 20px;

            border-top: 1px solid var(--border);

            color: var(--muted);

            font-size: 0.82rem;
        }


        footer strong {
            color: var(--accent-dark);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 850px) {

            .hero {
                min-height: auto;

                padding: 65px 20px;
            }

            .hero-content {
                flex-direction: column;

                text-align: center;

                gap: 40px;
            }

            .hero-text {
                max-width: 650px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .profile-photo {
                width: 270px;
                height: 270px;
            }

            .profile-container::before {
                width: 270px;
                height: 270px;
            }
        }


        @media (max-width: 500px) {

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .grid-layout {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 22px;
            }

            .profile-photo {
                width: 220px;
                height: 220px;
            }

            .profile-container::before {
                width: 220px;
                height: 220px;
            }

            .hero h1 {
                font-size: 2.6rem;
            }
        }

    </style>
</head>


<body>


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

    <div class="hero-content">

        <div class="profile-container">

            <!--
                Mets ta photo ici :
                images/lina.jpg
            -->

            <img
                src="images/lina.jpg"
                alt="Lina Karkri"
                class="profile-photo"
            >

        </div>


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
                le développement web, le design et la création digitale.
            </p>


            <div class="hero-buttons">

                <a href="#portfolio" class="btn">
                    <i class="fas fa-arrow-down"></i>
                    Découvrir mon portfolio
                </a>

                <a href="#contact" class="btn btn-secondary">
                    <i class="fas fa-envelope"></i>
                    Contactez-moi
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     MAIN
===================================================== -->

<div class="container" id="portfolio">


    <div class="section-header">

        <h2>
            Mon Portfolio
        </h2>

        <p>
            Mes cours, ateliers, projets et réalisations
        </p>

    </div>


    <div class="grid-layout">


<?php

include_once 'Traitements.php';

$groupe = "Dev 104";
$plt = "Vercel";


/* =====================================================
   PREMIER SITE
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-desktop'></i>
    Premier site de $groupe sur $plt
</h2>
";

echo "
<p style='color:var(--muted);'>
    Mon premier site réalisé dans le cadre de ma formation
    en Développement Digital.
</p>
";

echo "</div>";



/* =====================================================
   COURS PHP
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-book'></i>
    Cours PHP
</h2>
";

echo "
<a href='/php.pptx' class='btn'>
    <i class='fas fa-download'></i>
    Télécharger le cours
</a>
";

echo "</div>";



/* =====================================================
   COMMUNICATION
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-paper-plane'></i>
    Communication via formulaire
</h2>
";

?>

<form method="POST" action="login.php" class="form">

    <div class="form-group">

        <label>Login</label>

        <input
            type="text"
            name="log"
            class="input"
        >

    </div>


    <div class="form-group">

        <label>Password</label>

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



/* =====================================================
   TABLE
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-table'></i>
    Appel Table
</h2>
";

?>

<form method="POST" action="index.php" class="form">

    <div class="form-group">

        <label>Nombre de lignes</label>

        <input
            type="text"
            name="rows"
            class="input"
        >

    </div>


    <div class="form-group">

        <label>Nombre de colonnes</label>

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



/* =====================================================
   TRIANGLE FORM
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-caret-up'></i>
    Appel Triangle via formulaire
</h2>
";

?>

<form method="POST" action="index.php" class="form">

    <div class="form-group">

        <label>Nombre de lignes</label>

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



/* =====================================================
   TRIANGLE LINKS
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-link'></i>
    Appel Triangle via liens hypertextes
</h2>
";


echo "<div class='links'>";

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

echo "</div>";


if (!empty($_GET['action4'])) {

    Triangle($_GET['action4']);

}

echo "</div>";



/* =====================================================
   ATELIER 1
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-laptop-code'></i>
    Atelier 1
</h2>
";

echo "
<a href='/At1.pdf' class='btn'>
    <i class='far fa-file-pdf'></i>
    Voir PDF
</a>
";

echo "</div>";



/* =====================================================
   ATELIER 2
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-user-plus'></i>
    Atelier 2 - Gestion d'un formulaire d'inscription
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At2.pdf' class='btn btn-secondary'>
        <i class='far fa-file-pdf'></i>
        Voir PDF
    </a>

    <a href='inscription.php' class='btn'>
        <i class='fas fa-pen-alt'></i>
        Inscription en ligne
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 3
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-cloud-upload-alt'></i>
    Atelier 3 - Upload de fichiers en PHP
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At3_enn.pdf' class='btn btn-secondary'>
        Énoncé Atelier 3
    </a>

    <a href='/At3.pdf' class='btn btn-secondary'>
        Voir Rapport Atelier 3
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier3_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 4
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-graduation-cap'></i>
    Atelier 4 - Gestion des étudiants
</h2>
";

echo "
<p style='color:var(--muted); margin-bottom:15px;'>
    Fichier texte + Upload photo + Recherche
</p>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At4.pdf' class='btn btn-secondary'>
        Énoncé Atelier 4
    </a>

    <a href='/Rapp4.pdf' class='btn btn-secondary'>
        Voir Rapport Atelier 4
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier4_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 5
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-cookie-bite'></i>
    Atelier 5 - Sessions & Cookies
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At5.pdf' class='btn btn-secondary'>
        Énoncé Atelier 5
    </a>

    <a href='/Rapp5.pdf' class='btn btn-secondary'>
        Voir Rapport Atelier 5
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier5_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 6
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-cube'></i>
    Atelier 6 - La POO en PHP
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At6.pdf' class='btn btn-secondary'>
        Énoncé Atelier 6
    </a>

    <a href='#' class='btn btn-secondary'>
        Voir Rapport Atelier 6
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier6_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 7
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-cubes'></i>
    Atelier 7 - POO en PHP avec Sessions
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At7.pdf' class='btn btn-secondary'>
        Énoncé Atelier 7
    </a>

    <a href='/Rapp7.pdf' class='btn btn-secondary'>
        Voir Rapport Atelier 7
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier7_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 8
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-shopping-basket'></i>
    Atelier 8 - Application E-Fruits
</h2>
";

echo "
<p style='color:var(--muted); margin-bottom:15px;'>
    Contrôle continu
</p>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At8.pdf' class='btn btn-secondary'>
        Énoncé Atelier 8
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier8_dev101.git'
        class='btn btn-secondary'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

    <a
        href='https://efruits.vercel.app/acc.php'
        class='btn'
        target='_blank'
    >
        <i class='fas fa-store'></i>
        My Store E-Fruit
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/fruits.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Vercel
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 9
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-database'></i>
    Atelier 9 - MySQL PDO
</h2>
";

echo "
<p style='color:var(--muted); margin-bottom:15px;'>
    Application de gestion des étudiants
</p>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/ApplicationBDD.pptx' class='btn btn-secondary'>
        Énoncé Atelier 9
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier9_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 10
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-list-ol'></i>
    Atelier 10 - Pagination en PHP
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At10.pdf' class='btn btn-secondary'>
        Énoncé Atelier 10
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier10_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 11
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fab fa-js'></i>
    Atelier 11 - Ajax Réponse HTML
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At11.pdf' class='btn btn-secondary'>
        Énoncé Atelier 11
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier11_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 12
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-code'></i>
    Atelier 12 - Ajax Réponse JSON
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At12.pdf' class='btn btn-secondary'>
        Énoncé Atelier 12
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier12_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 13
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-server'></i>
    Atelier 13 - Services Web
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At13.pdf' class='btn btn-secondary'>
        Énoncé Atelier 13
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/atelier13_dev101.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 14
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-hamburger'></i>
    Atelier 14 - Burger Code
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/burger_code.pptx' class='btn btn-secondary'>
        Énoncé Atelier 14
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/burgercode.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

</div>
";

echo "</div>";



/* =====================================================
   ATELIER 15
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-sitemap'></i>
    Atelier 15 - Architecture MVC
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At15.pdf' class='btn btn-secondary'>
        Énoncé Atelier 15
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/MVC.git'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

</div>
";

echo "</div>";



/* =====================================================
   MY STORE
===================================================== */

echo "<div class='card'>";

echo "
<h2>
    <i class='fas fa-store-alt'></i>
    My Store
</h2>
";

echo "
<div style='display:flex; flex-direction:column; gap:10px;'>

    <a href='/At15.pdf' class='btn btn-secondary'>
        Énoncé My Store
    </a>

    <a
        href='https://github.com/fatimazahraelbakkali78-blip/My_store'
        class='btn'
        target='_blank'
    >
        <i class='fab fa-github'></i>
        GitHub Repo Local
    </a>

</div>
";

echo "</div>";

?>

    </div>

</div>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer id="contact">

    <p>
        © 2026 <strong>Lina Karkri</strong>
        — Portfolio Développement Digital
    </p>

    <p style="margin-top:8px;">
        Build • Learn • Create • Deploy
    </p>

</footer>


</body>
</html>