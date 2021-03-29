<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public static $searchableType = 'Продукты:';

    public function userPath(){
        return "/products/view/{$this->id}";
    }

    public function adminPath(){
        return "/admin/products/{$this->id}";
    }

}
