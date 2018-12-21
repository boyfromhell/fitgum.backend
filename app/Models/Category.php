<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $casts = [
        'status' => 'bool',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
