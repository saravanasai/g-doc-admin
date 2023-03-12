<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppType extends Model
{
    use HasFactory;

    protected $connection = "mysql_app";
    protected $table = "app_types";

    protected $guarded = [];
}
