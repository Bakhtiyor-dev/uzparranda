<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Feedback extends Model implements Searchable
{
    use HasFactory;

    protected $guarded=[];

    public function adminPath(){
        return "/admin/feedback#msg-{$this->id}";
    }

    public function getSearchResult(): SearchResult
    {
        return new SearchResult(
           $this,
           $this->body
        );
    }
}
