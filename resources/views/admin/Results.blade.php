@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/myExamsStyle.css') !!}
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{trans('adminResults.Results')}}</h4>
				<table class="responsive-table">
					<thead>
						<tr>
							<th>{{trans('adminResults.nameOfMember')}}</th>
							<th>{{trans('adminResults.Que')}}</th>
							<th>{{trans('adminResults.Ans')}}</th>
							<th>{{trans('adminResults.Correct')}}</th>
							<th>{{trans('adminResults.Result')}}</th>
							<th>{{trans('adminResults.Notes')}}</th>
							<th>{{trans('adminResults.addResult')}}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($getResults as $Results)
							<tr>
								<td>{{$Results->User->username}}</td>
								<td>{{$Results->Ques->ques}}</td>
								<td>{{$Results->answer}}</td>
								<td>{{$Results->Ques->correct}}</td>
								<td>
									@if($Results->result==1)
										{{trans('Results.Success')}}
									@elseif($Results->result==2)
										{{trans('Results.Pending')}}
									@else
										{{trans('Results.Fail')}}
									@endif
								</td>
								<td>{{$Results->notes}}</td>
								<td>
									<a class="btn-floating waves-effect waves-light 	red lighten-2" href="{{url('notes/')}}/{{$Results->id}}">
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