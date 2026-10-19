<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'subtitle',
        'description',
        'price',
        'price_numeric',
        'image',
        'color',
        'status',
    ];

    public function specifications(): HasMany
    {
        return $this->hasMany(Specification::class);
    }

    public function features(): HasMany
    {
        return $this->hasMany(Feature::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'car_category');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function promos(): BelongsToMany
    {
        return $this->belongsToMany(Promo::class, 'promo_car');
    }
}
