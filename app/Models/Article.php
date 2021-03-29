<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    protected $guarded=[];

    public static $searchableType = 'Cтатьи:';
    
    public function userPath(){
        return "/articles/view/{$this->id}";
    }

    public function adminPath(){
        return "/admin/articles/{$this->id}";
    }

}
