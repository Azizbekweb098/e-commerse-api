<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'icon'];

    protected $translatable = ['name'];

    // timestamps ni o'chirib qo'yish
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
