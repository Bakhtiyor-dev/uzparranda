<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Product extends Model implements Searchable
{
    use HasFactory;
    protected $guarded=[];
    
    public function userPath(){
        return "/products/view/{$this->id}";
    }

    public function adminPath(){
        return "/admin/products/{$this->id}";
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
           $this,
           $this->title
        );
    }
}
