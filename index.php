<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morine Njenga</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<!--Sidebar toggle-->
<button class="toggle" onclick="toggleSidebar()">☰</button>

<!--Sidebar nav-->
<nav id="sidenav">
    <ul>
        <li><a href="#About"><span>About</span></a></li>
        <li><a href="#Projects"><span>Projects</span></a></li>
        <li><a href="#contact"><span>Contact</span></a></li>
    </ul>     
</nav>

<main>
    <!--Intro page-->
    <header>
        <h1>My Portfolio</h1>
    </header>

    <section class="hero">
        <h2>Hello, I'm <strong>Morine Njenga</strong></h2>
        <p class="subtitle">Software Developer | AI Enthusiast | Freelancer</p>
        <a href="#projects" class="cta-btn">View My Work</a>
    </section>

    <!--Page two-->
    <section id="about">
      <h2>About Me</h2>
      <p>
        I am a passionate software engineer with experience in web development, AI, and freelancing.
        I love building innovative solutions and solving complex problems.
      </p>
    </section>

    <section id="projects">
      <h2>Projects</h2>
      <div class="project-grid">
        <div class="project-card">
          <h3>Project 1</h3>
          <p>Description of your project.</p>
        </div>
        <div class="project-card">
          <h3>Project 2</h3>
          <p>Description of your project.</p>
        </div>
        <div class="project-card">
          <h3>Project 3</h3>
          <p>Description of your project.</p>
        </div>
      </div>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <p>Phone: +254701098036</p>
      <p>Email: morinenjenga99@gmail.com</p>
      <p>LinkedIn: <a href="https://www.linkedin.com/in/morine-njenga/">linkedin</a></p>
    </section>

</main>

<script>
function toggleSidebar() {
  const sidenav = document.getElementById('sidenav');
  sidenav.classList.toggle('min');
}
</script>

</body>
</html>