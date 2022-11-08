<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['	id', 'name', 'email', 'product', 'public', 'secret_key'];
    public $timestamps = null;
    public function scopeActive($query){
        return $query->where('public',1);
    }
}
