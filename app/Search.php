<?php
namespace App;

class Search{
    
	public static function searchInModel($model,$field,$query){
        return $model::where($field[0],'LIKE','%'.$query.'%')
                        ->orWhere($field[1],'LIKE','%'.$query.'%')
                        ->get();
    }
}