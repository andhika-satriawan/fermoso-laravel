<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $table = 'settings';

    protected $fillable = [
        'phone',
        'chat_text',
        'banner',
    ];
}
