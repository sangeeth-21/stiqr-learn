<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Hardcoded credentials
    private const VALID_EMAIL = 'admin@stiqrlearn.com';
    private const VALID_PASSWORD = 'password123';
    private const USER_NAME = 'Sangeeth Kumar';

    /**
     * Handle login POST request.
     */
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email === self::VALID_EMAIL && $password === self::VALID_PASSWORD) {
            $request->session()->put('is_logged_in', true);
            $request->session()->put('user_name', self::USER_NAME);
            $request->session()->put('user_email', $email);

            // Check if first time login (onboarding not completed)
            if (!$request->session()->has('onboarding_completed')) {
                $request->session()->put('is_first_login', true);
                return redirect('/onboarding');
            }

            return redirect('/dashboard');
        }

        return redirect('/login')->with('error', 'Invalid email or password. Please try again.');
    }

    /**
     * Show onboarding page.
     */
    public function showOnboarding(Request $request)
    {
        if (!$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }

        $userName = $request->session()->get('user_name', 'Learner');

        return view('onboarding', ['userName' => $userName]);
    }

    /**
     * Save onboarding selections.
     */
    public function saveOnboarding(Request $request)
    {
        if (!$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }

        // Save onboarding data to session
        $request->session()->put('onboarding_completed', true);
        $request->session()->put('onboarding_goal', $request->input('goal', ''));
        $request->session()->put('onboarding_roles', $request->input('roles', []));
        $request->session()->put('onboarding_skills', $request->input('skills', []));
        $request->session()->put('onboarding_job_title', $request->input('job_title', ''));
        $request->session()->put('onboarding_education', $request->input('education', ''));
        $request->session()->forget('is_first_login');

        return redirect('/dashboard');
    }

    /**
     * Show dashboard page.
     */
    public function showDashboard(Request $request)
    {
        if (!$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }

        // If onboarding not completed, redirect there
        if (!$request->session()->get('onboarding_completed')) {
            return redirect('/onboarding');
        }

        $userName = $request->session()->get('user_name', 'Learner');
        $userEmail = $request->session()->get('user_email', '');
        $goal = $request->session()->get('onboarding_goal', '');
        $roles = $request->session()->get('onboarding_roles', []);
        $skills = $request->session()->get('onboarding_skills', []);

        return view('dashboard', [
            'userName' => $userName,
            'userEmail' => $userEmail,
            'goal' => $goal,
            'roles' => $roles,
            'skills' => $skills,
        ]);
    }

    /**
     * Skip onboarding and go to dashboard.
     */
    public function skipOnboarding(Request $request)
    {
        if (!$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }

        $request->session()->put('onboarding_completed', true);
        $request->session()->forget('is_first_login');

        return redirect('/dashboard');
    }

    /**
     * Show courses page.
     */
    public function showCourses(Request $request)
    {
        if (!$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }

        $userName = $request->session()->get('user_name', 'Learner');

        return view('courses', ['userName' => $userName]);
    }

    /**
     * Show progress page.
     */
    public function showProgress(Request $request)
    {
        if (!$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }

        $userName = $request->session()->get('user_name', 'Learner');

        return view('progress', ['userName' => $userName]);
    }

    /**
     * Show certificates page.
     */
    public function showCertificates(Request $request)
    {
        if (!$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }

        $userName = $request->session()->get('user_name', 'Learner');

        return view('certificates', ['userName' => $userName]);
    }

    /**
     * Show settings page.
     */
    public function showSettings(Request $request)
    {
        if (!$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }

        $userName = $request->session()->get('user_name', 'Learner');
        $userEmail = $request->session()->get('user_email', '');

        return view('settings', ['userName' => $userName, 'userEmail' => $userEmail]);
    }

    /**
     * Logout and clear session.
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}
