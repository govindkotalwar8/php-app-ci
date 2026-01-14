<?php
  $currentYear = date("Y");
?>
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
    /* ===== SAME CSS AS YOUR HTML (UNCHANGED) ===== */
<?php include "styles.css"; ?>
  </style>
</head>

<body>

<!-- Preloader -->
<div id="preloader">
  <div class="preloader-bar">
    <div class="progress"></div>
  </div>
</div>

<header class="main-nav glass">
  <div>
    <a href="#" class="nav-logo">GK</a>
    <button class="theme-toggle" title="Toggle light/dark">
      <i class="fa fa-moon"></i>
    </button>
  </div>
  <nav class="nav-menu">
    <a href="#about-section">About</a>
    <a href="#projects-section">Projects</a>
    <a href="#contact-section">Contact</a>
  </nav>
</header>

<main>

  <!-- HERO -->
  <section class="hero-section">
    <div class="hero-content">
      <h1>
        Cloud <span class="accent">DevOps</span> Leader<br>
        Architecting <span class="accent">Resilience</span>
      </h1>
      <p class="hero-desc">
        I design <b>automated cloud backbones for the modern web</b>.
        My expertise: AWS, Infra automation, scalable deployment, and bulletproof DevOps.
      </p>

      <a href="resume.pdf" class="btn-main btn-resume">Download Resume</a>

      <div class="hero-socials" style="margin-top:2rem;">
        <a href="https://github.com/govindkotalwar" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://linkedin.com/in/govind-kotalwar" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about-section" style="padding:5vw 8vw;">
    <div class="bento-grid">
      <div class="bento-item bento-about glass">
        <h2>About Me</h2>
        <p>
          Hi, I'm <b>Govind</b> — Cloud/DevOps Engineer and infra optimizer.
          My core: <b>high-availability, automation, cost efficiency</b> and secure AWS architectures.
        </p>
      </div>

      <div class="bento-item glass"><b>AWS Cloud</b> <i class="fab fa-aws"></i></div>
      <div class="bento-item glass"><b>Infra as Code</b> <i class="fa fa-code"></i></div>
      <div class="bento-item glass"><b>CI/CD Pipelines</b> <i class="fas fa-rocket"></i></div>
      <div class="bento-item glass"><b>Docker</b> <i class="fab fa-docker"></i></div>
      <div class="bento-item glass"><b>Serverless & DBs</b> <i class="fa fa-server"></i></div>
      <div class="bento-item glass"><b>Linux</b> <i class="fab fa-linux"></i></div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section id="projects-section" style="padding:5vw 8vw 2vw;">
    <h2 style="font-weight:900; text-align:center; margin-bottom:3vw;">Projects</h2>

    <div class="projects-wrapper">
      <div class="project-card glass">
        <div class="project-bg" style="background-image:url('https://images.unsplash.com/photo-1583483438515-32079c164472');"></div>
        <div class="project-content">
          <h3>HA Web App Infra</h3>
          <p>Multi-AZ AWS infra with ASG & ELB — 99.99% uptime.</p>
          <div class="project-tags">
            <span>AWS</span><span>AutoScaling</span><span>CloudFormation</span>
          </div>
        </div>
      </div>

      <div class="project-card glass">
        <div class="project-bg" style="background-image:url('https://images.unsplash.com/photo-1544419586-3a5e1136b81a');"></div>
        <div class="project-content">
          <h3>Production RDS MySQL</h3>
          <p>Multi-AZ RDS with automated failover & monitoring.</p>
          <div class="project-tags">
            <span>RDS</span><span>MySQL</span><span>CloudWatch</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact-section" style="padding:6vw 8vw;">
    <div class="glass" style="padding:3em 2em; max-width:500px; margin:auto; text-align:center;">
      <h2>Let's Build Together</h2>
      <a href="mailto:govindkotalwargk121@gmail.com" class="btn-main">Contact Me</a>
      <p>Reach out via email or LinkedIn.</p>
    </div>
  </section>

</main>

<footer>
  <span>&copy; <?= $currentYear ?> Govind Kotalwar</span>
  <span class="footer-links">
    <a href="https://github.com/govindkotalwar" target="_blank"><i class="fab fa-github"></i></a>
    <a href="https://linkedin.com/in/govind-kotalwar" target="_blank"><i class="fab fa-linkedin"></i></a>
  </span>
</footer>

<script>
  window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    preloader.classList.add('hidden');
    setTimeout(() => preloader.remove(), 650);
  });

  document.querySelector('.theme-toggle').onclick = function () {
    document.body.classList.toggle('light-mode');
    this.querySelector('i').classList.toggle('fa-moon');
    this.querySelector('i').classList.toggle('fa-sun');
  };
</script>

</body>
</html>
