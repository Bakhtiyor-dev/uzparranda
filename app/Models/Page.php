<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Page extends Model implements Searchable
{   
    use HasFactory;
    protected $guarded=[];
    public function getRouteKeyName(){
    	return 'name';
    }

    public function userPath(){
        return "/pages/{$this->name}";
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
