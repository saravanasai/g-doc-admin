<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $connection = "mysql_app";
    protected $table = "projects";

    protected $guarded = [];

    public function appType()
    {

        return $this->hasOne(AppType::class, 'id', 'app_type_id');
    }

}
