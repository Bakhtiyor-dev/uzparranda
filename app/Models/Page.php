<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{   
    use HasFactory;
    protected $guarded=[];
    public function getRouteKeyName(){
    	return 'name';
    }

    public static $searchableType = 'Страницы:';
    
    public function userPath(){
        return "/pages/{$this->name}";
    }

    public function adminPath(){
        return "/admin/pages/{$this->name}";
    }


}
