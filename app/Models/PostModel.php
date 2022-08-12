<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    protected $table = "posts";
    protected $guarded = [];

    public function users(){
        return $this->belongsToMany(UserModel::class, "user_id");
    }
}
