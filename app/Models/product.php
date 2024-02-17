<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    use HasFactory;

    public function category() {

        return $this->belongsTo(Category::class)->withDefault();
    }
    public function orderDetail() {

        return $this->hasOne(OrderDetail::class)->withDefault();
    }
    public function getBySlug($slug) {

        return $this->where('slug', $slug)->first();
    }
}
