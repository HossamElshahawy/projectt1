<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'user_id' ,'description', 'price','price_online', 'price_offline','photo','payment_link_price' , 'payment_link_online' , 'payment_link_offline'

    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'enrollments')->withTimestamps();
    }

    public function getAverageAttribute()
    {
        return (int)$this->reviews()->where('user_id', auth()->user()->id)->avg('rating');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }


    use HasFactory;
}
