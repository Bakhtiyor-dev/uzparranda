<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Food extends Model implements Searchable
{
    use HasFactory;
    protected $guarded=[];

    public function userPath(){
        return "/food/view/{$this->id}";
    }

    public function adminPath(){
        return "/admin/food/{$this->id}";
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
           $this,
           $this->body
        );
    }

}
