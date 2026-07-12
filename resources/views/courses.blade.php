@extends('layouts.dashboard', ['pageTitle' => 'My Courses', 'activeNav' => 'courses'])

@section('content')
<!-- My Courses Header -->
<div class="mc-header">
    <div>
        <h1 class="mc-title">My Courses</h1>
        <p class="mc-subtitle">Manage and track all your enrolled courses in one place.</p>
    </div>
    <a href="{{ url('/dashboard') }}" class="mc-browse-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M4.5 7.5a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1z"/><path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1M.5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 .5 8"/></svg>
        Browse More
    </a>
</div>

<!-- Filter Tabs -->
<div class="mc-filters">
    <button class="mc-filter-tab active" data-filter="all">All <span class="mc-count">6</span></button>
    <button class="mc-filter-tab" data-filter="in-progress">In Progress <span class="mc-count">3</span></button>
    <button class="mc-filter-tab" data-filter="completed">Completed <span class="mc-count">1</span></button>
    <button class="mc-filter-tab" data-filter="bookmarked">Bookmarked <span class="mc-count">2</span></button>
</div>

<!-- Course List -->
<div class="mc-course-list" id="mc-course-list">

    <!-- Course 1 -->
    <div class="mc-course-item" data-status="in-progress" data-category="tech">
        <div class="mc-course-left">
            <div class="mc-course-thumb" style="background: linear-gradient(135deg, #b71c1c, #e53935);">
                <span class="mc-course-tag">In Progress</span>
                <span class="mc-course-thumb-text">Laravel</span>
            </div>
        </div>
        <div class="mc-course-info">
            <div class="mc-course-top">
                <span class="mc-course-category">Technology</span>
                <span class="mc-course-updated">Updated 2 days ago</span>
            </div>
            <h3>Advanced Laravel Framework & API Architecture</h3>
            <div class="mc-course-meta">
                <span>14 Hours</span>
                <span>48 Lectures</span>
                <span>By Sarah Connor</span>
            </div>
            <div class="mc-progress-row">
                <div class="mc-progress-bar"><div class="mc-progress-fill" style="width: 68%;"></div></div>
                <span class="mc-progress-text">68%</span>
            </div>
        </div>
        <div class="mc-course-actions">
            <button class="mc-resume-btn">Resume</button>
            <button class="mc-bookmark-btn active" aria-label="Bookmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/></svg>
            </button>
        </div>
    </div>

    <!-- Course 2 -->
    <div class="mc-course-item" data-status="in-progress" data-category="design">
        <div class="mc-course-left">
            <div class="mc-course-thumb" style="background: linear-gradient(135deg, #ff8a80, #ffcdd2);">
                <span class="mc-course-tag">In Progress</span>
                <span class="mc-course-thumb-text">UI/UX</span>
            </div>
        </div>
        <div class="mc-course-info">
            <div class="mc-course-top">
                <span class="mc-course-category">Design</span>
                <span class="mc-course-updated">Updated 5 days ago</span>
            </div>
            <h3>Design Systems Masterclass: From Figma to Production</h3>
            <div class="mc-course-meta">
                <span>10 Hours</span>
                <span>32 Lectures</span>
                <span>By Alex Rivera</span>
            </div>
            <div class="mc-progress-row">
                <div class="mc-progress-bar"><div class="mc-progress-fill" style="width: 35%;"></div></div>
                <span class="mc-progress-text">35%</span>
            </div>
        </div>
        <div class="mc-course-actions">
            <button class="mc-resume-btn">Resume</button>
            <button class="mc-bookmark-btn" aria-label="Bookmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/></svg>
            </button>
        </div>
    </div>

    <!-- Course 3 -->
    <div class="mc-course-item" data-status="in-progress" data-category="tech">
        <div class="mc-course-left">
            <div class="mc-course-thumb" style="background: linear-gradient(135deg, #1d4ed8, #60a5fa);">
                <span class="mc-course-tag">New</span>
                <span class="mc-course-thumb-text">Python</span>
            </div>
        </div>
        <div class="mc-course-info">
            <div class="mc-course-top">
                <span class="mc-course-category">Technology</span>
                <span class="mc-course-updated">Started yesterday</span>
            </div>
            <h3>Python for Data Science & Machine Learning Bootcamp</h3>
            <div class="mc-course-meta">
                <span>20 Hours</span>
                <span>65 Lectures</span>
                <span>By Marcus Bennett</span>
            </div>
            <div class="mc-progress-row">
                <div class="mc-progress-bar"><div class="mc-progress-fill" style="width: 12%;"></div></div>
                <span class="mc-progress-text">12%</span>
            </div>
        </div>
        <div class="mc-course-actions">
            <button class="mc-resume-btn">Resume</button>
            <button class="mc-bookmark-btn active" aria-label="Bookmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/></svg>
            </button>
        </div>
    </div>

    <!-- Course 4 (Completed) -->
    <div class="mc-course-item completed" data-status="completed" data-category="tech">
        <div class="mc-course-left">
            <div class="mc-course-thumb" style="background: linear-gradient(135deg, #047857, #10b981);">
                <span class="mc-completed-badge">Completed</span>
                <span class="mc-course-thumb-text">HTML/CSS</span>
            </div>
        </div>
        <div class="mc-course-info">
            <div class="mc-course-top">
                <span class="mc-course-category">Technology</span>
                <span class="mc-course-updated">Completed 1 week ago</span>
            </div>
            <h3>HTML & CSS Fundamentals: Build Modern Web Pages</h3>
            <div class="mc-course-meta">
                <span>8 Hours</span>
                <span>24 Lectures</span>
                <span>By Sarah Connor</span>
            </div>
            <div class="mc-progress-row">
                <div class="mc-progress-bar"><div class="mc-progress-fill" style="width: 100%;"></div></div>
                <span class="mc-progress-text">100%</span>
            </div>
        </div>
        <div class="mc-course-actions">
            <button class="mc-certificate-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916zM12.375 6v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2M.5 15h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1"/></svg>
                Certificate
            </button>
            <button class="mc-bookmark-btn" aria-label="Bookmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/></svg>
            </button>
        </div>
    </div>

    <!-- Course 5 (Bookmarked only) -->
    <div class="mc-course-item" data-status="bookmarked" data-category="business">
        <div class="mc-course-left">
            <div class="mc-course-thumb" style="background: linear-gradient(135deg, #b71c1c, #ff8a80);">
                <span class="mc-course-tag">Saved</span>
                <span class="mc-course-thumb-text">Marketing</span>
            </div>
        </div>
        <div class="mc-course-info">
            <div class="mc-course-top">
                <span class="mc-course-category">Business</span>
                <span class="mc-course-updated">Not started</span>
            </div>
            <h3>Digital Growth Hacking & Strategic Analytics</h3>
            <div class="mc-course-meta">
                <span>18 Hours</span>
                <span>60 Lectures</span>
                <span>By Marcus Bennett</span>
            </div>
            <div class="mc-progress-row">
                <div class="mc-progress-bar"><div class="mc-progress-fill" style="width: 0%;"></div></div>
                <span class="mc-progress-text">0%</span>
            </div>
        </div>
        <div class="mc-course-actions">
            <button class="mc-start-btn">Start Course</button>
            <button class="mc-bookmark-btn active" aria-label="Bookmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/></svg>
            </button>
        </div>
    </div>

    <!-- Course 6 (Bookmarked only) -->
    <div class="mc-course-item" data-status="bookmarked" data-category="tech">
        <div class="mc-course-left">
            <div class="mc-course-thumb" style="background: linear-gradient(135deg, #7c3aed, #a78bfa);">
                <span class="mc-course-tag">Saved</span>
                <span class="mc-course-thumb-text">AI/ML</span>
            </div>
        </div>
        <div class="mc-course-info">
            <div class="mc-course-top">
                <span class="mc-course-category">Technology</span>
                <span class="mc-course-updated">Not started</span>
            </div>
            <h3>Deep Learning Specialization with TensorFlow</h3>
            <div class="mc-course-meta">
                <span>18 Hours</span>
                <span>55 Lectures</span>
                <span>By Dr. Emily Zhang</span>
            </div>
            <div class="mc-progress-row">
                <div class="mc-progress-bar"><div class="mc-progress-fill" style="width: 0%;"></div></div>
                <span class="mc-progress-text">0%</span>
            </div>
        </div>
        <div class="mc-course-actions">
            <button class="mc-start-btn">Start Course</button>
            <button class="mc-bookmark-btn active" aria-label="Bookmark">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2"/></svg>
            </button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterTabs = document.querySelectorAll('.mc-filter-tab');
    const courseItems = document.querySelectorAll('.mc-course-item');

    filterTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            filterTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            const filter = tab.dataset.filter;

            courseItems.forEach(item => {
                const status = item.dataset.status;
                if (filter === 'all' || status === filter) {
                    item.style.display = 'flex';
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(10px)';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    document.querySelectorAll('.mc-bookmark-btn').forEach(btn => {
        btn.addEventListener('click', () => btn.classList.toggle('active'));
    });
});
</script>
@endsection
