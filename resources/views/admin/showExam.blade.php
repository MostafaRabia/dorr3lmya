@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/showExamStyle.css') !!}
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{$name}}</h4>
				@php $i=0; @endphp
				@foreach($getQues as $Ques)
					@php $i++ @endphp
					<h5>{{trans('showExam.Que')}}</h5>
					<p class="flow-text">{{$Ques->ques}}</p>
					<h5>{{trans('showExam.Ans')}}</h5>
					@if($Ques->ans1!=null&&$Ques->ans2!=null)
					<p>
						<input name="group1" type="radio" id="{{$Ques->ans1}}{{$i}}" />
						<label for="{{$Ques->ans1}}{{$i}}">{{$Ques->ans1}}</label>
						@php $i++ @endphp
					</p>
					<p>
						<input name="group1" type="radio" id="{{$Ques->ans2}}{{$i}}" />
						<label for="{{$Ques->ans2}}{{$i}}">{{$Ques->ans2}}</label>
						@php $i++ @endphp
					</p>
					@elseif($Ques->correct==null)
						<textarea id="textarea1" name='ans' class="materialize-textarea"></textarea>
					@endif
					@if($Ques->ans3!=null)
						<p>
							<input name="group1" type="radio" id="{{$Ques->ans3}}{{$i}}" />
							<label for="{{$Ques->ans3}}{{$i}}">{{$Ques->ans3}}</label>
							@php $i++ @endphp
						</p>
					@endif
					@if($Ques->ans4!=null)
						<p>
							<input name="group1" type="radio" id="{{$Ques->ans4}}{{$i}}" />
							<label for="{{$Ques->ans4}}{{$i}}">{{$Ques->ans4}}</label>
						</p>
					@endif
				@endforeach
			</div>
		</div>
	</div>
</section>
@stop