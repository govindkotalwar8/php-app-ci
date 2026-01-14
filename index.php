<?php $year = date("Y"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Govind Kotalwar | Cloud & DevOps Engineer</title>
  <meta name="description" content="Govind Kotalwar – Cloud & DevOps Engineer Portfolio" />

  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;900&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

  <style>
    :root {
      --accent-color: #00F5C4;
      --bg-color: #0A0A0A;
      --text-color: #EAEAEA;
      --glass: rgba(22, 22, 22, 0.77);
      --border: rgba(255,255,255,0.07);
      --blur: blur(18px);
      --font: 'Manrope', system-ui, sans-serif;
      --transition: all .34s cubic-bezier(.75,.08,.47,1.18);
      --radius: 1.5rem;
    }
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--font);
      background: linear-gradient(111deg, #181a20 44%, #0a0a0a 95%);
      color: var(--text-color);
      margin: 0; 
      min-height: 100vh;
      font-size: 17px;
      letter-spacing: 0.01em;
    }

    /* Preloader */
    #preloader {
      position: fixed;
      inset: 0;
      background: var(--bg-color);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    #preloader.hidden {
      opacity: 0;
      visibility: hidden;
    }
    .preloader-bar {
      width: 240px;
      height: 8px;
      background: #232323;
      border-radius: 99px;
      overflow: hidden;
    }
    .progress {
      height: 100%;
      width: 0%;
      background: linear-gradient(90deg, var(--accent-color), #42ffd6);
      animation: loading-bar 1.3s linear infinite;
    }
    @keyframes loading-bar {
      0% { width: 0%; }
      70% { width: 85%; }
      100% { width: 0%; }
    }

    .glass {
      background: var(--glass);
      border-radius: var(--radius);
      border: 1.4px solid var(--border);
      backdrop-filter: var(--blur);
    }

    /* NAV */
    .main-nav {
      position: fixed;
      top: 0;
      width: 100%;
      padding: 2rem 6vw;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 20;
    }
    .nav-logo {
      font-weight: 900;
      font-size: 2rem;
      color: white;
      text-decoration: none;
    }
    .nav-menu {
      display: flex;
      gap: 3rem;
    }
    .nav-menu a {
      color: white;
      text-decoration: none;
      font-weight: 700;
    }
    .nav-menu a:hover {
      color: var(--accent-color);
    }

    .theme-toggle {
      background: none;
      border: none;
      color: var(--accent-color);
      font-size: 1.3em;
      cursor: pointer;
    }

    .light-mode {
      --bg-color: #F8FAFF;
      --text-color: #111114;
      --glass: rgba(233,242,251,0.91);
      --border: rgba(33,44,80,0.18);
      --accent-color: #0439d9;
    }

    /* HERO */
    .hero-section {
      min-height: 90vh;
      display: flex;
      align-items: center;
      padding: 0 8vw;
    }
    .hero-content h1 {
      font-size: clamp(3rem, 7vw, 5.4rem);
      font-weight: 900;
      color: white;
    }
    .accent { color: var(--accent-color); }
    .hero-desc {
      color: #b8c2ba;
      font-size: 1.18rem;
    }

    .btn-main {
      background: var(--accent-color);
      color: var(--bg-color);
      padding: 0.9em 2.3em;
      border-radius: 77px;
      font-weight: 800;
      text-decoration: none;
      display: inline-block;
      margin-top: 1.5rem;
    }

    /* FOOTER */
    footer {
      margin-top: 5vw;
      border-top: 1px solid var(--border);
      padding: 2em 7vw;
      display: flex;
      justify-content: space-between;
      color: #888;
    }
  </style>
</head>

<body>

<div id="preloader">
  <div class="preloader-bar">
    <div class="progress"></div>
  </div>
</div>

<header class="main-nav glass">
  <a href="#" class="nav-logo">GK</a>
  <nav class="nav-menu">
    <a href="#about-section">About</a>
    <a href="#projects-section">Projects</a>
    <a href="#contact-section">Contact</a>
  </nav>
  <button class="theme-toggle"><i class="fa fa-moon"></i></button>
</header>

<section class="hero-section">
  <div class="hero-content">
    <h1>Cloud <span class="accent">DevOps</span> Leader<br>Architecting <span class="accent">Resilience</span></h1>
    <p class="hero-desc">
      I design automated cloud backbones for the modern web.
    </p>
    <a href="resume.pdf" class="btn-main">Download Resume</a>
  </div>
</section>

<footer>
  <span>&copy; <?= $year ?> Govind Kotalwar</span>
  <span>
    <a href="https://github.com/govindkotalwar"><i class="fab fa-github"></i></a>
    <a href="https://linkedin.com/in/govind-kotalwar"><i class="fab fa-linkedin"></i></a>
  </span>
</footer>

<script>
  window.addEventListener('load', () => {
    const p = document.getElementById('preloader');
    p.classList.add('hidden');
    setTimeout(() => p.remove(), 600);
  });

  document.querySelector('.theme-toggle').onclick = function () {
    document.body.classList.toggle('light-mode');
    this.querySelector('i').classList.toggle('fa-moon');
    this.querySelector('i').classList.toggle('fa-sun');
  };
</script>

</body>
</html>
