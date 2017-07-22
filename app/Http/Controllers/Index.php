<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exams;
use Facebook;
use DB;
use Artisan;

class Index extends Controller
{
	public function Home(){
		app()->singleton('Title',function(){
			return trans('Titles.Home');
		});
		$getExams = Exams::orderBy('id','DESC')->first();
		return view(app('users').'.Home',['getExams'=>$getExams]);
	}
	public function Test($token){
		//234419900373626 -->1
		//830628813754070 -->2
		$test = Facebook::get('/830628813754070/members?limit=200',$token);
		$graph = $test->getGraphEdge();
		$test2 = json_decode($graph,true);
		$count = count($test2);
		for ($i=0;$i<$count;$i++){ 
			echo $test2[$i]['id'].'<br>';
			$id = DB::table('members')->where('id_member','=',$test2[$i]['id'])->first();
			if ($id){}else{
				DB::table('members')->insert([
						'id_member' => $test2[$i]['id'],
					]);
			}
		}
		echo $count;
	}
	public function Artisan($Artisan){
		Artisan::call($Artisan);
	}
}
