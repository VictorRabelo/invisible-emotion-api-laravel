<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmotionInput extends Model
{
    protected $fillable = [
        'emotion',
        'description',
        'user_id',
    ];
}
