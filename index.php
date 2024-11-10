
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loading.css">
    <script defer src="assets/javascript/main.js"></script>
</head>
<body>
    <!-- loading screen  -->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader-circle"></div>
            <div class="loader-circle"></div>
            <div class="loader-circle"></div>
            <div class="logo-text"><span>E</span>XP</div>
        </div>
    </div>
    <!-- main content  -->
    <nav class="navbar">
        <div class="logo"><span>E</span>XP</div>
        <div class="nav-links">
            <a href="#"><i class="fas fa-briefcase"></i> SERVICES</a>
            <a href="#"><i class="fas fa-users"></i> ABOUT US</a>
            <a href="#"><i class="fas fa-folder"></i> CASES</a>
        </div>
        <button class="sign-up-btn">
            SIGN UP 
            <i class="fas fa-arrow-right"></i>
        </button>
    </nav>

    <div class="main-content">
        <div class="hero-section">
            <div class="left-section">
                <h1 class="hero-text">BOUNDLESS<br>REVOLUTIONARY<br>INGENUITY</h1>
                <div class="profile-circles">
                    <div class="profile-circle"></div>
                    <div class="profile-circle orange-circle"></div>
                    <div class="profile-circle yellow-circle"></div>
                </div>
                
                <p><i class="fas fa-star"></i> OUR SOLUTIONS</p>
                <p>WE PROVIDE THE FULL<br>FUNNEL APPROACH</p>

                <div class="tags">
                    <span class="tag"><i class="fas fa-chart-line"></i> WEB ANALYTICS</span>
                    <span class="tag"><i class="fas fa-envelope"></i> EMAIL MARKETING</span>
                    <span class="tag"><i class="fas fa-search"></i> SEO 2.0</span>
                </div>
            </div>

            <div class="right-section">
                <img src="assets/illustration.png" alt="Business illustration">
            </div>
        </div>

        <div class="features">
            <div class="feature-card orange-card">
                <h3 class="feature-title">
                    <i class="fas fa-lightbulb"></i><br>
                    UNIQUE<br>BUSINESS SOLUTIONS
                </h3>
            </div>
            <div class="feature-card gray-card">
                <h3 class="feature-title">
                    <i class="fas fa-book"></i><br>
                    OUR CASE<br>STUDIES
                </h3>
            </div>
            <div class="feature-card yellow-card">
                <h3 class="feature-title">
                    <i class="fas fa-trophy"></i><br>
                    700+<br>SUCCESSFUL<br>PROJECTS
                </h3>
            </div>
        </div>
    </div>

    <section class="form-section">
        <div class="form-container">
            <h2 class="form-title">Book Your Demo Call</h2>
            <form method="POST" action="form.php" >
                <div class="form-group">
                    <label>Full Name</label>
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Enter your name">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-icon">
                        <i class="fas fa-building"></i>
                        <input type="password" name="password" placeholder="Enter Your Password">
                    </div>
                </div>
                <button type="submit" class="submit-btn">
                    Book Demo Call
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>EXP</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Web Analytics</a></li>
                    <li><a href="#">Email Marketing</a></li>
                    <li><a href="#">SEO Optimization</a></li>
                    <li><a href="#">Content Strategy</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Resources</h3>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Webinars</a></li>
                    <li><a href="#">eBooks</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Connect With Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
