<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'stock',
        'tag_id',
        'image'
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
