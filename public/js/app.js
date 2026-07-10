/* -------------------------------------------------------------
 * Stiqr Learn - Premium JS Interactivity
 * Handles Navigation, Mobile Menu, Tab Filtering & Scroll Effects
 * ------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Header Scroll Effect
    const header = document.querySelector('.header');
    if (header) {
        const handleScroll = () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
        window.addEventListener('scroll', handleScroll);
        handleScroll();
    }

    // 1.5. Theme Toggle Logic
    const themeToggleBtn = document.getElementById('theme-toggle-btn');
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            document.body.classList.add('theme-transition');
            document.body.classList.toggle('dark-mode');
            const theme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            localStorage.setItem('theme', theme);
            
            // Remove transition class after the transition finishes (300ms)
            setTimeout(() => {
                document.body.classList.remove('theme-transition');
            }, 300);
        });
    }

    // 2. Mobile Menu Toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', () => {
            mobileToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            // Prevent background scrolling when menu is open
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu when clicking a link
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // 3. Course Tabs Filtering
    const filterTabs = document.querySelectorAll('.filter-tab');
    const courseCards = document.querySelectorAll('.course-card');

    if (filterTabs.length && courseCards.length) {
        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                filterTabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                tab.classList.add('active');

                const filterValue = tab.getAttribute('data-filter');

                // Animate and filter cards
                courseCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    
                    // Reset styling/animations
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.9) translateY(10px)';
                    
                    setTimeout(() => {
                        if (filterValue === 'all' || category === filterValue) {
                            card.style.display = 'flex';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'scale(1) translateY(0)';
                            }, 50);
                        } else {
                            card.style.display = 'none';
                        }
                    }, 200);
                });
            });
        });
    }

    // 4. Subtle Page Reveal Animations
    const animatedElements = document.querySelectorAll('.feature-card, .course-card, .section-title, .hero-content > *, .hero-visual');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    animatedElements.forEach((el, index) => {
        // Set initial state before observer runs
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = `opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.05}s, transform 0.6s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.05}s`;
        
        observer.observe(el);
    });
});
