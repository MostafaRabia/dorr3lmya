<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exams;
use App\Results;
use App\Users;
use App\Ques;
use App\Permission;
use App\Member;
use Validator;
use Illuminate\Validation\Rule;

class Exam extends Controller
{
	public function showExams(){
		app()->singleton('Title',function(){
			return trans('Titles.Exam');
		});
		$getExams = Exams::orderBy('id','desc')->get();
		return view(app('admin').'.Exam',['getExams'=>$getExams]);
	}
	public function showCreateExam($id=null){
		app()->singleton('Title',function(){
			return trans('Titles.createExam');
		});
		return view(app('admin').'.Create',['id'=>$id]);
	}
	public function createExam(Request $r){
		$Validate = Validator::make($r->all(),[
				'name' => 'required|unique:exams,name',
				'time' => 'required'
			]);
		if ($Validate->fails()){
			return redirect()->back()->with('pModal',trans('Modal.pErrorModalCreateExamQues'))->withErrors($Validate)->withInput();
		}else{
			$dateFrom = null;
			$dateTo = null;
			if ($r->has('dateFrom')){
				$dateFrom = explode(',',$r->input('dateFrom'));
			}
			if ($r->has('dateTo')){
				$dateTo = explode(',',$r->input('dateTo'));
			}
			$addExam = new Exams;
				$addExam->name = $r->input('name');
				$addExam->time = $r->input('time');
				$addExam->dateFrom = $dateFrom[0].$dateFrom[1].' '.$r->input('timeFrom');
				$addExam->dateTo = $dateTo[0].$dateTo[1].' '.$r->input('timeTo');
				$addExam->timeFrom = $r->input('timeFrom');
				$addExam->timeTo = $r->input('timeTo');
				$addExam->avil = 0;
			$addExam->save();
			$idExam = $addExam->id;
			$getMembers = Member::get();
			foreach ($getMembers as $Member){
				$addPermissiin = new Permission;
					$addPermissiin->id_exam = $idExam;
					$addPermissiin->id_user = $Member->id_member;
					$addPermissiin->complete = 0;
					$addPermissiin->finish = 0;
					$addPermissiin->ban = 0;
				$addPermissiin->save();
			}
			return redirect('create/exam/'.$idExam);
		}
	}
	public function createQuesExam(Request $r,$id){
		$getIdQue = Ques::orderBy('id_que','DESC')->first();
		$getIdQuery = Ques::where('id_exam',$id)->orderBy('id_query','DESC')->first();
		if($getIdQue){
			$idQue = $getIdQue->id_que + 1;
		}else{
			$idQue = 1;
		}
		if($getIdQuery){
			$idQuery = $getIdQuery->id_query + 1;
		}else{
			$idQuery = 1;
		}
		$Validate = Validator::make($r->all(),[
				'ques' => 'required',
			]);
		if ($Validate->fails()){
			return redirect()->back()->with('pModal',trans('Modal.pErrorModalCreateExamQues'))->withErrors($Validate)->withInput();
		}else{
			$addQues = new Ques;
				$addQues->id_exam = $id;
				$addQues->id_que = $idQue;
				$addQues->id_query = $idQuery;
				$addQues->ques = $r->input('ques');
				$addQues->ans1 = $r->input('ans1');
				$addQues->ans2 = $r->input('ans2');
				$addQues->ans3 = $r->input('ans3');
				$addQues->ans4 = $r->input('ans4');
				$addQues->correct = $r->input('correct');
				$addQues->trueNote = $r->input('truenote');
				$addQues->falseNote = $r->input('falsenote');
			$addQues->save();
			$addCountQues = Exams::find($id);
				$addCountQues->ques++;
			$addCountQues->save();
			return redirect()->back()->with('pModal',trans('Modal.addQuesSuccess'));
		}
	}
	public function showEditExam($id){
		app()->singleton('Title',function(){
			return trans('Titles.editExam');
		});
		$getExam = Exams::find($id);
		$getQues = Ques::where('id_exam',$id)->get();
		return view(app('admin').'.showEdit',['getExam'=>$getExam,'getQues'=>$getQues]);
	}
	public function showEditExamQuestion($id){
		app()->singleton('Title',function(){
			return trans('Titles.editExamQuestion');
		});
		$getQue = Ques::find($id);
		return view(app('admin').'.Edit',['getQue'=>$getQue]);
	}
	public function editExam(Request $r,$id){
		$getQuesAndExam = Ques::find($id);
		$Validate = Validator::make($r->all(),[
				'name' => [
					'required',
					Rule::unique('exams')->ignore($getQuesAndExam->Exam->id),
				],
				'time' => 'required',
				'ques' => 'required',
			]);
		if ($Validate->fails()){
			return redirect()->back()->with('pModal',trans('Modal.pErrorModalEditExamQues'))->withErrors($Validate)->withInput();
		}else{
			$dateFrom = null;
			$dateTo = null;
			if ($r->has('dateFrom')){
				$dateFrom = explode(',',$r->input('dateFrom'));
			}
			if ($r->has('dateTo')){
				$dateTo = explode(',',$r->input('dateTo'));
			}
			$getQuesAndExam->Exam->name = $r->input('name');
			$getQuesAndExam->Exam->time = $r->input('time');
			$getQuesAndExam->Exam->dateFrom = $dateFrom[0].$dateFrom[1].' '.$r->input('timeFrom');
			$getQuesAndExam->Exam->dateTo = $dateTo[0].$dateTo[1].' '.$r->input('timeTo');
			$getQuesAndExam->Exam->timeFrom = $r->input('timeFrom');
			$getQuesAndExam->Exam->timeTo = $r->input('timeTo');
			$getQuesAndExam->ques = $r->input('ques');
			$getQuesAndExam->ans1 = $r->input('ans1');
			$getQuesAndExam->ans2 = $r->input('ans2');
			$getQuesAndExam->ans3 = $r->input('ans3');
			$getQuesAndExam->ans4 = $r->input('ans4');
			$getQuesAndExam->correct = $r->input('correct');
			$getQuesAndExam->trueNote = $r->input('truenote');
			$getQuesAndExam->falseNote = $r->input('falsenote');
			$getQuesAndExam->save();
			$getQuesAndExam->Exam->save();
			return redirect('edit/exam/'.$getQuesAndExam->Exam->id);
		}
	}
	public function deleteQue($id){
		$Que = Ques::find($id);
			$updateQues = Exams::find($Que->Exam->id);
			$updateQues->ques--;
			$updateQues->save();
		$Que->delete();
		return redirect()->back();
	}
	public function showExam($Name){
		$getId = Exams::where('name',$Name)->first();
		$getQues = Ques::where('id_exam',$getId->id)->inRandomOrder()->get();
		app()->singleton('Title',function() use ($Name){
			return $Name.' | '.trans('Titles.nameOfWebSite');
		});
		return view(app('admin').'.showExam',['getQues'=>$getQues,'name'=>$Name,'getId'=>$getId]);
	}
	public function showResults($id){
		$getFinsh = Permission::where('id_exam',$id)->where('finish',1)->get();
		$getExam = Exams::find($id);
		foreach ($getFinsh as $Finish){
			$getUsersFinish = Users::where('id_user',$Finish->id_user)->first();
			$usersFinish[] = $getUsersFinish;	
		}
		app()->singleton('Title',function(){
			return trans('Titles.Results');
		});
		return view(app('admin').'.usersFinish',['usersFinish'=>$usersFinish,'getExam'=>$getExam]);
	}
	public function Results($id,$User){
		$getResults = Results::where('id_exam',$id)->where('id_user',$User)->get();
		app()->singleton('Title',function(){
			return trans('Titles.Results');
		});
		return view(app('admin').'.Results',['getResults'=>$getResults]);
	}
	public function showNotes($id){
		$getResult = Results::find($id);
		app()->singleton('Title',function(){
			return trans('Titles.addNotes');
		});
		return view(app('admin').'.ShowNotes',['getResult'=>$getResult]);
	}
	public function Notes(Request $r,$id){
		$addNotes = Results::find($id);
			$addNotes->notes = $r->input('notes');
		$addNotes->save();
		return redirect('results/exam/'.$addNotes->id_exam);
	}
	public function Stop(Request $r,$id){
		if ($r->input('stop')=='Stop'){
			$Avil = 0;
		}else{
			$Avil = 1;
		}
		$stopExam = Exams::find($id);
			$stopExam->avil = $Avil;
		$stopExam->save();
	}
	public function showSetting($id){
		$getExam = Exams::find($id);
		$Name = $getExam->name;
		app()->singleton('Title',function() use ($Name){
			return $Name.' | '.trans('Titles.nameOfWebSite');
		});
		return view(app('admin').'.Setting',['getExam'=>$getExam]);
	}
	public function Students($id){
		$getFinsh = Permission::where('id_exam',$id)->where('finish',1)->get();
		$getExam = Exams::find($id);
		foreach ($getFinsh as $Finish){
			$getUsersFinish = Users::where('id_user',$Finish->id_user)->first();
			$usersFinish[] = $getUsersFinish;	
			$getResults[] = Results::where('id_user',$getUsersFinish['id'])->where('id_exam',$getExam->id)->where('result',1)->count();
		}
		app()->singleton('Title',function(){
			return trans('Titles.Students');
		});
		return view(app('admin').'.Students',['usersFinish'=>$usersFinish,'getResults'=>$getResults,'getExam'=>$getExam]);
	}
	public function Result(Request $r,$id){
		if ($r->input('result')=='True'){
			$Right = 1;
		}else{
			$Right = 0;
		}
		$addResult = Results::find($id);
			$addResult->result = $Right;
		$addResult->save();
	}
	public function deleteExam($id){
		Exams::where('id',$id)->delete();
		Ques::where('id_exam',$id)->delete();
		Permission::where('id_exam',$id)->delete();
		Results::where('id_exam',$id)->delete();
		return redirect('exams');
	}
	public function Update($id){
		$getMember = Member::get();
		foreach ($getMember as $Member) {
			$getPermission = Permission::where('id_user',$Member->id_member)->where('id_exam',$id)->first();
			if ($getPermission){}else{
				$addPermission = new Permission;
					$addPermission->id_exam = $id;
					$addPermission->id_user = $Member->id_member;
					$addPermission->ban = 0; 
					$addPermission->complete = 0; 
					$addPermission->finish = 0;
				$addPermission->save(); 
				echo 'done';
			}						
		}
	}
	public function copyExam($id){
		$getExam = Exams::find($id);
		$newExam = new Exams;
			$newExam->name = $getExam->name.'(copied)';
			$newExam->time = $getExam->time;
			$newExam->dateFrom = $getExam->dateFrom;
			$newExam->dateTo = $getExam->dateTo;
			$newExam->timeFrom = $getExam->timeFrom;
			$newExam->timeTo = $getExam->timeTo;
			$newExam->ques = $getExam->ques;
			$newExam->avil = $getExam->avil;
		$newExam->save();
		$idNewExam = $newExam->id;
		$getQues = Ques::where('id_exam',$id)->get();
		foreach ($getQues as $Ques){
			$newQues = new Ques;
				$newQues->id_exam = $idNewExam;
				$newQues->id_que = $Ques->id_que;
				$newQues->id_query = $Ques->id_query;
				$newQues->ques = $Ques->ques;
				$newQues->ans1 = $Ques->ans1;
				$newQues->ans2 = $Ques->ans2;
				$newQues->ans3 = $Ques->ans3;
				$newQues->ans4 = $Ques->ans4;
				$newQues->correct = $Ques->correct;
				$newQues->note = $Ques->note;
			$newQues->save();
		}
		$getResults = Results::where('id_exam',$id)->get();
		foreach ($getResults as $Result){
			$newResult = new Results;
				$newResult->id_exam = $idNewExam;
				$newResult->id_user = $Result->id_user;
				$newResult->question = $Result->question;
				$newResult->answer = $Result->answer;
				$newResult->notes = $Result->notes;
				$newResult->result = $Result->result;
			$newResult->save();
		}
		$getPermission = Permission::where('id_exam',$id)->get();
		foreach ($getPermission as $Permission){
			$newPermission = new Permission;
				$newPermission->id_exam = $idNewExam;
				$newPermission->id_user = $Permission->id_user;
				$newPermission->complete = $Permission->complete;
				$newPermission->finish = $Permission->finish;
				$newPermission->ban = $Permission->ban;
			$newPermission->save();
		}
		return redirect('exams');
	}
}