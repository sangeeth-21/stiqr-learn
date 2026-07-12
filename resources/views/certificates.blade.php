@extends('layouts.dashboard', ['pageTitle' => 'Certificates', 'activeNav' => 'certificates'])

@section('content')
<!-- Certificates Header -->
<div class="ct-header">
    <div>
        <h1 class="ct-title">My Certificates</h1>
        <p class="ct-subtitle">Your earned certificates and credentials from completed courses.</p>
    </div>
</div>

<!-- Certificate Stats -->
<div class="ct-stats-row">
    <div class="ct-stat-card">
        <div class="ct-stat-icon earned">🎓</div>
        <div class="ct-stat-info"><span class="ct-stat-num">1</span><span class="ct-stat-label">Earned</span></div>
    </div>
    <div class="ct-stat-card">
        <div class="ct-stat-icon pending">⏳</div>
        <div class="ct-stat-info"><span class="ct-stat-num">0</span><span class="ct-stat-label">Pending</span></div>
    </div>
    <div class="ct-stat-card">
        <div class="ct-stat-icon share">🔗</div>
        <div class="ct-stat-info"><span class="ct-stat-num">0</span><span class="ct-stat-label">Shared</span></div>
    </div>
</div>

<!-- Earned Certificates -->
<div class="ct-section">
    <h2 class="ct-section-title">Earned Certificates</h2>

    <div class="ct-cert-list">
        <div class="ct-cert-card">
            <div class="ct-cert-preview">
                <div class="ct-cert-inner" style="background: linear-gradient(135deg, #047857, #10b981);">
                    <div class="ct-cert-logo">Stiqr<span>Learn</span></div>
                    <div class="ct-cert-divider"></div>
                    <h3 class="ct-cert-course">HTML & CSS Fundamentals</h3>
                    <p class="ct-cert-issued">Issued: July 5, 2026</p>
                    <div class="ct-cert-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 16 16"><path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-11.386 0A9 9 0 0 1 2.5.5M3.75 3h8.5c-.002-.366-.006-.7-.015-1H3.765q-.012.498-.015 1M12 7a2 2 0 1 0-4 0 2 2 0 0 0 4 0m-6 0a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/></svg>
                    </div>
                </div>
            </div>
            <div class="ct-cert-details">
                <span class="ct-cert-status earned">Earned</span>
                <h3>HTML & CSS Fundamentals: Build Modern Web Pages</h3>
                <div class="ct-cert-meta">
                    <span>Issued: July 5, 2026</span>
                    <span>Duration: 8 Hours</span>
                    <span>Credential ID: STL-2026-HTML-001</span>
                </div>
                <div class="ct-cert-actions">
                    <button class="ct-cert-btn primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/><path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/></svg>
                        Download PDF
                    </button>
                    <button class="ct-cert-btn secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/><path d="M9.5 3a.5.5 0 0 1 .5.5v5.21l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L9 8.71V3.5a.5.5 0 0 1 .5-.5"/></svg>
                        Share
                    </button>
                    <button class="ct-cert-btn tertiary">Verify</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Upcoming -->
<div class="ct-section">
    <h2 class="ct-section-title">Almost There</h2>
    <div class="ct-upcoming-list">
        <div class="ct-upcoming-card">
            <div class="ct-upcoming-thumb" style="background: linear-gradient(135deg, #b71c1c, #e53935);">
                <span>Laravel</span>
            </div>
            <div class="ct-upcoming-info">
                <h4>Advanced Laravel Framework & API Architecture</h4>
                <div class="ct-upcoming-progress">
                    <div class="ct-upcoming-bar"><div class="ct-upcoming-fill" style="width: 68%;"></div></div>
                    <span>68% complete — 32% remaining</span>
                </div>
            </div>
        </div>
        <div class="ct-upcoming-card">
            <div class="ct-upcoming-thumb" style="background: linear-gradient(135deg, #ff8a80, #ffcdd2);">
                <span>UI/UX</span>
            </div>
            <div class="ct-upcoming-info">
                <h4>Design Systems Masterclass</h4>
                <div class="ct-upcoming-progress">
                    <div class="ct-upcoming-bar"><div class="ct-upcoming-fill" style="width: 35%;"></div></div>
                    <span>35% complete — 65% remaining</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
