<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orderitem extends Model
{
    public function product()
{
    return $this->belongsTo(product::class);
}

public function order()
{
    return $this->belongsTo(orders::class, 'order_id');
}
}
