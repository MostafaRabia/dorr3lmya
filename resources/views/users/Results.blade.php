@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/myExamsStyle.css') !!}
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{trans('Results.Results')}}</h4>
				<table class="responsive-table">
					<thead>
						<tr>
							<th>{{trans('Results.Que')}}</th>
							<th>{{trans('Results.Ans')}}</th>
							<th>{{trans('Results.Correct')}}</th>
							<th>{{trans('Results.resultQue')}}</th>
							<th>{{trans('Results.Notes')}}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($getResults as $Results)
							<tr>
								<td>{{$Results->Ques->ques}}</td>
								<td>{{$Results->answer}}</td>
								<td>
									@if($Results->Ques->correct==null)
										{{trans('Results.nullCorrect')}}
									@else
										{{$Results->Ques->correct}}
									@endif
								</td>
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
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@stop