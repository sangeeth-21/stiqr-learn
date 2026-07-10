<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stiqr Learn - Premium Education & Interactive Learning Platform</title>
    <!-- Meta Descriptions for SEO -->
    <meta name="description" content="Master high-demand skills in Technology, Design, and Business with Stiqr Learn. Enjoy flexible, expert-led courses and earn global certifications today.">
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23e53935%22/><text y=%22.9em%22 font-size=%2290%22 fill=%22%23ffffff%22>S</text></svg>">
    <!-- Local CSS stylesheet link -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <script>
        // Immediately apply dark mode class if set in local storage to prevent flashing
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
        }
    </script>

    <!-- Header Navigation -->
    <header class="header">
        <div class="container nav-container">
            <a href="#" class="logo" id="main-logo">
                Stiqr<span>Learn</span>
            </a>

            <nav class="nav-menu" id="nav-menu">
                <a href="#home" class="nav-link active">Home</a>
                <a href="#features" class="nav-link">Why Us</a>
                <a href="#courses" class="nav-link">Courses</a>
                <a href="#testimonials" class="nav-link">Testimonials</a>
                <a href="#cta" class="nav-link">Join Now</a>
            </nav>

            <div class="nav-actions">
                <a href="{{ url('/login') }}" class="nav-link" style="margin-right: 10px;">Sign In</a>
                <a href="#cta" class="btn btn-primary" id="header-cta-btn">Get Started</a>
                <!-- Theme Toggle Button -->
                    <button class="theme-toggle-btn theme-toggle-header" id="theme-toggle-btn" aria-label="Toggle Dark/Light Mode">
                    <svg class="sun-icon theme-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M18.36 18.36l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path>
                    </svg>
                    <svg class="moon-icon theme-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                    </svg>
                </button>
            </div>

            <!-- Hamburger Button for Mobile -->
            <button class="mobile-toggle" aria-label="Toggle navigation menu" id="mobile-toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="badge">🎓 Leading Online Education</span>
                <h1>Shape Your Future with Modern <span>Learning</span></h1>
                <p class="hero-desc">Access elite, interactive courses, master high-demand professional skills, and learn from industry leaders. Join a global community of 15,000+ students today.</p>
                
                <div class="hero-buttons">
                    <a href="#courses" class="btn btn-primary">Explore Courses</a>
                    <a href="#features" class="btn btn-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445"/>
                        </svg>
                        Why Stiqr Learn
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-num">15k+</span>
                        <span class="stat-label">Active Learners</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-num">180+</span>
                        <span class="stat-label">Expert Instructors</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-num">99.2%</span>
                        <span class="stat-label">Satisfaction Rate</span>
                    </div>
                </div>
            </div>

            <!-- Hero Visual: 3D Learning Scene -->
            <div class="hero-visual hero-3d-scene">

                <!-- Background glow -->
                <div class="scene-glow"></div>

                <!-- 3D Laptop + Books -->
                <div class="scene-wrap">

                    <!-- 3D Laptop -->
                    <div class="laptop-3d">
                        <div class="laptop-lid">
                            <div class="laptop-notch"></div>
                            <div class="laptop-screen">
                                <div class="ls-toolbar">
                                    <div class="ls-dots">
                                        <span class="ls-dot d-red"></span>
                                        <span class="ls-dot d-yellow"></span>
                                        <span class="ls-dot d-green"></span>
                                    </div>
                                    <div class="ls-filename">stiqr-learn / main.php</div>
                                </div>
                                <div class="ls-code">
                                    <div class="ls-line"><span class="ln">1</span><span class="kw">class</span> <span class="cl">StiqrLearn</span> {</div>
                                    <div class="ls-line"><span class="ln">2</span>&nbsp;&nbsp;<span class="kw">public</span> <span class="fn">learn</span>(<span class="str">'PHP'</span>) {</div>
                                    <div class="ls-line"><span class="ln">3</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="kw">return</span> <span class="str">'success'</span>;</div>
                                    <div class="ls-line"><span class="ln">4</span>&nbsp;&nbsp;}</div>
                                    <div class="ls-line ls-active"><span class="ln">5</span><span class="co">// 92% complete ✓</span></div>
                                    <div class="ls-line"><span class="ln">6</span>}</div>
                                </div>
                                <div class="ls-footer">
                                    <div class="ls-progress"><div class="ls-progress-fill"></div></div>
                                    <span class="ls-progress-text">Course Progress: 92%</span>
                                </div>
                            </div>
                        </div>
                        <div class="laptop-hinge"></div>
                        <div class="laptop-base">
                            <div class="keyboard-area">
                                <div class="kb-row"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                                <div class="kb-row"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                                <div class="kb-row"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                                <div class="kb-row kb-space"><span class="spacebar"></span></div>
                            </div>
                            <div class="trackpad"></div>
                        </div>
                    </div>

                    <!-- 3D Book Stack -->
                    <div class="book-tower">
                        <div class="book3d bk1"><div class="bk-cover"></div><div class="bk-spine">PHP</div><div class="bk-pages"></div></div>
                        <div class="book3d bk2"><div class="bk-cover"></div><div class="bk-spine">CSS</div><div class="bk-pages"></div></div>
                        <div class="book3d bk3"><div class="bk-cover"></div><div class="bk-spine">JS</div><div class="bk-pages"></div></div>
                    </div>

                </div>

                <!-- Floating Decorations -->
                <div class="floater grad-cap-float">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 60" width="72" height="54" aria-hidden="true">
                        <polygon points="40,6 72,22 40,38 8,22" fill="#e53935"/>
                        <polygon points="40,38 72,22 72,34 40,50" fill="#b71c1c"/>
                        <polygon points="8,22 40,38 40,50 8,34" fill="#c62828"/>
                        <polygon points="40,6 72,22 40,38 8,22" fill="none" stroke="rgba(0,0,0,0.15)" stroke-width="1"/>
                        <line x1="72" y1="22" x2="72" y2="44" stroke="#e53935" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="72" cy="46" r="4" fill="#ffd740"/>
                    </svg>
                </div>

                <div class="floater trophy-float">
                    <div class="trophy-card">
                        <span>🏆</span>
                        <strong>Certified Dev</strong>
                    </div>
                </div>

                <div class="floater code-float">
                    <div class="code-badge">&lt;/&gt;</div>
                </div>

                <div class="floater star-badge-float">
                    <div class="star-badge">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="#ffd740"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <span>4.9 / 5</span>
                    </div>
                </div>

                <!-- Sparkles -->
                <div class="sparkle sp1">✦</div>
                <div class="sparkle sp2">✦</div>
                <div class="sparkle sp3">★</div>
                <div class="sparkle sp4">✦</div>

                <!-- Floating Stat Chips -->
                <div class="hero-stat-chip chip-1">
                    <span class="chip-icon">🚀</span>
                    <div><strong>15,000+</strong><span>Active Learners</span></div>
                </div>
                <div class="hero-stat-chip chip-2">
                    <span class="chip-icon">🏆</span>
                    <div><strong>99.2%</strong><span>Satisfaction</span></div>
                </div>
                <div class="hero-stat-chip chip-3">
                    <span class="chip-icon">🎓</span>
                    <div><strong>180+</strong><span>Expert Instructors</span></div>
                </div>

            </div>
        </div>
    </section>

    <!-- Trusted By Partners Section -->
    <section class="trusted-by">
        <div class="container">
            <h3 class="trusted-title">Our Alumni Work at Leading Tech Brands</h3>
            <div class="trusted-logos">
                <span class="logo-item">Google</span>
                <span class="logo-item">Microsoft</span>
                <span class="logo-item">Amazon</span>
                <span class="logo-item">Stripe</span>
                <span class="logo-item">Slack</span>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section features" id="features">
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
                <span class="badge">🔥 KEY ADVANTAGES</span>
                <h2 class="section-title">An Elite Learning <span>Ecosystem</span></h2>
                <p class="section-subtitle">We provide state-of-the-art tools and resources designed to accelerate your growth and build industry-level competence.</p>
            </div>

            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                    </div>
                    <h3>Industry Expert Mentors</h3>
                    <p>Learn direct from professionals who build actual products at top software engineering firms and design agencies worldwide.</p>
                    <a href="#courses" class="feature-link">
                        Find Instructors
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                        </svg>
                    </a>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                        </svg>
                    </div>
                    <h3>Flexible Learning Paths</h3>
                    <p>Go at your own speed with 24/7 access to bite-sized lectures, interactive sandbox coding, and comprehensive project plans.</p>
                    <a href="#courses" class="feature-link">
                        Explore Schedule
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                        </svg>
                    </a>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-11.386 0A9 9 0 0 1 2.5.5M3.75 3h8.5c-.002-.366-.006-.7-.015-1H3.765q-.012.498-.015 1M12 7a2 2 0 1 0-4 0 2 2 0 0 0 4 0m-6 0a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                        </svg>
                    </div>
                    <h3>Accredited Certifications</h3>
                    <p>Get recognized by global employers. Complete your capstone projects to instantly receive a cryptographically shareable digital certificate.</p>
                    <a href="#courses" class="feature-link">
                        View Sample Certificate
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Courses Section -->
    <section class="section courses" id="courses">
        <div class="container">
            <div class="courses-header-wrapper">
                <div>
                    <span class="badge">📚 DISCOVER PATHS</span>
                    <h2 class="section-title">Explore Popular <span>Courses</span></h2>
                </div>
                <div class="filter-tabs">
                    <button class="filter-tab active" data-filter="all">All Fields</button>
                    <button class="filter-tab" data-filter="tech">Technology</button>
                    <button class="filter-tab" data-filter="design">Design</button>
                    <button class="filter-tab" data-filter="business">Business</button>
                </div>
            </div>

            <div class="courses-grid">
                <!-- Course 1 (Tech) -->
                <div class="course-card" data-category="tech">
                    <div class="course-image">
                        <div class="course-img-placeholder">Laravel Dev</div>
                        <span class="course-tag">Bestseller</span>
                    </div>
                    <div class="course-details">
                        <div class="course-meta">
                            <span class="course-meta-item">⏱ 14 Hours</span>
                            <span class="course-meta-item">📁 48 Lectures</span>
                        </div>
                        <h3>Advanced Laravel Framework & API Architecture</h3>
                        <div class="course-rating">
                            <span class="stars">★★★★★</span>
                            <span>4.9 (124 reviews)</span>
                        </div>
                        <div class="course-footer">
                            <div class="course-instructor">
                                <div class="instructor-avatar">SC</div>
                                <span class="instructor-name">Sarah Connor</span>
                            </div>
                            <span class="course-price">$49.99</span>
                        </div>
                    </div>
                </div>

                <!-- Course 2 (Design) -->
                <div class="course-card" data-category="design">
                    <div class="course-image">
                        <div class="course-img-placeholder" style="background: linear-gradient(45deg, #ff8a80 0%, #ffcdd2 100%);">UI/UX Figma</div>
                        <span class="course-tag">Trending</span>
                    </div>
                    <div class="course-details">
                        <div class="course-meta">
                            <span class="course-meta-item">⏱ 10 Hours</span>
                            <span class="course-meta-item">📁 32 Lectures</span>
                        </div>
                        <h3>Design Systems Masterclass: From Figma to Production</h3>
                        <div class="course-rating">
                            <span class="stars">★★★★☆</span>
                            <span>4.8 (92 reviews)</span>
                        </div>
                        <div class="course-footer">
                            <div class="course-instructor">
                                <div class="instructor-avatar">AR</div>
                                <span class="instructor-name">Alex Rivera</span>
                            </div>
                            <span class="course-price">$39.99</span>
                        </div>
                    </div>
                </div>

                <!-- Course 3 (Business) -->
                <div class="course-card" data-category="business">
                    <div class="course-image">
                        <div class="course-img-placeholder" style="background: linear-gradient(45deg, #b71c1c 0%, #ff8a80 100%); color: white;">Marketing</div>
                        <span class="course-tag">New</span>
                    </div>
                    <div class="course-details">
                        <div class="course-meta">
                            <span class="course-meta-item">⏱ 18 Hours</span>
                            <span class="course-meta-item">📁 60 Lectures</span>
                        </div>
                        <h3>Digital Growth Hacking & Strategic Analytics</h3>
                        <div class="course-rating">
                            <span class="stars">★★★★★</span>
                            <span>4.7 (58 reviews)</span>
                        </div>
                        <div class="course-footer">
                            <div class="course-instructor">
                                <div class="instructor-avatar">MB</div>
                                <span class="instructor-name">Marcus Bennett</span>
                            </div>
                            <span class="course-price">$29.99</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials" id="testimonials">
        <div class="container">
            <div style="text-align: center; display: flex; flex-direction: column; align-items: center; margin-bottom: 50px;">
                <span class="badge">💬 SUCCESS STORIES</span>
                <h2 class="section-title">What Our <span>Students</span> Say</h2>
            </div>

            <div class="testimonial-card">
                <div class="quote-icon">“</div>
                <p class="testimonial-text">Stiqr Learn completely redefined my educational standards. The course material is exceptionally detailed, interactive, and directly applicable. I managed to transition from zero coding knowledge to securing a full-time Laravel developer role in less than 4 months!</p>
                <div class="testimonial-user">
                    <div class="user-avatar">JD</div>
                    <span class="user-name">Jane Doe</span>
                    <span class="user-role">Full-Stack Engineer at Stripe</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action (CTA) Section -->
    <section class="section container" style="padding: 0;">
        <div class="cta" id="cta">
            <div class="cta-bg-pattern"></div>
            <div class="container cta-container">
                <div class="cta-content">
                    <span class="badge white">JOIN US TODAY</span>
                    <h2>Unlock Your Path To Modern Skills</h2>
                    <p>Subscribe to our newsletter to receive expert tutorials, project plans, and a 20% discount coupon directly in your inbox.</p>
                </div>
                <div class="cta-action">
                    <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing! Check your email for your 20% off voucher.');">
                        <input type="email" placeholder="Enter your email address" required aria-label="Email address for newsletter">
                        <button type="submit" class="btn btn-primary" style="background-color: var(--color-primary-dark);">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-logo-desc">
                <a href="#" class="logo">
                    Stiqr<span>Learn</span>
                </a>
                <p>An interactive educational workspace designed to train the next generation of digital professionals in software, design, and analytics.</p>
            </div>

            <div class="footer-column">
                <h4>Company</h4>
                <div class="footer-links">
                    <a href="#">About Us</a>
                    <a href="#">Our Team</a>
                    <a href="#">Careers</a>
                    <a href="#">Press Kit</a>
                </div>
            </div>

            <div class="footer-column">
                <h4>Resources</h4>
                <div class="footer-links">
                    <a href="#">Help Center</a>
                    <a href="#">Guides</a>
                    <a href="#">Discord Community</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>

            <div class="footer-column">
                <h4>Contact Us</h4>
                <div class="footer-contact">
                    <div class="contact-item">
                        <span class="contact-icon">✉</span>
                        <span>support@stiqrlearn.com</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📞</span>
                        <span>+1 (800) 555-LEARN</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <span>San Francisco, CA</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom">
            <p>&copy; 2026 Stiqr Learn. All rights reserved. Built with PHP Laravel.</p>
            <div class="social-links">
                <a href="#" class="social-link" aria-label="Twitter">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="GitHub">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="LinkedIn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- Script assets loading -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
