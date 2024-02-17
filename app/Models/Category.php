<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

     /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany(product::class);
    }
    public function getBySlug($slug) {

        return $this->where('slug', $slug)->first();
    }
}
