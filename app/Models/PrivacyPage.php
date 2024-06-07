<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPage extends Model
{
    use HasFactory;

    public $table = "privacy_page";
    public $fillable = ['content_ar', 'content_en'];
    public $timestamps = false;
}
