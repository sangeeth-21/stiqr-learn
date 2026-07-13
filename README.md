# Stiqr Learn — Premium Education & Interactive Learning Platform

Stiqr Learn is a premium, expert-led interactive learning platform designed to help digital professionals master high-demand skills in Technology, Design, and Business. Built with PHP Laravel, HTML5, Vanilla CSS, and modern Javascript.

---

## 🚀 Key Features

1. **Premium Landing Page**: 
   - Clean, modern layout showcasing course filters, testimonials, key benefits, and partners.
   - Interactive elements and smooth scroll transitions.

2. **Secure Login & Account Creation**:
   - Simulated Google and functional email-based signup/login interfaces.
   - Credentials validation and user session management.
   - Dark mode toggle and interactive password visibility switches.

3. **5-Step Interactive Onboarding Wizard**:
   - A Coursera-inspired setup wizard that triggers for first-time logged-in users.
   - Collects personal learning goals, roles of interest (with search/filter), skills checklist, current job title, and highest education level.

4. **Learner Dashboard**:
   - **Sidebar Navigation**: Fast navigation between Dashboard, My Courses, Progress, Certificates, and Settings pages.
   - **Overview stats**: View current course enrollments, learning hours, earned certificates, and active streak days.
   - **Continue Learning**: Direct access to pick up where you left off on in-progress courses.
   - **Personalized Recommendations**: Displays recommended courses based on selections made during the onboarding flow.
   - **Weekly Activity Chart**: Visual bar chart representing learning hours per day.
   - **Account Settings**: Interactive form to edit profile details, change avatar, and toggle notifications.

5. **Integrated Light / Dark Mode**:
   - Universal theme switching that persists choices locally (`localStorage`) to prevent style flashes on reload.

---

## 🔐 Demo Credentials

To log in and experience the full flow:
- **Email Address**: `admin@stiqrlearn.com`
- **Password**: `password123`

---

## 🛠️ Installation & Local Setup

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & npm (for assets compilation if needed)

### Setup Instructions

1. **Clone the Repository**:
   ```bash
   git clone <repository-url>
   cd stiqr-learn
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**:
   - Copy `.env.example` to `.env`
   - Generate application key:
     ```bash
     php artisan key:generate
     ```

4. **Run the Server**:
   ```bash
   php artisan serve
   ```
   Open `http://127.0.0.1:8000` in your web browser.

---

## 📂 Key Directory Structure

```text
├── app/
│   └── Http/Controllers/
│       └── AuthController.php    # Session, login, onboarding, and dashboard logic
├── public/
│   ├── css/app.css               # Main compiled & custom design system stylesheet
│   └── js/app.js                 # App-wide interactive logic (Onboarding, sidebar, themes)
├── resources/
│   ├── css/app.css               # Resources entry stylesheet for Vite pipeline
│   ├── js/app.js                 # Resources entry script for Vite pipeline
│   └── views/
│       ├── layouts/
│       │   └── dashboard.blade.php  # Sidebar layout wrapper
│       ├── welcome.blade.php     # Public landing page
│       ├── login.blade.php       # Login view
│       ├── signup.blade.php      # Signup view
│       ├── onboarding.blade.php  # 5-step onboarding wizard
│       ├── dashboard.blade.php   # User portal home
│       ├── courses.blade.php     # My Enrolled Courses view
│       ├── progress.blade.php    # Weekly learning progress view
│       ├── settings.blade.php    # User preferences & profile settings
│       └── certificates.blade.php # Earned credentials certificates view
└── routes/
    └── web.php                   # Frontend and auth routes
```
