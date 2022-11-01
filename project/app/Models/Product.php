<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'supplier_id', 'type_id', 'price', 'quantity', 'information', 'descript', 'img', 'state'];


    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
    public function order_details()
    {
        return $this->hasMany(Order_details::class); //Item là class trong thư mục Models
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class); //Item là class trong thư mục Models
    }
    public function New_news()
    {
        return $this->hasMany(New_new::class);
    }
    public function whislists()
    {
        return $this->hasMany(Whislist::class);
    }
    public function productimages()
    {
        return $this->hasMany(ProductImage::class); //Item là class trong thư mục Models
    }
}
