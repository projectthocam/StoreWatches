<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'address', 'phone', 'customer_id', 'discount_id'];
    use HasFactory;
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function order_details()
    {
        return $this->hasMany(Order_details::class); //Item là class trong thư mục Models
    }
}
