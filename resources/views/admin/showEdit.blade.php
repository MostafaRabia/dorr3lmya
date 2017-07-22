@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/myExamsStyle.css') !!}
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{trans('Exam.Exams')}}</h4>
				<table class="responsive-table">
					<thead>
						<tr>
							<th>{{trans('Exam.Name')}}</th>
							<th>{{trans('Exam.From')}}</th>
							<th>{{trans('Exam.To')}}</th>
							<th>{{trans('showEdit.Ques')}}</th>
							<th>{{trans('showEdit.Ans1')}}</th>
							<th>{{trans('showEdit.Ans2')}}</th>
							<th>{{trans('showEdit.Ans3')}}</th>
							<th>{{trans('showEdit.Ans4')}}</th>
							<th>{{trans('showEdit.Correct')}}</th>
							<th>{{trans('Exam.Edit')}}</th>
							<th>{{trans('Exam.Delete')}}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($getQues as $Ques)
							<tr>
								<td>{{$getExam->name}}</td>
								<td class="en">{{$getExam->fromdate}} {{$getExam->fromtime}}</td>
								<td class="en">{{$getExam->todate}} {{$getExam->totime}}</td>
								<td>{{$Ques->ques}}</td>
								<td>{{$Ques->ans1}}</td>
								<td>{{$Ques->ans2}}</td>
								<td>{{$Ques->ans3}}</td>
								<td>{{$Ques->ans4}}</td>
								<td>{{$Ques->correct}}</td>
								<td>
									<a class="btn-floating waves-effect waves-light 	teal lighten-1" href="{{url('edit/exam/question')}}/{{$Ques->id}}">
										<i class="material-icons">send</i>
									</a>
								</td>
								<td>
									<a class="btn-floating waves-effect waves-light 	red lighten-2" href="{{url('delete/question')}}/{{$Ques->id}}">
										<i class="material-icons">send</i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@stop