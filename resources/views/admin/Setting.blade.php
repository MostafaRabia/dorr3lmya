@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/myExamsStyle.css?version=1.1.0') !!}
{!! Html::script(app('js').'/myExamsScript.min.js?version=1.1.0') !!}
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
							<th>{{trans('Exam.View')}}</th>
							<th>{{trans('Exam.Edit')}}</th>
							<th>{{trans('Exam.Results')}}</th>
							<th>{{trans('Exam.Stop')}}</th>
							<th>{{trans('Exam.Students')}}</th>
							<th>{{trans('Exam.deleteExam')}}</th>
							<th>{{trans('Exam.addQue')}}</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{$getExam->name}}</td>
							<td>
								<a class="btn-floating waves-effect waves-light teal lighten-1" href="{{url('show/exam')}}/{{$getExam->name}}">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light 	red lighten-2" href="{{url('edit/exam')}}/{{$getExam->id}}">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light 	deep-purple lighten-2" href="{{url('results/exam/')}}/{{$getExam->id}}">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<div class="switch">
									<label>
										Off
										<input type="checkbox" id="{{$getExam->id}}" value="{{$getExam->avil}}">
										<span class="lever"></span>
										On
									</label>
								</div>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light blue darken-4" href="{{url('students/exam/')}}/{{$getExam->id}}">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light orange darken-4" href="{{url('delete/exam/')}}/{{$getExam->id}}">
									<i class="material-icons">send</i>
								</a>
							</td>
							<td>
								<a class="btn-floating waves-effect waves-light green darken-4" href="{{url('create/exam/')}}/{{$getExam->id}}">
									<i class="material-icons">send</i>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@stop