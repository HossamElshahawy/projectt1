<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Magazine extends Model
{
    protected $guarded = [];

    use HasFactory,Searchable;

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }
}