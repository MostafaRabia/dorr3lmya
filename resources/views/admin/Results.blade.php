@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/Results.css?version=1.1.0') !!}
{!! Html::script(app('js').'/materialize-pagination.min.js?version=1.1.0') !!}
{!! Html::script(app('js').'/ResultsJs.min.js?version=1.1.0') !!}
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{trans('adminResults.Results')}}</h4>
				@foreach($getResults as $Results)
					<h5>{{trans('adminResults.nameOfMember')}}: {{$Results->User->username}}</h5>
					<h5>{{trans('adminResults.Que')}}: {{$Results->Ques->ques}}</h5>
					<h5>{{trans('adminResults.Ans')}}: {{$Results->answer}}</h5>
					<h5>
						{{trans('adminResults.Correct')}}: 
						@if($Results->Ques->correct!=null)
							{{$Results->Ques->correct}}
						@else
							{{trans('Results.nullCorrect')}}
						@endif
					</h5>
					<h5>
						{{trans('adminResults.Result')}}: 
						@if($Results->result==1)
							{{trans('Results.Success')}}
						@elseif($Results->result==2)
							{{trans('Results.Pending')}}
						@else
							{{trans('Results.Fail')}}
						@endif
					</h5>
					<h5>{{trans('adminResults.Notes')}}: {{$Results->notes}}</h5>
					<h5>
						{{trans('adminResults.addResult')}}: 
						<a class="btn-floating waves-effect waves-light red lighten-2" href="{{url('notes/')}}/{{$Results->id}}">
							<i class="material-icons">send</i>
						</a>
					</h5>
					<h5>
						{{trans('adminResults.Right/Flase')}}: 
						<div class="switch">
							<label>
								صح
								<input type="checkbox" id="{{$Results->id}}" value="{{$Results->result}}">
								<span class="lever"></span>
								خطأ
							</label>
						</div>
					</h5>
					<hr>
				@endforeach
				<!-- Start Pagination -->
				{{$getResults->links()}}
			    <!-- End Pagination -->
			</div>
		</div>
	</div>
</section>
@stop