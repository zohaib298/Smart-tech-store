<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products'; 
   public function seller()
{
    return $this->belongsTo(User::class, 'seller_id');
}
}
