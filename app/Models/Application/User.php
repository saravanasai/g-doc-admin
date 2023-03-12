<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $connection = "mysql_app";
    protected $table = "users";

    protected $guarded = [];


    public function projects(){

        return $this->hasMany(Projects::class,'user_id','id');
    }
}
