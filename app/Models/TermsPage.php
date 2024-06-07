<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsPage extends Model
{
    use HasFactory;
    public $table = "terms_page";
    public $fillable = ['content_ar', 'content_en'];
    public $timestamps = false;
}
