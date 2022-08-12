<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{
    LoginController,
    LogoutController,
    RegistrationController,
    VerifyEmailController,
    SendLinkToResetPasswordController,
    ResetPasswordController
};
use App\Http\Controllers\Modules\{
    UserController,
    PostController
};
use App\Http\Controllers\Internal\{
    DashboardController
};

// Guest redirect to /dashboard if the user is already authenticated
// This middleware is named as 'RedirectIfAuthenticated'
Route::middleware(['guest'])->group(function () {
    // Auth directly acessible forms 
    Route::view('/', "auth.login")->name("login");
    Route::view('/register', "auth.register")->name("register");
    Route::view('/recover', "auth.recover")->name("recover");
    // Auth form acessible by email - to reset password
    Route::get('/reset-password/{token}', function ($token) {
        return view('auth.reset-password', ['token' => $token]);
    })->middleware('guest')->name('password.reset');
    // Auth form actions
    Route::post('/login', LoginController::class)->name("action.login");
    Route::post('/register', RegistrationController::class)->name("action.register");
    Route::get('/register/verify/{id}', VerifyEmailController::class)->name("action.verify-email");
    Route::post('/send-link', SendLinkToResetPasswordController::class)->name("action.send-link");
    Route::post('/reset-password', ResetPasswordController::class)->name('password.update');
});

// Internal system routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name("dashboard");
    Route::view('/my-profile', "internal.my_profile")->name("my-profile");
    Route::get('/logout', LogoutController::class)->name("action.logout");
    Route::resource('user', UserController::class);
    Route::resource('post', PostController::class);
});
