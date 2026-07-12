@extends('layouts.dashboard', ['pageTitle' => 'Settings', 'activeNav' => 'settings'])

@section('content')
<!-- Settings Header -->
<div class="st-header">
    <div>
        <h1 class="st-title">Settings</h1>
        <p class="st-subtitle">Manage your account preferences and profile settings.</p>
    </div>
</div>

<div class="st-settings-grid">
    <!-- Profile Section -->
    <div class="st-section">
        <h2 class="st-section-title">Profile Information</h2>
        <div class="st-profile-card">
            <div class="st-avatar-area">
                <div class="st-avatar-lg">{{ substr($userName, 0, 1) }}{{ substr(explode(' ', $userName)[1] ?? '', 0, 1) }}</div>
                <button class="st-avatar-edit-btn">Change Photo</button>
            </div>
            <div class="st-form-grid">
                <div class="st-field">
                    <label class="st-label">First Name</label>
                    <input type="text" class="st-input" value="{{ explode(' ', $userName)[0] }}">
                </div>
                <div class="st-field">
                    <label class="st-label">Last Name</label>
                    <input type="text" class="st-input" value="{{ explode(' ', $userName)[1] ?? '' }}">
                </div>
                <div class="st-field full">
                    <label class="st-label">Email Address</label>
                    <input type="email" class="st-input" value="{{ $userEmail }}">
                </div>
                <div class="st-field full">
                    <label class="st-label">Job Title</label>
                    <input type="text" class="st-input" value="Software Developer" placeholder="e.g. Software Developer">
                </div>
                <div class="st-field full">
                    <label class="st-label">Bio</label>
                    <textarea class="st-textarea" rows="3" placeholder="Tell us a bit about yourself...">Passionate developer learning new skills every day.</textarea>
                </div>
            </div>
            <div class="st-actions">
                <button class="st-save-btn">Save Changes</button>
                <button class="st-cancel-btn">Cancel</button>
            </div>
        </div>
    </div>

    <!-- Notification Preferences -->
    <div class="st-section">
        <h2 class="st-section-title">Notification Preferences</h2>
        <div class="st-prefs-card">
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>Email Notifications</h4>
                    <p>Receive course updates and recommendations via email</p>
                </div>
                <label class="st-toggle">
                    <input type="checkbox" checked>
                    <span class="st-toggle-slider"></span>
                </label>
            </div>
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>Weekly Progress Report</h4>
                    <p>Get a weekly summary of your learning activity</p>
                </div>
                <label class="st-toggle">
                    <input type="checkbox" checked>
                    <span class="st-toggle-slider"></span>
                </label>
            </div>
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>New Course Alerts</h4>
                    <p>Notify when new courses match your interests</p>
                </div>
                <label class="st-toggle">
                    <input type="checkbox">
                    <span class="st-toggle-slider"></span>
                </label>
            </div>
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>Marketing & Promotions</h4>
                    <p>Receive special offers and promotional content</p>
                </div>
                <label class="st-toggle">
                    <input type="checkbox">
                    <span class="st-toggle-slider"></span>
                </label>
            </div>
        </div>
    </div>

    <!-- Appearance -->
    <div class="st-section">
        <h2 class="st-section-title">Appearance</h2>
        <div class="st-prefs-card">
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>Theme</h4>
                    <p>Switch between light and dark mode</p>
                </div>
                <div class="st-theme-switcher">
                    <button class="st-theme-opt" id="theme-light-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/></svg>
                        Light
                    </button>
                    <button class="st-theme-opt" id="theme-dark-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/></svg>
                        Dark
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Security -->
    <div class="st-section">
        <h2 class="st-section-title">Security</h2>
        <div class="st-prefs-card">
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>Change Password</h4>
                    <p>Update your account password</p>
                </div>
                <button class="st-outline-btn">Update</button>
            </div>
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>Two-Factor Authentication</h4>
                    <p>Add an extra layer of security to your account</p>
                </div>
                <label class="st-toggle">
                    <input type="checkbox">
                    <span class="st-toggle-slider"></span>
                </label>
            </div>
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>Active Sessions</h4>
                    <p>Manage your active login sessions</p>
                </div>
                <button class="st-outline-btn">Manage</button>
            </div>
        </div>
    </div>

    <!-- Danger Zone -->
    <div class="st-section">
        <h2 class="st-section-title st-danger-title">Danger Zone</h2>
        <div class="st-prefs-card st-danger-card">
            <div class="st-pref-row">
                <div class="st-pref-info">
                    <h4>Delete Account</h4>
                    <p>Permanently delete your account and all associated data. This action cannot be undone.</p>
                </div>
                <button class="st-danger-btn">Delete Account</button>
            </div>
        </div>
    </div>
</div>
@endsection
