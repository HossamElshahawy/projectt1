<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Artical extends Model
{
    use HasFactory,Searchable;
    protected $fillable = [
        'title',
        'content',
        'img',
        'min_description'
    ];


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }
}
