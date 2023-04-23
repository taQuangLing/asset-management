<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class LoginController extends Controller
{
    function validateUser($username, $password): bool
    {
        $pdo = new PDO('mysql:host=localhost;dbname=asset_management', 'root', 'root');

        $stmt = $pdo->prepare('SELECT * FROM accounts WHERE ten_tai_khoan = ?');
        $stmt->execute([$username]);

        $user = $stmt->fetch();
        if ($user && strcmp($password, $user['mat_khau']) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->input('email');
        $password = $request->input('password');

        if ($this->validateUser($username, $password)) {
            // Authentication successful
            // Redirect to dashboard or homepage
            return redirect()->route('quanlytaisan');
        } else {
            // Authentication failed
            // Redirect back to login form with error message
            return redirect()->route('login')->with('error', 'Invalid username or password.');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
