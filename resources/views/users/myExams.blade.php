@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/myExamsStyle.css?version=1.1.0') !!}
{!! Html::script(app('js').'/myExamsJs.min.js?version=1.1.0') !!}
<!-- Start Modal -->
<div id="modal1" class="modal">
	<div class="modal-content">
		<h4>{{trans('Modal.h4ModalEnter')}}</h4>
		<p>{!!trans('Modal.pModalEnter')!!}</p>
	</div>
	<div class="modal-footer">
    	<a href="javascript:;" class="modal-action enter-modal waves-effect waves-green btn-flat">{{trans('Modal.Agree')}}</a>
    	<a href="javascript:;" class="modal-action modal-close waves-effect waves-red btn-flat">{{trans('Modal.Disagree')}}</a>
    </div>
</div>
<!-- End Modal -->
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{trans('myExams.myExams')}}</h4>
				<table class="responsive-table">
					<thead>
						<tr>
							<th>{{trans('myExams.Name')}}</th>
							<th>{{trans('myExams.From')}}</th>
							<th>{{trans('myExams.To')}}</th>
							<th>{{trans('myExams.countQue')}}</th>
							<th>{{trans('myExams.countAns')}}</th>
							<th>{{trans('myExams.Result')}}</th>
							<th>{{trans('myExams.enterExam')}}</th>
							<th>{{trans('myExams.enterAnswer')}}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($getExams as $Exam)
							@php
								$countAns = App\Results::where('id_user',auth()->user()->id)->where('id_exam',$Exam->id)->where('result',1)->count(); 
								$getPermission = App\Permission::where('id_exam',$Exam->id)->where('id_user',auth()->user()->id_user)->first();
							@endphp
							<tr>
								<td>{{$Exam->name}}</td>
								<td class="en">
									@if($Exam->dateFrom!=null)
										{{$Exam->dateFrom}} {{$Exam->timeFrom}}
									@else
										{{trans('myExams.notDate')}}
									@endif
								</td>
								<td class="en">
									@if($Exam->dateTo!=null)
										{{$Exam->dateTo}} {{$Exam->timeTo}}
									@else
										{{trans('myExams.notDate')}}
									@endif
								</td>
								<td>{{$Exam->ques}}</td>
								<td>{{$countAns}}</td>
								<td>{{$countAns}}/{{$Exam->ques}}</td>
								@if ($getPermission)
									@if ($getPermission->ban==1)
										<td>{{trans('myExams.Ban')}}</td>
									@elseif ($getPermission->ban==0&&$getPermission->enter==0&&$getPermission->finish==0&&$Exam->avil==1)
										<td><a class="btn-floating waves-effect waves-light teal lighten-1 enter" href="{{url('exam')}}/{{$Exam->name}}">
											<i class="material-icons">send</i>
										</a></td>
									@elseif ($getPermission->finish==1&&$getPermission->ban==0)
										<td></td>
										<td><a class="btn-floating waves-effect waves-light teal lighten-1" href="{{url('results')}}/{{$Exam->name}}">
											<i class="material-icons">send</i>
										</a></td>
									@endif
								@endif
								@if ($Exam->avil==0)
									<td></td>
									<td><a class="btn-floating waves-effect waves-light teal lighten-1" href="{{url('results')}}/{{$Exam->name}}">
										<i class="material-icons">send</i>
									</a></td>
								@endif
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@stop