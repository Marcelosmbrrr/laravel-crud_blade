<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class DashboardController extends Controller
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
    public function __invoke(Request $request)
    {
        if(isset($request->search)){

            $users = $this->model->where("id", $request->search)
                ->orWhere("name", "like", "%".$request->search."%")
                ->orWhere("email", "like", "%".$request->search."%")
                ->get();
           
        }else{

            $users = $this->model->all();

        }

        return view("internal.dashboard", compact("users"));
        
    }
}
