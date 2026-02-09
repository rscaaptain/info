<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Developer Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0a0a0a;
            --card-bg: #161616;
            --accent: #00ff88;
            --text-main: #ffffff;
            --text-sec: #a0a0a0;
            --gradient: linear-gradient(45deg, #00ff88, #00b8ff);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-color);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--accent);
            border-radius: 4px;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 50px;
            background: rgba(10, 10, 10, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #333;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .nav-links a {
            color: var(--text-main);
            text-decoration: none;
            margin-left: 30px;
            font-size: 16px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        header {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 0 20px;
            background: radial-gradient(circle at center, #1a1a1a 0%, #0a0a0a 70%);
        }

        .glitch-text {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 20px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textShine 3s infinite linear;
        }

        .tagline {
            font-size: 1.5rem;
            color: var(--text-sec);
            margin-bottom: 40px;
        }

        .cta-btn {
            padding: 15px 40px;
            background: transparent;
            border: 2px solid var(--accent);
            color: var(--accent);
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        .cta-btn:hover {
            background: var(--accent);
            color: #000;
            box-shadow: 0 0 20px var(--accent);
        }

        section {
            padding: 100px 10%;
        }

        .section-title {
            font-size: 3rem;
            margin-bottom: 50px;
            text-align: center;
        }

        .section-title span {
            border-bottom: 3px solid var(--accent);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .skill-card {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            border: 1px solid #333;
            transition: 0.3s;
        }

        .skill-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent);
            box-shadow: 0 5px 15px rgba(0, 255, 136, 0.1);
        }

        .skill-card i {
            font-size: 50px;
            color: var(--accent);
            margin-bottom: 20px;
        }

        .skill-card h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .project-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid #333;
            transition: 0.3s;
            position: relative;
        }

        .project-card:hover {
            transform: scale(1.02);
            border-color: var(--accent);
        }

        .project-info {
            padding: 25px;
        }

        .project-title {
            font-size: 24px;
            color: var(--accent);
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .project-desc {
            color: var(--text-sec);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tech-tag {
            background: #2a2a2a;
            color: #fff;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            border: 1px solid var(--accent);
        }

        .stats-section {
            display: flex;
            justify-content: space-around;
            text-align: center;
            background: #111;
            padding: 60px 10%;
            margin-top: 50px;
        }

        .stat-item h2 {
            font-size: 3rem;
            color: var(--accent);
        }

        .stat-item p {
            color: var(--text-sec);
            margin-top: 10px;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: var(--card-bg);
            padding: 40px;
            border-radius: 15px;
            border: 1px solid #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 15px;
            background: #0a0a0a;
            border: 1px solid #333;
            color: white;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }

        input:focus, textarea:focus {
            border-color: var(--accent);
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: var(--accent);
            color: #000;
            border: none;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        .submit-btn:hover {
            opacity: 0.8;
        }

        footer {
            text-align: center;
            padding: 40px;
            border-top: 1px solid #333;
            color: var(--text-sec);
        }

        @keyframes textShine {
            0% { filter: hue-rotate(0deg); }
            100% { filter: hue-rotate(360deg); }
        }

        @media (max-width: 768px) {
            .glitch-text { font-size: 2.5rem; }
            .nav-links { display: none; }
            section { padding: 60px 5%; }
            .stats-section { flex-direction: column; gap: 30px; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">&lt;DEV_MASTER /&gt;</div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <header id="home">
        <h1 class="glitch-text">IMPOSSIBLE IS NOTHING</h1>
        <p class="tagline">Full Stack Developer | Flutter Specialist | System Architect</p>
        <a href="#projects" class="cta-btn">View My Work</a>
    </header>

    <section id="about">
        <div class="section-title"><span>Who I Am</span></div>
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <p style="font-size: 1.2rem; color: var(--text-sec); line-height: 1.8;">
                I don't just write code; I build ecosystems. From complex backend architectures to pixel-perfect UI/UX in mobile applications, I handle it all. Problems are just puzzles waiting for my solution. If you can imagine it, I can build it.
            </p>
        </div>
        
        <div class="stats-section">
            <div class="stat-item">
                <h2>100%</h2>
                <p>Security Focus</p>
            </div>
            <div class="stat-item">
                <h2>24/7</h2>
                <p>System Uptime</p>
            </div>
            <div class="stat-item">
                <h2>∞</h2>
                <p>Possibilities</p>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="section-title"><span>Technical Arsenal</span></div>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="fab fa-android"></i>
                <h3>App Development</h3>
                <p>Flutter, Sketchware, Java/XML. Cross-platform & Native mastery.</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-server"></i>
                <h3>Backend Engineering</h3>
                <p>PHP, MySQL, REST APIs. Secure & Scalable data handling.</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Security & Hacking</h3>
                <p>App Security, Encryption, Vulnerability Assessment.</p>
            </div>
            <div class="skill-card">
                <i class="fas fa-robot"></i>
                <h3>Automation & AI</h3>
                <p>Telegram Bots, API Integration (Gemini/Groq), Background Services.</p>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="section-title"><span>Featured Projects</span></div>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-info">
                    <div class="project-title">
                        Elite X
                        <i class="fas fa-trophy"></i>
                    </div>
                    <p class="project-desc">
                        A revolutionary tournament app builder platform. Users submit requests, and the system facilitates the creation of custom eSports tournament apps with robust admin panels.
                    </p>
                    <div class="tech-stack">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-info">
                    <div class="project-title">
                        Smart AI Bot
                        <i class="fab fa-telegram"></i>
                    </div>
                    <p class="project-desc">
                        Advanced Telegram bot featuring image recognition, roasting capabilities, and voice interactions powered by cutting-edge AI APIs.
                    </p>
                    <div class="tech-stack">
                        <span class="tech-tag">Python/Node</span>
                        <span class="tech-tag">AI APIs</span>
                        <span class="tech-tag">Automation</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-info">
                    <div class="project-title">
                        Rs Pay
                        <i class="fas fa-sms"></i>
                    </div>
                    <p class="project-desc">
                        A complex background service application that reads SMS data securely and syncs with remote servers. Built to run persistently on Android.
                    </p>
                    <div class="tech-stack">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Background Service</span>
                        <span class="tech-tag">Java</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-info">
                    <div class="project-title">
                        Khelobangladesh
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <p class="project-desc">
                        A complete eSports tournament platform designed for high traffic and real-time user management.
                    </p>
                    <div class="tech-stack">
                        <span class="tech-tag">Android</span>
                        <span class="tech-tag">XML</span>
                        <span class="tech-tag">OneSignal</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="section-title"><span>Let's Build Something</span></div>
        <div class="contact-form">
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea rows="5" placeholder="Project Details" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 Master Developer. Built with Code & Attitude.</p>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        const sr = ScrollReveal({
            origin: 'top',
            distance: '80px',
            duration: 2000,
            reset: true
        });
    </script>
</body>
</html>
