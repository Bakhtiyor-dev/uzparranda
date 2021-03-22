<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Article extends Model implements Searchable
{
    use HasFactory;
    protected $guarded=[];

    public function userPath(){
        return "/articles/view/{$this->id}";
    }

    public function adminPath(){
        return "/admin/articles/{$this->id}";
    }

    public function getSearchResult(): SearchResult
    {    
        return new SearchResult(
           $this,
           $this->body
        );
    }
}
