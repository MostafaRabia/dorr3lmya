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
							<th>{{trans('Exam.countQue')}}</th>
							<th>{{trans('Exam.View')}}</th>
							<th>{{trans('Exam.Edit')}}</th>
							<th>{{trans('Exam.Results')}}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($getExams as $Exam)
							<tr>
								<td>{{$Exam->name}}</td>
								<td>{{$Exam->ques}}</td>
								<td>
									<a class="btn-floating waves-effect waves-light teal lighten-1" href="{{url('show/exam')}}/{{$Exam->name}}">
										<i class="material-icons">send</i>
									</a>
								</td>
								<td>
									<a class="btn-floating waves-effect waves-light 	red lighten-2" href="{{url('edit/exam')}}/{{$Exam->id}}">
										<i class="material-icons">send</i>
									</a>
								</td>
								<td>
									<a class="btn-floating waves-effect waves-light 	deep-purple lighten-2" href="{{url('results/exam/')}}/{{$Exam->id}}">
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