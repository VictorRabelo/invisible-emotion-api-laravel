<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmotionPattern extends Model
{
    protected $fillable = [
        'user_id',
        'pattern',
    ];
}
