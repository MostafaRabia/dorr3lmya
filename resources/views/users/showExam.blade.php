@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/showExamStyleUsers.css?version=1.1.1') !!}
{!! Html::script(app('js').'/js.cookie.min.js?version=1.1.0') !!}
{!! Html::script(app('js').'/showExamJsUsers.min.js?version=1.1.0') !!}
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{$name}} <span><i class="material-icons">timer</i> <span>{{$getId->time}}:00</span></span></h4>
				{!! Form::open(['url'=>'exam/'.$getId->name,'method'=>'post']) !!}
				@php $i=0; $b=0; @endphp
					@foreach($getQues as $Ques)
						@php $i++; $b++; @endphp
						<h5>{{trans('showExam.Que')}}{{$b}}: {{$Ques->ques}}</h5>
						<h5>{{trans('showExam.Ans')}}</h5>
						@if ($Ques->ans1!=null&&$Ques->ans2!=null)
							<p>
								<input name="ans.{{$Ques->id_query}}" type="radio" id="{{$i}}" value="{{$Ques->ans1}}" />
								<label for="{{$i}}">{{$Ques->ans1}}</label>
								@php $i++ @endphp
							</p>
							<p>
								<input name="ans.{{$Ques->id_query}}" type="radio" id="{{$i}}" value="{{$Ques->ans2}}" />
								<label for="{{$i}}">{{$Ques->ans2}}</label>
								@php $i++ @endphp
							</p>
						@elseif ($Ques->correct==null)
							<textarea id="textarea1" name='ans.{{$Ques->id_query}}' class="materialize-textarea"></textarea>
						@endif
						@if($Ques->ans3!=null)
							<p>
								<input name="ans.{{$Ques->id_query}}" type="radio" id="{{$i}}" value="{{$Ques->ans3}}" />
								<label for="{{$i}}">{{$Ques->ans3}}</label>
								@php $i++ @endphp
							</p>
						@endif
						@if($Ques->ans4!=null)
							<p>
								<input name="ans.{{$Ques->id_query}}" type="radio" id="{{$i}}" value="{{$Ques->ans4}}" />
								<label for="{{$i}}">{{$Ques->ans4}}</label>
								@php $i++ @endphp
							</p>
						@endif
						<hr>
					@endforeach
					<button class="btn waves-effect waves-light" type="submit">
						{{trans('showExam.Finish')}}
						<i class="material-icons right">send</i>
					</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
@stop