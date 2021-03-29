<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class News extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='news';

    public static $searchableType = 'Новости:';

    public function userPath(){
        return "/news/view/{$this->id}";
    }
    

    public function adminPath(){
        return "/admin/news/{$this->id}";
    }

}
