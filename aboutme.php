<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 1. RESPONSIVE VIEWPORT META TAG (DO NOT REMOVE) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Responsive Profile</title>
    
    <!-- 2. BOOTSTRAP 5.3 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- 3. CUSTOM RESPONSIVE CSS TWEAKS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        /* Ensures the profile image is perfectly round and doesn't distort */
        .profile-img {
            max-width: 320px;
            width: 100%;
            height: auto;
            border-radius: 50%;
            border: 8px solid #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        /* Custom styling for the skill badges */
        .skill-badge {
            font-size: 0.95rem;
            padding: 10px 20px;
            margin: 6px;
            border-radius: 50px;
            transition: transform 0.2s ease;
        }
        .skill-badge:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

    <!-- ===================================================
         NAVIGATION BAR (Collapses into a Hamburger Menu on Mobile)
         =================================================== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase tracking-wider" href="#">My Profile</a>
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===================================================
         ABOUT ME SECTION (Side-by-Side on Desktop, Stacked on Mobile)
         =================================================== -->
    <section id="about" class="py-5 my-md-5">
        <div class="container">
            <!-- 'g-5' adds responsive spacing gaps; 'align-items-center' aligns text/image vertically -->
            <div class="row align-items-center g-5">
                
                <!-- Left/Top Column: Profile Image -->
                <!-- col-12 (Mobile: Full width) | col-md-5 (Tablet/Desktop: takes up 5 out of 12 columns) -->
                <div class="col-12 col-md-5 text-center">
                    <!-- Replace URL with your own photo path -->
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=500&q=80" alt="Your Profile Picture" class="profile-img">
                </div>
                
                <!-- Right/Bottom Column: About Me Text Details -->
                <!-- col-12 (Mobile: Full width) | col-md-7 (Tablet/Desktop: takes up 7 out of 12 columns) -->
                <!-- 'text-center' centers text on mobile | 'text-md-start' flushes it left on desktop -->
                <div class="col-12 col-md-7 text-center text-md-start">
                    <span class="text-primary text-uppercase fw-bold letter-spacing">Who I Am</span>
                    <h1 class="display-4 fw-bold text-dark mt-1 mb-3">Hello, I'm [Your Name]</h1>
                    <h3 class="text-muted fw-light mb-4">Full-Stack Web Developer & Designer</h3>
                    
                    <p class="lead text-secondary mb-4">
                        I create modern, responsive websites that look beautiful and perform exceptionally well on every screen size. Using clean code and thoughtful design, I turn complex ideas into seamless digital realities.
                    </p>
                    
                    <p class="text-secondary mb-4">
                        Whether someone is browsing your site on an iPhone while riding the subway or sitting in front of a 4K desktop monitor at work, I ensure your presentation stays pixel-perfect, fast-loading, and completely intuitive.
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="pt-2">
                        <a href="#contact" class="btn btn-primary btn-lg px-4 me-sm-2 mb-3 mb-sm-0 shadow-sm">Work With Me</a>
                        <a href="#" class="btn btn-outline-secondary btn-lg px-4 shadow-sm">Download Resume</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================================================
         SKILLS SECTION (Flexbox wrapped grid for all devices)
         =================================================== -->
    <section id="skills" class="py-5 bg-white border-top border-bottom">
        <div class="container text-center">
            <h2 class="fw-bold text-dark mb-2">My Skillset</h2>
            <p class="text-muted mb-4">Technologies and tools I work with daily</p>
            
            <!-- 'd-flex flex-wrap' wraps elements naturally onto new lines if screens get too narrow -->
            <div class="d-flex flex-wrap justify-content-center">
                <span class="badge bg-dark text-white skill-badge">HTML5 / CSS3</span>
                <span class="badge bg-primary text-white skill-badge">Bootstrap 5</span>
                <span class="badge bg-warning text-dark skill-badge">JavaScript (ES6+)</span>
                <span class="badge bg-info text-dark skill-badge">React.js</span>
                <span class="badge bg-success text-white skill-badge">Node.js</span>
                <span class="badge bg-danger text-white skill-badge">Git & GitHub</span>
                <span class="badge bg-secondary text-white skill-badge">Responsive UI Design</span>
            </div>
        </div>
    </section>

    <!-- ===================================================
         BOOTSTRAP 5 JAVASCRIPT BUNDLE (For Responsive Menu Toggle)
         =================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>