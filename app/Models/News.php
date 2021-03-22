<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class News extends Model implements Searchable
{
    use HasFactory;
    protected $guarded=[];
    protected $table='news';

    public function userPath(){
        return "/news/view/{$this->id}";
    }

    public function adminPath(){
        return "/admin/news/{$this->id}";
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
           $this,
           $this->body
        );
    }
}
