<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\product;

class OrderDetail extends Model
{
    use HasFactory;

    public function order() {

        return $this->belongsTo(Order::class)->withDefault();
    }
    public function product() {
        return $this->belongsTo(product::class)->withDefault();
    }

}
