<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Started - Stiqr Learn</title>
    <meta name="description" content="Personalize your Stiqr Learn experience. Tell us about your goals, skills, and interests to get tailored course recommendations.">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23e53935%22/><text y=%22.9em%22 font-size=%2290%22 fill=%22%23ffffff%22>S</text></svg>">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="onboarding-page">
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
        }
    </script>

    <!-- Onboarding Header -->
    <header class="ob-header">
        <a href="{{ url('/') }}" class="ob-logo">Stiqr<span>Learn</span></a>
        <div class="ob-header-actions">
            <button class="theme-toggle-btn ob-theme-toggle" id="theme-toggle-btn" aria-label="Toggle Dark/Light Mode">
                <svg class="sun-icon theme-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M18.36 18.36l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path>
                </svg>
                <svg class="moon-icon theme-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                </svg>
            </button>
            <a href="{{ url('/onboarding/skip') }}" class="ob-exit-btn" aria-label="Exit Onboarding" title="Skip to Dashboard">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                </svg>
            </a>
        </div>
    </header>

    <!-- Progress Bar -->
    <div class="ob-progress-bar">
        <div class="ob-progress-fill" id="ob-progress-fill" style="width: 20%;"></div>
    </div>

    <!-- Form wraps all steps -->
    <form method="POST" action="{{ url('/onboarding') }}" id="onboarding-form">
        @csrf

        <!-- Step 1: What's your goal? -->
        <div class="ob-step active" data-step="1">
            <div class="ob-step-content">
                <h2 class="ob-step-label">Step 1 of 5</h2>
                <h1 class="ob-step-title">Hello {{ $userName }}!</h1>
                <p class="ob-step-subtitle">Tell me a little about yourself so I can make the best recommendations. First, what's your goal?</p>

                <div class="ob-goal-grid">
                    <label class="ob-goal-card" data-value="start_career">
                        <input type="radio" name="goal" value="start_career" class="ob-hidden-radio">
                        <div class="ob-goal-illustration ob-goal-1">
                            <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="80" height="80" rx="16" fill="var(--color-primary)"/>
                                <path d="M40 20L55 35L40 50L25 35L40 20Z" fill="rgba(255,255,255,0.3)"/>
                                <path d="M30 45L50 45L50 60L30 60Z" fill="rgba(255,255,255,0.2)"/>
                                <path d="M35 28L45 28L48 38L32 38Z" fill="white" opacity="0.8"/>
                                <circle cx="40" cy="42" r="4" fill="white"/>
                            </svg>
                        </div>
                        <span class="ob-goal-label">Start my career</span>
                    </label>
                    <label class="ob-goal-card" data-value="change_career">
                        <input type="radio" name="goal" value="change_career" class="ob-hidden-radio">
                        <div class="ob-goal-illustration ob-goal-2">
                            <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="80" height="80" rx="16" fill="var(--color-primary)"/>
                                <path d="M25 55L40 25L55 55" stroke="white" stroke-width="3" fill="none" opacity="0.3"/>
                                <path d="M20 40H35L45 30H60" stroke="white" stroke-width="2.5" fill="none"/>
                                <circle cx="35" cy="40" r="3" fill="white"/>
                                <circle cx="60" cy="30" r="3" fill="white"/>
                            </svg>
                        </div>
                        <span class="ob-goal-label">Change my career</span>
                    </label>
                    <label class="ob-goal-card" data-value="grow_role">
                        <input type="radio" name="goal" value="grow_role" class="ob-hidden-radio">
                        <div class="ob-goal-illustration ob-goal-3">
                            <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="80" height="80" rx="16" fill="var(--color-primary)"/>
                                <path d="M20 60L35 40L50 48L65 22" stroke="white" stroke-width="2.5" fill="none"/>
                                <circle cx="65" cy="22" r="3" fill="white"/>
                                <path d="M60 20L65 15L70 22" stroke="white" stroke-width="2" fill="none"/>
                            </svg>
                        </div>
                        <span class="ob-goal-label">Grow in my current role</span>
                    </label>
                    <label class="ob-goal-card" data-value="explore">
                        <input type="radio" name="goal" value="explore" class="ob-hidden-radio">
                        <div class="ob-goal-illustration ob-goal-4">
                            <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="80" height="80" rx="16" fill="var(--color-primary)"/>
                                <circle cx="40" cy="38" r="14" stroke="white" stroke-width="2.5" fill="none"/>
                                <circle cx="40" cy="38" r="5" fill="white" opacity="0.4"/>
                                <path d="M40 24V28M40 48V52M26 38H30M50 38H54" stroke="white" stroke-width="2"/>
                            </svg>
                        </div>
                        <span class="ob-goal-label">Explore topics outside of work</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Step 2: Which roles? -->
        <div class="ob-step" data-step="2">
            <div class="ob-step-content">
                <h2 class="ob-step-label">Step 2 of 5</h2>
                <h1 class="ob-step-title">Great! Which role(s) are you interested in?</h1>

                <div class="ob-search-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                    <input type="text" class="ob-search-input" id="role-search" placeholder="Find a role" autocomplete="off">
                </div>

                <div class="ob-chip-grid" id="role-grid">
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="Data Scientist" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #f59e0b;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg></div>
                        <span class="ob-chip-label">Data Scientist</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="Analytics Manager" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #f59e0b;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M3 3v18h18V3H3zm16 16H5V5h14v14zM7 7h2v10H7V7zm4 3h2v7h-2v-7zm4-1h2v8h-2V9z"/></svg></div>
                        <span class="ob-chip-label">Analytics Manager</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="Machine Learning Engineer" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #6b7280;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M12 2a2 2 0 0 1 2 2c0 .74-.4 1.39-1 1.73V7h1a7 7 0 0 1 7 7h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1a7 7 0 0 1 7-7h1V5.73c-.6-.34-1-.99-1-1.73a2 2 0 0 1 2-2M7.5 13A2.5 2.5 0 0 0 5 15.5 2.5 2.5 0 0 0 7.5 18a2.5 2.5 0 0 0 2.5-2.5A2.5 2.5 0 0 0 7.5 13m9 0a2.5 2.5 0 0 0-2.5 2.5 2.5 2.5 0 0 0 2.5 2.5 2.5 2.5 0 0 0 2.5-2.5 2.5 2.5 0 0 0-2.5-2.5z"/></svg></div>
                        <span class="ob-chip-label">Machine Learning Engineer</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="Data Analyst" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #f59e0b;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/></svg></div>
                        <span class="ob-chip-label">Data Analyst</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="Full Stack Developer" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #1d4ed8;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M8 3a2 2 0 0 0-2 2v4a2 2 0 0 1-2 2H3v2h1a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h2v-2H8v-5a2 2 0 0 0-1-1.73A2 2 0 0 0 8 10V5h2V3H8zm8 0a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h1v2h-1a2 2 0 0 0-2 2v4a2 2 0 0 1-2 2h-2v-2h2v-5a2 2 0 0 1 1-1.73A2 2 0 0 1 16 10V5h-2V3h2z"/></svg></div>
                        <span class="ob-chip-label">Full Stack Developer</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="Computer Scientist" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #6b7280;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/></svg></div>
                        <span class="ob-chip-label">Computer Scientist</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="UX Designer" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #e53935;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67A2.5 2.5 0 0 1 12 22zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5a.54.54 0 0 0-.14-.35c-.41-.46-.63-1.05-.63-1.65a2.5 2.5 0 0 1 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg></div>
                        <span class="ob-chip-label">UX Designer</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="Project Manager" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #1d4ed8;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div>
                        <span class="ob-chip-label">Project Manager</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                    <label class="ob-chip-card">
                        <input type="checkbox" name="roles[]" value="Marketing Analyst" class="ob-hidden-check">
                        <div class="ob-chip-icon" style="background: #047857;"><svg viewBox="0 0 24 24" width="20" height="20" fill="white"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg></div>
                        <span class="ob-chip-label">Marketing Analyst</span>
                        <span class="ob-chip-add">+</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Step 3: Skills -->
        <div class="ob-step" data-step="3">
            <div class="ob-step-content">
                <h2 class="ob-step-label">Step 3 of 5</h2>
                <h1 class="ob-step-title">Select the skills you'd like to develop</h1>
                <p class="ob-step-subtitle">Below are some of our most popular skills</p>

                <div class="ob-search-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                    <input type="text" class="ob-search-input" id="skill-search" placeholder="Find a skill" autocomplete="off">
                </div>

                <div class="ob-chip-grid ob-skill-grid" id="skill-grid">
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Data Analysis" class="ob-hidden-check"><span class="ob-skill-text">Data Analysis</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Python Programming" class="ob-hidden-check"><span class="ob-skill-text">Python Programming</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Machine Learning" class="ob-hidden-check"><span class="ob-skill-text">Machine Learning</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Web Development" class="ob-hidden-check"><span class="ob-skill-text">Web Development</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Laravel PHP" class="ob-hidden-check"><span class="ob-skill-text">Laravel PHP</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Project Management" class="ob-hidden-check"><span class="ob-skill-text">Project Management</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Artificial Intelligence" class="ob-hidden-check"><span class="ob-skill-text">Artificial Intelligence</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="UI/UX Design" class="ob-hidden-check"><span class="ob-skill-text">UI/UX Design</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Cloud Computing" class="ob-hidden-check"><span class="ob-skill-text">Cloud Computing</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Critical Thinking" class="ob-hidden-check"><span class="ob-skill-text">Critical Thinking</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="Digital Marketing" class="ob-hidden-check"><span class="ob-skill-text">Digital Marketing</span><span class="ob-chip-add">+</span></label>
                    <label class="ob-skill-chip"><input type="checkbox" name="skills[]" value="I don't know" class="ob-hidden-check"><span class="ob-skill-text">I don't know</span><span class="ob-chip-add">+</span></label>
                </div>
            </div>
        </div>

        <!-- Step 4: Job Title -->
        <div class="ob-step" data-step="4">
            <div class="ob-step-content">
                <h2 class="ob-step-label">Step 4 of 5</h2>
                <h1 class="ob-step-title">What's your current job title?</h1>

                <div class="ob-search-wrapper ob-job-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                    <input type="text" class="ob-search-input" id="job-title-input" name="job_title" placeholder="Type to search" autocomplete="off">
                </div>

                <div class="ob-job-suggestions" id="job-suggestions">
                    <div class="ob-job-item" data-value="Software Developer">Software Developer</div>
                    <div class="ob-job-item" data-value="Student">Student</div>
                    <div class="ob-job-item" data-value="Data Analyst">Data Analyst</div>
                    <div class="ob-job-item" data-value="Product Manager">Product Manager</div>
                    <div class="ob-job-item" data-value="Marketing Specialist">Marketing Specialist</div>
                    <div class="ob-job-item" data-value="Graphic Designer">Graphic Designer</div>
                    <div class="ob-job-item" data-value="Project Manager">Project Manager</div>
                    <div class="ob-job-item" data-value="Business Analyst">Business Analyst</div>
                    <div class="ob-job-item" data-value="Freelancer">Freelancer</div>
                    <div class="ob-job-item" data-value="Unemployed / Looking for work">Unemployed / Looking for work</div>
                </div>
            </div>
        </div>

        <!-- Step 5: Education Level -->
        <div class="ob-step" data-step="5">
            <div class="ob-step-content">
                <h2 class="ob-step-label">Step 5 of 5</h2>
                <h1 class="ob-step-title">Got it! What's your highest level of education?</h1>

                <div class="ob-edu-list">
                    <label class="ob-edu-option">
                        <input type="radio" name="education" value="less_than_highschool" class="ob-hidden-radio">
                        <span class="ob-edu-text">Less than high school diploma (or equivalent)</span>
                    </label>
                    <label class="ob-edu-option">
                        <input type="radio" name="education" value="highschool" class="ob-hidden-radio">
                        <span class="ob-edu-text">High school diploma (or equivalent)</span>
                    </label>
                    <label class="ob-edu-option">
                        <input type="radio" name="education" value="some_college" class="ob-hidden-radio">
                        <span class="ob-edu-text">Some college, but no degree</span>
                    </label>
                    <label class="ob-edu-option">
                        <input type="radio" name="education" value="associate" class="ob-hidden-radio">
                        <span class="ob-edu-text">Associate Degree (e.g., AA, AS)</span>
                    </label>
                    <label class="ob-edu-option">
                        <input type="radio" name="education" value="bachelors" class="ob-hidden-radio">
                        <span class="ob-edu-text">Bachelor's degree (e.g., BA, AB, BS)</span>
                    </label>
                    <label class="ob-edu-option">
                        <input type="radio" name="education" value="masters" class="ob-hidden-radio">
                        <span class="ob-edu-text">Master's degree (e.g., MA, MS, MEng, MBA)</span>
                    </label>
                    <label class="ob-edu-option">
                        <input type="radio" name="education" value="doctorate" class="ob-hidden-radio">
                        <span class="ob-edu-text">Doctorate (e.g., PhD, EdD)</span>
                    </label>
                </div>
            </div>
        </div>
    </form>

    <!-- Sticky Footer -->
    <div class="ob-footer">
        <button type="button" class="ob-btn ob-btn-back" id="ob-btn-back" style="visibility: hidden;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg>
            Back
        </button>
        <button type="button" class="ob-btn ob-btn-next" id="ob-btn-next">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/></svg>
        </button>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
