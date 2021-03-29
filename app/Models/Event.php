<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public static $searchableType = 'События:';

    public function userPath(){
        return "/events/view/{$this->id}";
    }

    public function adminPath(){
        return "/admin/events/{$this->id}";
    }


}
