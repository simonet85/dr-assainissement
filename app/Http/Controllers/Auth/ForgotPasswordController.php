<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Traits\EmailsPasswordResetLink;

use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    // Show the form for requesting a password reset link
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    // Handle the password reset link request
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Send the password reset link
        $response = $this->sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
            ? back()->with(['status' => 'Un e-mail a été envoyé pour réinitialiser votre mot de passe.'])
            : back()->withErrors(['email' => 'L’adresse e-mail fournie ne correspond à aucun compte.']);
    }

}
