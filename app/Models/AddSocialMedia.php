<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddSocialMedia extends Model
{
    use HasFactory;

    protected $table = 'add_social_media';
    protected $fillable = [
        'title',
        'icon',
        'url'
    ];

}
