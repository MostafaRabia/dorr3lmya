@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/Results.css?version=1.1.0') !!}
{!! Html::script(app('js').'/materialize-pagination.min.js?version=1.1.0') !!}
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{trans('Results.Results')}}</h4>
				@foreach($getResults as $Results)
					<h5>{{trans('Results.Que')}} {{$Results->Ques->ques}}</h5>
					<h5>{{trans('Results.Ans')}} {{$Results->answer}}</h5>
					<h5>
						{{trans('Results.Correct')}}
						@if($Results->Ques->correct==null)
							{{trans('Results.nullCorrect')}}
						@else
							{{$Results->Ques->correct}}
						@endif
					</h5>
					<h5>
						{{trans('Results.resultQue')}}
						@if($Results->result==1)
							{{trans('Results.Success')}}
						@elseif($Results->result==2)
							{{trans('Results.Pending')}}
						@else
							{{trans('Results.Fail')}}
						@endif
					 </h5>
					 <h5>{{trans('Results.Notes')}} {{$Results->notes}}</h5>
					 <hr>
				@endforeach
			</div>
		</div>
	</div>
</section>
@stop