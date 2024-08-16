<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcalidrawData extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
    protected $casts = [
        'content' => 'array',
    ];
}
