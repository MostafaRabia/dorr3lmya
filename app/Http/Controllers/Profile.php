<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exams;
use App\Results;
use App\Permission;
use App\Ques;

class Profile extends Controller
{
	public function myExams(){
		app()->singleton('Title',function(){
			return auth()->user()->username.' | '.trans('Titles.nameOfWebSite');
		});
		$getExams = Exams::orderBy('id','desc')->get();
		return view(app('users').'.myExams',['getExams'=>$getExams]);
	}
	public function showEnterExam($Name){
		$getId = Exams::where('name',$Name)->first();
		$getPermission = Permission::where('id_exam',$getId->id)->where('id_user',auth()->user()->id_user)->first();
		if ($getPermission->ban==1||$getPermission->finish==1||$getId->avil==0){
			return redirect()->back();
		}
		$getQues = Ques::where('id_exam',$getId->id)->inRandomOrder()->get();
		app()->singleton('Title',function() use ($Name){
			return $Name.' | '.trans('Titles.nameOfWebSite');
		});
		return view(app('users').'.showExam',['getQues'=>$getQues,'name'=>$Name,'getPermission'=>$getPermission,'getId'=>$getId]);
	}
	public function enterExam(Request $r,$Name){
		$getId = Exams::where('name',$Name)->first();
		Permission::where('id_user',auth()->user()->id_user)->where('id_exam',$getId->id)->update(['finish'=>1]);
		if ($r->has('ban')){
			Permission::where('id_user',auth()->user()->id_user)->where('id_exam',$getId->id)->update(['ban'=>1]);
		}
		$count = count($r->all()) - 1;
		for ($i=1;$i<=$count;$i++){
			$explodes[] = explode('.','ans.'.$i);			
		}
		for ($i=0;$i<$count;$i++){ 
			$getQues[] = $explodes[$i][1];
		}
		foreach ($getQues as $key){
			$Note = '----';
			$getQue = Ques::where('id_query',$key)->where('id_exam',$getId->id)->first();
			if ($getQue->correct){
				if ($r->input($explodes[$key - 1][0].'_'.$explodes[$key - 1][1])==$getQue->correct){
					$Right = 1;
					if ($getQue->trueNote){
						$Note = $getQue->trueNote;
					}
				}else{
					$Right = 0;
					if ($getQue->falseNote){
						$Note = $getQue->falseNote;
					}
				}
			}else{
				$Right = 2;
			}
			$addResult = new Results;
				$addResult->id_exam = $getId->id;
				$addResult->id_user = auth()->user()->id;
				$addResult->question = $getQue->id_que;
				$addResult->answer = $r->input($explodes[$key - 1][0].'_'.$explodes[$key - 1][1]);
				$addResult->notes = $Note;
				$addResult->result = $Right;
			$addResult->save();
		}
		return redirect('results/'.$getQue->Exam->name);
	}
	public function showResults($Name){
		$getId = Exams::where('name',$Name)->first();
		$getResults = Results::where('id_user',auth()->user()->id)->where('id_exam',$getId->id)->get();
		app()->singleton('Title',function(){
			return trans('Titles.Results');
		});
		return view(app('users').'.Results',['getResults'=>$getResults]);
	}
}

