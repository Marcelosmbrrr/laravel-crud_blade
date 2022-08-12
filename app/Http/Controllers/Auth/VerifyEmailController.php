<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class VerifyEmailController extends Controller
{

    private $model;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {

        $user = $this->model->where("id", $id)->update([
            "email_verified_at" => date("Y-m-d H:i:s")
        ]);

        return redirect()->route("login")->with('status', 'Your account is ready!');
    }
}
