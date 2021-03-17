<?php
namespace App;

use Carbon\Carbon;
use App\Models\Visit;

class VisitAnalytics{

	public static function registerVisitor(){
		if(!isset($_SESSION['visited'])){
			$_SESSION['visited']='true';
			$month=Carbon::now()->monthName;
			$year=Carbon::now()->year;
			$visit=Visit::firstOrCreate(
				['month'=>$month, 'year'=>$year]
			);
			$visit->increment('count');
		}
	}
}