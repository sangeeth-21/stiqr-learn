<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up - Stiqr Learn</title>
    <meta name="description" content="Create your Stiqr Learn account and start mastering high-demand skills in Tech, Design, and Business today.">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23e53935%22/><text y=%22.9em%22 font-size=%2290%22 fill=%22%23ffffff%22>S</text></svg>">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="login-page">
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
        }
    </script>

    <div class="login-wrapper">
        <!-- Left Panel (Image fills container) -->
        <div class="login-left-panel">
            <div class="login-left-overlay"></div>
            <img src="{{ asset('images/login-illustration.png') }}" alt="Stiqr Learn" class="login-left-image">
            <div class="login-left-content">
                <a href="{{ url('/') }}" class="login-logo">Stiqr<span>Learn</span></a>
                <h1 class="login-headline">Start Your Learning Journey Today</h1>
                <p class="login-subline">Join 15,000+ learners gaining industry-ready skills in Tech, Design, and Business.</p>
            </div>
        </div>

        <!-- Right Panel (Signup Form) -->
        <div class="login-right-panel">
            <!-- Top Bar: Logo + Theme Toggle -->
            <div class="login-topbar">
                <a href="{{ url('/') }}" class="login-topbar-logo">Stiqr<span>Learn</span></a>
                <button class="theme-toggle-btn login-theme-toggle" id="theme-toggle-btn" aria-label="Toggle Dark/Light Mode">
                    <svg class="sun-icon theme-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M18.36 18.36l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"></path>
                    </svg>
                    <svg class="moon-icon theme-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                    </svg>
                </button>
            </div>

            <div class="login-form-container">
                <h2 class="form-title">Create Account</h2>
                <p class="signup-prompt">Already have an account? <a href="{{ url('/login') }}" class="signup-link">Login</a></p>

                <button type="button" class="btn-google-login" onclick="alert('Google Sign-Up integration is simulated.')">
                    <svg class="google-logo" viewBox="0 0 24 24" width="18" height="18">
                        <path fill="#EA4335" d="M12 5.04c1.66 0 3.2.57 4.38 1.69l3.27-3.27C17.67 1.65 14.98 1 12 1 7.35 1 3.37 3.67 1.39 7.56l3.89 3.01C6.24 7.62 8.89 5.04 12 5.04z"/>
                        <path fill="#4285F4" d="M23.49 12.27c0-.81-.07-1.59-.2-2.36H12v4.51h6.46c-.29 1.48-1.14 2.73-2.4 3.58l3.76 2.91c2.2-2.03 3.67-5.01 3.67-8.64z"/>
                        <path fill="#FBBC05" d="M5.28 14.56c-.24-.72-.38-1.5-.38-2.31s.14-1.59.38-2.31L1.39 6.93C.5 8.74 0 10.79 0 12s.5 3.26 1.39 5.07l3.89-3.07z"/>
                        <path fill="#34A853" d="M12 23c3.24 0 5.97-1.07 7.96-2.91l-3.76-2.91c-1.1.74-2.52 1.18-4.2 1.18-3.11 0-5.76-2.58-6.72-5.53L1.39 15.9c1.98 3.89 5.96 6.56 10.61 6.56z"/>
                    </svg>
                    Sign up with Google
                </button>

                <div class="divider-container">
                    <span class="divider-text">Or Sign Up with Email</span>
                </div>

                <form class="login-form-fields" onsubmit="event.preventDefault(); alert('Sign up simulated successfully!');">
                    <div class="input-group">
                        <label for="name" class="input-label">Full Name</label>
                        <input type="text" id="name" class="form-input" placeholder="e.g. Sangeeth Kumar" required>
                    </div>

                    <div class="input-group">
                        <label for="email" class="input-label">Email Address</label>
                        <input type="email" id="email" class="form-input" placeholder="e.g. sangeeth@example.com" required>
                    </div>

                    <div class="input-group">
                        <label for="password" class="input-label">Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="password" class="form-input password-field" placeholder="Create a strong password" required>
                            <button type="button" class="btn-toggle-password" id="toggle-password" aria-label="Toggle Password Visibility">
                                <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path class="eye-open" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle class="eye-open" cx="12" cy="12" r="3"></circle>
                                    <line class="eye-closed" x1="1" y1="1" x2="23" y2="23" style="display: none;"></line>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="confirm-password" class="input-label">Confirm Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="confirm-password" class="form-input password-field-confirm" placeholder="Re-enter your password" required>
                            <button type="button" class="btn-toggle-password" id="toggle-confirm-password" aria-label="Toggle Confirm Password Visibility">
                                <svg class="eye-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path class="eye-open" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle class="eye-open" cx="12" cy="12" r="3"></circle>
                                    <line class="eye-closed" x1="1" y1="1" x2="23" y2="23" style="display: none;"></line>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="form-meta-actions">
                        <label class="remember-checkbox-label">
                            <input type="checkbox" class="remember-checkbox">
                            I agree to the <a href="#" class="forgot-link" style="margin-left: 2px;">Terms &amp; Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="btn-login-submit">Create Account</button>
                </form>

                <a href="{{ url('/') }}" class="back-home-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                    </svg>
                    Back to Home
                </a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            function setupToggle(toggleId, fieldSelector) {
                const toggleBtn = document.getElementById(toggleId);
                const field = document.querySelector(fieldSelector);
                const closedLine = field ? field.closest('.password-input-wrapper').querySelector('.eye-closed') : null;

                if (toggleBtn && field && closedLine) {
                    toggleBtn.addEventListener('click', () => {
                        const type = field.getAttribute('type') === 'password' ? 'text' : 'password';
                        field.setAttribute('type', type);
                        closedLine.style.display = type === 'text' ? 'block' : 'none';
                    });
                }
            }

            setupToggle('toggle-password', '.password-field');
            setupToggle('toggle-confirm-password', '.password-field-confirm');
        });
    </script>
</body>
</html>
