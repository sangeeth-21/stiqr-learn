@extends('layouts.dashboard', ['pageTitle' => 'Dashboard', 'activeNav' => 'dashboard'])

@section('content')
<!-- Welcome Card -->
<section class="db-welcome-card">
    <div class="db-welcome-text">
        <h1>Welcome back, {{ explode(' ', $userName)[0] }}! 👋</h1>
        <p>You're making great progress. Keep up the momentum and unlock your potential with today's learning goals.</p>
        <a href="#continue-learning" class="btn btn-primary db-welcome-btn">Continue Learning</a>
    </div>
    <div class="db-welcome-visual">
        <svg viewBox="0 0 200 160" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="20" y="40" width="160" height="100" rx="12" fill="var(--color-primary)" opacity="0.15"/>
            <rect x="40" y="55" width="80" height="12" rx="6" fill="var(--color-primary)" opacity="0.3"/>
            <rect x="40" y="75" width="120" height="8" rx="4" fill="var(--color-primary)" opacity="0.2"/>
            <rect x="40" y="90" width="100" height="8" rx="4" fill="var(--color-primary)" opacity="0.15"/>
            <circle cx="150" cy="70" r="25" fill="var(--color-primary)" opacity="0.2"/>
            <path d="M140 70L148 78L162 62" stroke="var(--color-primary)" stroke-width="3" fill="none"/>
            <rect x="40" y="110" width="60" height="20" rx="10" fill="var(--color-primary)"/>
            <text x="55" y="124" fill="white" font-size="10" font-weight="600">Go →</text>
        </svg>
    </div>
</section>

<!-- Stats Grid -->
<section class="db-stats-grid">
    <div class="db-stat-card">
        <div class="db-stat-icon" style="background: rgba(229, 57, 53, 0.1); color: var(--color-primary);">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/></svg>
        </div>
        <div class="db-stat-info">
            <span class="db-stat-number">4</span>
            <span class="db-stat-label">Courses Enrolled</span>
        </div>
    </div>
    <div class="db-stat-card">
        <div class="db-stat-icon" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/></svg>
        </div>
        <div class="db-stat-info">
            <span class="db-stat-number">26.5</span>
            <span class="db-stat-label">Hours Learned</span>
        </div>
    </div>
    <div class="db-stat-card">
        <div class="db-stat-icon" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916zM12.375 6v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2M.5 15h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1"/></svg>
        </div>
        <div class="db-stat-info">
            <span class="db-stat-number">1</span>
            <span class="db-stat-label">Certificates</span>
        </div>
    </div>
    <div class="db-stat-card">
        <div class="db-stat-icon" style="background: rgba(99, 102, 241, 0.1); color: #6366f1;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641z"/></svg>
        </div>
        <div class="db-stat-info">
            <span class="db-stat-number">7</span>
            <span class="db-stat-label">Day Streak 🔥</span>
        </div>
    </div>
</section>

<!-- Continue Learning -->
<section class="db-section" id="continue-learning">
    <div class="db-section-header">
        <h2>Continue Learning</h2>
        <a href="{{ url('/courses') }}" class="db-view-all">View All →</a>
    </div>
    <div class="db-course-grid">
        <!-- Course Progress Card 1 -->
        <div class="db-course-card">
            <div class="db-course-thumb" style="background: linear-gradient(135deg, #b71c1c, #e53935);">
                <span class="db-course-tag">In Progress</span>
                <div class="db-course-thumb-text">Laravel</div>
            </div>
            <div class="db-course-body">
                <h3>Advanced Laravel Framework & API Architecture</h3>
                <div class="db-course-meta">
                    <span>14 Hours</span>
                    <span>48 Lectures</span>
                </div>
                <div class="db-progress-wrapper">
                    <div class="db-progress-bar">
                        <div class="db-progress-fill" style="width: 68%;"></div>
                    </div>
                    <span class="db-progress-text">68% complete</span>
                </div>
                <button class="db-resume-btn">Resume Course</button>
            </div>
        </div>

        <!-- Course Progress Card 2 -->
        <div class="db-course-card">
            <div class="db-course-thumb" style="background: linear-gradient(135deg, #ff8a80, #ffcdd2);">
                <span class="db-course-tag">In Progress</span>
                <div class="db-course-thumb-text">UI/UX</div>
            </div>
            <div class="db-course-body">
                <h3>Design Systems Masterclass: From Figma to Production</h3>
                <div class="db-course-meta">
                    <span>10 Hours</span>
                    <span>32 Lectures</span>
                </div>
                <div class="db-progress-wrapper">
                    <div class="db-progress-bar">
                        <div class="db-progress-fill" style="width: 35%;"></div>
                    </div>
                    <span class="db-progress-text">35% complete</span>
                </div>
                <button class="db-resume-btn">Resume Course</button>
            </div>
        </div>

        <!-- Course Progress Card 3 -->
        <div class="db-course-card">
            <div class="db-course-thumb" style="background: linear-gradient(135deg, #1d4ed8, #60a5fa);">
                <span class="db-course-tag">New</span>
                <div class="db-course-thumb-text">Python</div>
            </div>
            <div class="db-course-body">
                <h3>Python for Data Science & Machine Learning Bootcamp</h3>
                <div class="db-course-meta">
                    <span>20 Hours</span>
                    <span>65 Lectures</span>
                </div>
                <div class="db-progress-wrapper">
                    <div class="db-progress-bar">
                        <div class="db-progress-fill" style="width: 12%;"></div>
                    </div>
                    <span class="db-progress-text">12% complete</span>
                </div>
                <button class="db-resume-btn">Resume Course</button>
            </div>
        </div>
    </div>
</section>

<!-- Recommended For You -->
<section class="db-section">
    <div class="db-section-header">
        <h2>Recommended For You</h2>
        <a href="{{ url('/courses') }}" class="db-view-all">View All →</a>
    </div>
    <div class="db-course-grid">
        <div class="db-rec-card">
            <div class="db-rec-thumb" style="background: linear-gradient(135deg, #047857, #10b981);">
                <div class="db-rec-thumb-text">Cloud</div>
            </div>
            <div class="db-rec-body">
                <h3>AWS Cloud Practitioner Certification Prep</h3>
                <div class="db-rec-meta">
                    <span>★ 4.8</span>
                    <span>12 Hours</span>
                    <span>$39.99</span>
                </div>
                <button class="db-enroll-btn">Enroll Now</button>
            </div>
        </div>
        <div class="db-rec-card">
            <div class="db-rec-thumb" style="background: linear-gradient(135deg, #7c3aed, #a78bfa);">
                <div class="db-rec-thumb-text">AI/ML</div>
            </div>
            <div class="db-rec-body">
                <h3>Deep Learning Specialization with TensorFlow</h3>
                <div class="db-rec-meta">
                    <span>★ 4.9</span>
                    <span>18 Hours</span>
                    <span>$59.99</span>
                </div>
                <button class="db-enroll-btn">Enroll Now</button>
            </div>
        </div>
        <div class="db-rec-card">
            <div class="db-rec-thumb" style="background: linear-gradient(135deg, #b71c1c, #ff8a80);">
                <div class="db-rec-thumb-text">Marketing</div>
            </div>
            <div class="db-rec-body">
                <h3>Digital Growth Hacking & Strategic Analytics</h3>
                <div class="db-rec-meta">
                    <span>★ 4.7</span>
                    <span>18 Hours</span>
                    <span>$29.99</span>
                </div>
                <button class="db-enroll-btn">Enroll Now</button>
            </div>
        </div>
    </div>
</section>

<!-- Recent Activity -->
<section class="db-section">
    <div class="db-section-header">
        <h2>Recent Activity</h2>
    </div>
    <div class="db-activity-list">
        <div class="db-activity-item">
            <div class="db-activity-icon" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
            </div>
            <div class="db-activity-text">
                <strong>Completed Module 8:</strong> RESTful API Design Patterns
                <span class="db-activity-time">2 hours ago</span>
            </div>
        </div>
        <div class="db-activity-item">
            <div class="db-activity-icon" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-11.386 0A9 9 0 0 1 2.5.5M3.75 3h8.5a52 52 0 0 0-.015-1H3.765q-.012.498-.015 1M12 7a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/></svg>
            </div>
            <div class="db-activity-text">
                <strong>Achievement Unlocked:</strong> 7-Day Learning Streak 🔥
                <span class="db-activity-time">Yesterday</span>
            </div>
        </div>
        <div class="db-activity-item">
            <div class="db-activity-icon" style="background: rgba(99, 102, 241, 0.1); color: #6366f1;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492z"/></svg>
            </div>
            <div class="db-activity-text">
                <strong>Enrolled in:</strong> Python for Data Science & ML Bootcamp
                <span class="db-activity-time">3 days ago</span>
            </div>
        </div>
    </div>
</section>
@endsection
