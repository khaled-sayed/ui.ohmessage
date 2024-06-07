<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    use HasFactory;

    public $table = "app_settings";
    public $fillable = ['key', 'name_ar', 'name_en'];
}
