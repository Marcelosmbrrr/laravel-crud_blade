<?php

namespace App\Http\Controllers\Internal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostModel;

class PostsPanelController extends Controller
{

    function __construct(PostModel $model){
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

            $posts = $this->model->where("id", $request->search)
                ->orWhere("title", "like", "%".$request->search."%")
                ->orWhere("body", "like", "%".$request->search."%")
                ->orWhere("footer", "like", "%".$request->search."%")
                ->get();
           
        }else{

            $posts = $this->model->all();

        }

        return view("internal.posts", compact("posts"));
    }
}
