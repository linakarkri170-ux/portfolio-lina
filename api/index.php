<?php
// 1. Ila kan l-appel kayji men API (Fetch/Axios awla query parameter ?api=1)
if (isset($_GET['api']) || strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false)    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit();
    }

    $portfolioData = [
        "profile" => [
            "name" => "Wassima",
            "title" => "Développeuse Digital / Full-Stack & 3D",
            "bio" => "Bienvenue dans mon portfolio interactif 3D. Passionnée par le développement web et le design immersif.",
            "location" => "Tanger, Maroc",
            "email" => "contact@example.com",
            "github" => "https://github.com",
            "linkedin" => "https://linkedin.com"
        ],
        "skills" => [
            ["name" => "HTML / CSS / JS", "level" => 90],
            ["name" => "PHP / Backend", "level" => 85],
            ["name" => "SQL / Databases", "level" => 80],
            ["name" => "Three.js / 3D", "level" => 75]
        ],
        "projects" => [
            [
                "title" => "3D Interactive Portfolio",
                "desc" => "Portfolio interactif avec animations Three.js et Backend PHP.",
                "tech" => ["PHP", "Three.js", "HTML/CSS"]
            ],
            [
                "title" => "Application Web Dynamic",
                "desc" => "Projet complet de gestion avec API REST et base de données.",
                "tech" => ["PHP", "JavaScript", "MySQL"]
            ]
        ]
    ];

    $endpoint =$_GET['endpoint'] ?? 'all';

    switch ($endpoint) {
        case 'profile':
            echo json_encode($portfolioData['profile']);
            break;
        case 'skills':
            echo json_encode($portfolioData['skills']);
            break;
        case 'projects':
            echo json_encode($portfolioData['projects']);
            break;
        default:
            echo json_encode($portfolioData);
            break;
    }
    exit();
}

// 2. Ila kan l-visiteur dakhél mn l-Browser (HTML + CSS + 3D Three.js)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wassima | Portfolio 3D</title>
    <!-- CSS Design Wa3er -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0d0e15;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Canvas 3D f l- خلفية (Background) */
        #webgl-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 1;
            pointer-events: none;
        }

        /* Interface Content */
        .content {
            position: relative;
            z-index: 2;
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        header {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            font-size: 3.5rem;
            background: linear-gradient(45deg, #00f2fe, #4facfe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        h2.subtitle {
            font-size: 1.5rem;
            color: #a0aec0;
            margin-bottom: 20px;
        }

        p.bio {
            font-size: 1.1rem;
            max-width: 600px;
            line-height: 1.6;
            color: #cbd5e0;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: linear-gradient(45deg, #00f2fe, #4facfe);
            color: #000;
            font-weight: bold;
            border-radius: 30px;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
            width: fit-content;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 242, 254, 0.4);
        }

        /* Section Styling */
        section {
            margin: 80px 0;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 30px;
            border-bottom: 2px solid #2d3748;
            padding-bottom: 10px;
            display: inline-block;
        }

        /* Cards Grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 15px;
            transition: transform 0.3s, border-color 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #00f2fe;
        }

        .card h3 {
            margin-bottom: 10px;
            color: #00f2fe;
        }

        .card p {
            color: #a0aec0;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .tag {
            background: rgba(0, 242, 254, 0.1);
            color: #00f2fe;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
        }

        footer {
            text-align: center;
            padding: 40px 0;
            color: #718096;
            border-top: 1px solid #2d3748;
        }
    </style>

    <!-- Three.js Library dyal 3D -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
</head>
<body>

    <!-- Canvas فين كيترسم الـ 3D -->
    <div id="webgl-container"></div>

    <!-- UI Content HTML -->
    <div class="content">
        <header>
            <h1 id="name">Wassima</h1>
            <h2 class="subtitle" id="title">Développeuse Digital / Full-Stack</h2>
            <p class="bio" id="bio">Chargement des données...</p>
            <a href="#projects" class="btn">Voir mes projets</a>
        </header>

        <section id="projects">
            <h2 class="section-title">Mes Projets</h2>
            <div class="grid" id="projects-grid">
                <!-- Data ghadi tjid mn API b JS -->
            </div>
        </section>

        <section id="skills">
            <h2 class="section-title">Compétences</h2>
            <div class="grid" id="skills-grid">
                <!-- Data ghadi tjid mn API b JS -->
            </div>
        </section>

        <footer>
            <p>© <?php echo date('Y'); ?> Wassima. Tous droits réservés.</p>
        </footer>
    </div>

    <!-- Script JS باش يجيب الـ Data من l-PHP backend w يخدم الـ 3D -->
    <script>
        // 1. Fetch data men l-API dyal PHP f nafs l-fichier
        fetch('?api=1')
            .then(res => res.json())
            .then(data => {
                // Populate Profile
                document.getElementById('name').innerText = data.profile.name;
                document.getElementById('title').innerText = data.profile.title;
                document.getElementById('bio').innerText = data.profile.bio;

                // Populate Projects
                const projectsGrid = document.getElementById('projects-grid');
                projectsGrid.innerHTML = data.projects.map(p => `
                    <div class="card">
                        <h3>${p.title}</h3>
                        <p>${p.desc}</p>
                        <div class="tags">
                            ${p.tech.map(t => `<span class="tag">${t}</span>`).join('')}
                        </div>
                    </div>
                `).join('');

                // Populate Skills
                const skillsGrid = document.getElementById('skills-grid');
                skillsGrid.innerHTML = data.skills.map(s => `
                    <div class="card">
                        <h3>${s.name}</h3>
                        <p>Niveau: ${s.level}%</p>
                    </div>
                `).join('');
            });

        // 2. Animation 3D (Three.js Scene)
        const container = document.getElementById('webgl-container');
        const scene = new THREE.Scene();
        
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 5;

        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio);
        container.appendChild(renderer.domElement);

        // Create 3D Object (TorusKnot b Design Wa3er)
        const geometry = new THREE.TorusKnotGeometry(1.2, 0.35, 120, 16);
        const material = new THREE.MeshStandardMaterial({
            color: 0x00f2fe,
            wireframe: true,
            roughness: 0.3,
            metalness: 0.8
        });
        const shape3D = new THREE.Mesh(geometry, material);
        shape3D.position.set(2, 0, 0); // Positon f l-ymin
        scene.add(shape3D);

        // Lights
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
        scene.add(ambientLight);

        const pointLight = new THREE.PointLight(0x00f2fe, 2);
        pointLight.position.set(5, 5, 5);
        scene.add(pointLight);

        // Animation Loop
        function animate() {
            requestAnimationFrame(animate);
            shape3D.rotation.x += 0.005;
            shape3D.rotation.y += 0.008;
            renderer.render(scene, camera);
        }
        animate();

        // Responsive Window Resize
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);

            if (window.innerWidth < 768) {
                shape3D.position.set(0, 1, -2); // Responsive position for mobile
            } else {
                shape3D.position.set(2, 0, 0);
            }
        });
    </script>
</body>
</html>