<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;
use App\Notifications\Auth\RegistrationNotification;

class RegistrationController extends Controller
{
    function __construct(UserModel $model){
        $this->model = $model;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {

        $user = $this->model->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->notify(new RegistrationNotification($user));

        return back()->with('status', 'Successful! Check your email.');

    }
}
