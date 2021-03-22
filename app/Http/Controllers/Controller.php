<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
    protected function createItem($model,$request){
        $model::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>'/storage/'.$request->file('img')->store('/'),
            'status'=>$request->status?true:false
        ]); 
    }
    
    protected function updateItem($model,$request){
        $img=$request->file('img');
        $path=$model->image;

        $model->update([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$img ? $img->store('/') : $path,
            'status'=>$request->status?true:false
        ]);
    }

    protected function deleteSelected($model,$request){
        $ids=explode(',',$request->ids);
        $model::whereIn('id',$ids)->delete();
    }
}
