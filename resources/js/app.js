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

    // 1.5. Theme Toggle Logic — binds to ALL theme toggle buttons on the page
    const themeToggleBtns = document.querySelectorAll('#theme-toggle-btn');
    themeToggleBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            document.body.classList.add('theme-transition');
            document.body.classList.toggle('dark-mode');
            const theme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            localStorage.setItem('theme', theme);

            // Remove transition class after the transition finishes (300ms)
            setTimeout(() => {
                document.body.classList.remove('theme-transition');
            }, 300);
        });
    });

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

    // =========================================================
    // 5. ONBOARDING WIZARD
    // =========================================================
    const obForm = document.getElementById('onboarding-form');
    const obSteps = document.querySelectorAll('.ob-step');
    const obBtnNext = document.getElementById('ob-btn-next');
    const obBtnBack = document.getElementById('ob-btn-back');
    const obProgressFill = document.getElementById('ob-progress-fill');
    let currentStep = 1;
    const totalSteps = 5;

    function updateOnboardingStep() {
        obSteps.forEach(step => {
            step.classList.remove('active');
            if (parseInt(step.dataset.step) === currentStep) {
                step.classList.add('active');
            }
        });

        // Update progress bar
        if (obProgressFill) {
            const progress = (currentStep / totalSteps) * 100;
            obProgressFill.style.width = progress + '%';
        }

        // Update back button visibility
        if (obBtnBack) {
            obBtnBack.style.visibility = currentStep === 1 ? 'hidden' : 'visible';
        }

        // Update next button text
        if (obBtnNext) {
            if (currentStep === totalSteps) {
                obBtnNext.innerHTML = 'Finish <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>';
            } else {
                obBtnNext.innerHTML = 'Next <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/></svg>';
            }
        }
    }

    if (obBtnNext) {
        obBtnNext.addEventListener('click', () => {
            if (currentStep < totalSteps) {
                currentStep++;
                updateOnboardingStep();
            } else {
                // Submit form on last step
                if (obForm) {
                    obForm.submit();
                }
            }
        });
    }

    if (obBtnBack) {
        obBtnBack.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                updateOnboardingStep();
            }
        });
    }

    // Onboarding Search Filters (Roles)
    const roleSearch = document.getElementById('role-search');
    const roleGrid = document.getElementById('role-grid');
    if (roleSearch && roleGrid) {
        roleSearch.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            const cards = roleGrid.querySelectorAll('.ob-chip-card');
            cards.forEach(card => {
                const label = card.querySelector('.ob-chip-label').textContent.toLowerCase();
                card.style.display = label.includes(query) ? '' : 'none';
            });
        });
    }

    // Onboarding Search Filters (Skills)
    const skillSearch = document.getElementById('skill-search');
    const skillGrid = document.getElementById('skill-grid');
    if (skillSearch && skillGrid) {
        skillSearch.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            const chips = skillGrid.querySelectorAll('.ob-skill-chip');
            chips.forEach(chip => {
                const text = chip.querySelector('.ob-skill-text').textContent.toLowerCase();
                chip.style.display = text.includes(query) ? '' : 'none';
            });
        });
    }

    // Job Title Selection (Step 4)
    const jobTitleInput = document.getElementById('job-title-input');
    const jobSuggestions = document.getElementById('job-suggestions');
    if (jobTitleInput && jobSuggestions) {
        const jobItems = jobSuggestions.querySelectorAll('.ob-job-item');

        jobItems.forEach(item => {
            item.addEventListener('click', () => {
                // Remove selected from all items
                jobItems.forEach(i => i.classList.remove('selected'));
                // Select this one
                item.classList.add('selected');
                jobTitleInput.value = item.dataset.value;
            });
        });

        // Filter job suggestions
        jobTitleInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            jobItems.forEach(item => {
                const text = item.textContent.toLowerCase();
                item.style.display = text.includes(query) ? '' : 'none';
            });
        });
    }

    // =========================================================
    // 6. DASHBOARD SIDEBAR TOGGLE
    // =========================================================
    const dbSidebar = document.getElementById('db-sidebar');
    const dbHamburger = document.getElementById('db-hamburger');
    const dbOverlay = document.getElementById('db-overlay');
    const dbSidebarClose = document.getElementById('db-sidebar-close');

    function openSidebar() {
        if (dbSidebar) dbSidebar.classList.add('open');
        if (dbOverlay) dbOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        if (dbSidebar) dbSidebar.classList.remove('open');
        if (dbOverlay) dbOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (dbHamburger) {
        dbHamburger.addEventListener('click', openSidebar);
    }

    if (dbOverlay) {
        dbOverlay.addEventListener('click', closeSidebar);
    }

    if (dbSidebarClose) {
        dbSidebarClose.addEventListener('click', closeSidebar);
    }

    // =========================================================
    // 7. SETTINGS PAGE THEME SWITCHER
    // =========================================================
    const themeLightBtn = document.getElementById('theme-light-btn');
    const themeDarkBtn = document.getElementById('theme-dark-btn');

    if (themeLightBtn && themeDarkBtn) {
        const updateSettingsThemeButtons = () => {
            const currentTheme = localStorage.getItem('theme') || 'light';
            if (currentTheme === 'dark') {
                themeDarkBtn.classList.add('active');
                themeLightBtn.classList.remove('active');
            } else {
                themeLightBtn.classList.add('active');
                themeDarkBtn.classList.remove('active');
            }
        };

        updateSettingsThemeButtons();

        themeLightBtn.addEventListener('click', () => {
            document.body.classList.add('theme-transition');
            document.body.classList.remove('dark-mode');
            localStorage.setItem('theme', 'light');
            updateSettingsThemeButtons();
            
            // Sync with sidebar theme toggle if it exists
            setTimeout(() => document.body.classList.remove('theme-transition'), 300);
        });

        themeDarkBtn.addEventListener('click', () => {
            document.body.classList.add('theme-transition');
            document.body.classList.add('dark-mode');
            localStorage.setItem('theme', 'dark');
            updateSettingsThemeButtons();
            
            setTimeout(() => document.body.classList.remove('theme-transition'), 300);
        });
    }

    // =========================================================
    // 8. MY COURSES PAGE FILTERING & BOOKMARKS
    // =========================================================
    const mcFilterTabs = document.querySelectorAll('.mc-filter-tab');
    const mcCourseItems = document.querySelectorAll('.mc-course-item');
    const mcBookmarkBtns = document.querySelectorAll('.mc-bookmark-btn');

    const updateFilterCounts = () => {
        let total = mcCourseItems.length;
        let inProgress = 0;
        let completed = 0;
        let bookmarked = 0;

        mcCourseItems.forEach(item => {
            const status = item.dataset.status;
            const hasActiveBookmark = item.querySelector('.mc-bookmark-btn.active');

            if (status === 'in-progress') inProgress++;
            if (status === 'completed') completed++;
            if (status === 'bookmarked' || hasActiveBookmark) bookmarked++;
        });

        const countTotal = document.querySelector('.mc-filter-tab[data-filter="all"] .mc-count');
        const countInProgress = document.querySelector('.mc-filter-tab[data-filter="in-progress"] .mc-count');
        const countCompleted = document.querySelector('.mc-filter-tab[data-filter="completed"] .mc-count');
        const countBookmarked = document.querySelector('.mc-filter-tab[data-filter="bookmarked"] .mc-count');

        if (countTotal) countTotal.textContent = total;
        if (countInProgress) countInProgress.textContent = inProgress;
        if (countCompleted) countCompleted.textContent = completed;
        if (countBookmarked) countBookmarked.textContent = bookmarked;
    };

    if (mcFilterTabs.length && mcCourseItems.length) {
        mcFilterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                mcFilterTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                const filter = tab.dataset.filter;

                mcCourseItems.forEach(item => {
                    const status = item.dataset.status;
                    const isBookmarked = item.querySelector('.mc-bookmark-btn.active') !== null;

                    let show = false;
                    if (filter === 'all') {
                        show = true;
                    } else if (filter === 'in-progress' && status === 'in-progress') {
                        show = true;
                    } else if (filter === 'completed' && status === 'completed') {
                        show = true;
                    } else if (filter === 'bookmarked' && (status === 'bookmarked' || isBookmarked)) {
                        show = true;
                    }

                    if (show) {
                        item.style.display = 'flex';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Initialize counts
        updateFilterCounts();
    }

    if (mcBookmarkBtns.length) {
        mcBookmarkBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                btn.classList.toggle('active');
                updateFilterCounts();

                // If currently on the bookmarked filter tab, hide the card if bookmarked is toggled off
                const activeTab = document.querySelector('.mc-filter-tab.active');
                if (activeTab && activeTab.dataset.filter === 'bookmarked' && !btn.classList.contains('active')) {
                    const card = btn.closest('.mc-course-item');
                    if (card && card.dataset.status !== 'bookmarked') {
                        card.style.display = 'none';
                    }
                }
            });
        });
    }
});

