<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserModel;

class PostModel extends Model
{
    use HasFactory;

    protected $table = "posts";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'body',
        'footer'
    ];

    public function users(){
        return $this->belongsTo(UserModel::class, "user_id");
    }
}
