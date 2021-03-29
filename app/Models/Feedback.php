<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Feedback extends Model
{
    use HasFactory;

    protected $guarded=[];

    public static $searchableType = 'Сообщения:';

    public function adminPath(){
        return "/admin/feedback#msg-{$this->id}";
    }

}
