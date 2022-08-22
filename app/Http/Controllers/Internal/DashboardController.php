<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\PostModel;

class DashboardController extends Controller
{
    function __construct(UserModel $user_model, PostModel $post_model){
        $this->user_model = $user_model;
        $this->post_model = $post_model;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = [
            "users" => $this->user_model->all()->count(),
            "posts" => $this->post_model->all()->count()
        ];

        return view("internal.dashboard", compact("data"));
        
    }
}
