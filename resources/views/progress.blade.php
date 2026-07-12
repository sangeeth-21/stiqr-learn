@extends('layouts.dashboard', ['pageTitle' => 'Progress', 'activeNav' => 'progress'])

@section('content')
<!-- Progress Header -->
<div class="pg-header">
    <div>
        <h1 class="pg-title">My Progress</h1>
        <p class="pg-subtitle">Track your learning journey and celebrate your achievements.</p>
    </div>
</div>

<!-- Stats Overview -->
<div class="pg-stats-row">
    <div class="pg-stat-card">
        <div class="pg-stat-icon" style="background: rgba(229,57,53,0.1); color: var(--color-primary);">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492z"/></svg>
        </div>
        <div class="pg-stat-info"><span class="pg-stat-num">4</span><span class="pg-stat-label">Enrolled</span></div>
    </div>
    <div class="pg-stat-card">
        <div class="pg-stat-icon" style="background: rgba(16,185,129,0.1); color: #10b981;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
        </div>
        <div class="pg-stat-info"><span class="pg-stat-num">1</span><span class="pg-stat-label">Completed</span></div>
    </div>
    <div class="pg-stat-card">
        <div class="pg-stat-icon" style="background: rgba(245,158,11,0.1); color: #f59e0b;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/></svg>
        </div>
        <div class="pg-stat-info"><span class="pg-stat-num">26.5h</span><span class="pg-stat-label">Learned</span></div>
    </div>
    <div class="pg-stat-card">
        <div class="pg-stat-icon" style="background: rgba(99,102,241,0.1); color: #6366f1;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16"><path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641z"/></svg>
        </div>
        <div class="pg-stat-info"><span class="pg-stat-num">7</span><span class="pg-stat-label">Day Streak 🔥</span></div>
    </div>
</div>

<!-- Weekly Activity -->
<div class="pg-section">
    <h2 class="pg-section-title">Weekly Activity</h2>
    <div class="pg-weekly-chart">
        <div class="pg-bar-group">
            <div class="pg-bar-wrap"><div class="pg-bar" style="height: 60%;"></div></div>
            <span class="pg-bar-label">Mon</span>
            <span class="pg-bar-value">1.5h</span>
        </div>
        <div class="pg-bar-group">
            <div class="pg-bar-wrap"><div class="pg-bar" style="height: 85%;"></div></div>
            <span class="pg-bar-label">Tue</span>
            <span class="pg-bar-value">2.1h</span>
        </div>
        <div class="pg-bar-group">
            <div class="pg-bar-wrap"><div class="pg-bar" style="height: 40%;"></div></div>
            <span class="pg-bar-label">Wed</span>
            <span class="pg-bar-value">1.0h</span>
        </div>
        <div class="pg-bar-group">
            <div class="pg-bar-wrap"><div class="pg-bar" style="height: 95%;"></div></div>
            <span class="pg-bar-label">Thu</span>
            <span class="pg-bar-value">2.4h</span>
        </div>
        <div class="pg-bar-group">
            <div class="pg-bar-wrap"><div class="pg-bar" style="height: 70%;"></div></div>
            <span class="pg-bar-label">Fri</span>
            <span class="pg-bar-value">1.8h</span>
        </div>
        <div class="pg-bar-group">
            <div class="pg-bar-wrap"><div class="pg-bar" style="height: 50%;"></div></div>
            <span class="pg-bar-label">Sat</span>
            <span class="pg-bar-value">1.2h</span>
        </div>
        <div class="pg-bar-group today">
            <div class="pg-bar-wrap"><div class="pg-bar" style="height: 75%;"></div></div>
            <span class="pg-bar-label">Sun</span>
            <span class="pg-bar-value">1.9h</span>
        </div>
    </div>
    <div class="pg-weekly-summary">
        <span>Total this week: <strong>11.9 hours</strong></span>
        <span>Avg per day: <strong>1.7 hours</strong></span>
    </div>
</div>

<!-- Skill Progress -->
<div class="pg-section">
    <h2 class="pg-section-title">Skill Progress</h2>
    <div class="pg-skills-list">
        <div class="pg-skill-item">
            <div class="pg-skill-header">
                <span class="pg-skill-name">Laravel PHP</span>
                <span class="pg-skill-pct">68%</span>
            </div>
            <div class="pg-skill-bar"><div class="pg-skill-fill" style="width: 68%;"></div></div>
        </div>
        <div class="pg-skill-item">
            <div class="pg-skill-header">
                <span class="pg-skill-name">UI/UX Design</span>
                <span class="pg-skill-pct">35%</span>
            </div>
            <div class="pg-skill-bar"><div class="pg-skill-fill" style="width: 35%;"></div></div>
        </div>
        <div class="pg-skill-item">
            <div class="pg-skill-header">
                <span class="pg-skill-name">Python</span>
                <span class="pg-skill-pct">12%</span>
            </div>
            <div class="pg-skill-bar"><div class="pg-skill-fill" style="width: 12%;"></div></div>
        </div>
        <div class="pg-skill-item">
            <div class="pg-skill-header">
                <span class="pg-skill-name">HTML & CSS</span>
                <span class="pg-skill-pct">100%</span>
            </div>
            <div class="pg-skill-bar"><div class="pg-skill-fill pg-skill-done" style="width: 100%;"></div></div>
        </div>
    </div>
</div>

<!-- Achievements -->
<div class="pg-section">
    <h2 class="pg-section-title">Achievements</h2>
    <div class="pg-achievements-grid">
        <div class="pg-achievement-card">
            <div class="pg-achievement-icon">🔥</div>
            <h4>7-Day Streak</h4>
            <p>Learned 7 days in a row</p>
        </div>
        <div class="pg-achievement-card">
            <div class="pg-achievement-icon">🏆</div>
            <h4>First Course Done</h4>
            <p>Completed your first course</p>
        </div>
        <div class="pg-achievement-card">
            <div class="pg-achievement-icon">⚡</div>
            <h4>Fast Learner</h4>
            <p>Completed 5 modules in one day</p>
        </div>
        <div class="pg-achievement-card locked">
            <div class="pg-achievement-icon">🎓</div>
            <h4>Certified Pro</h4>
            <p>Earn 3 certificates</p>
        </div>
        <div class="pg-achievement-card locked">
            <div class="pg-achievement-icon">📚</div>
            <h4>Bookworm</h4>
            <p>Enroll in 5 courses</p>
        </div>
        <div class="pg-achievement-card locked">
            <div class="pg-achievement-icon">💎</div>
            <h4>100h Master</h4>
            <p>Learn for 100 hours total</p>
        </div>
    </div>
</div>
@endsection
