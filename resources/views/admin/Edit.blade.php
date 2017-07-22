@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/editQueStyle.css') !!}
{!! Html::script(app('js').'/createJs.min.js') !!}
<script type="text/javascript">
	$(document).ready(function(){
		@if(count($errors)>0||session()->has('pModal'))
			$('.modal').modal('open');
		@endif
	});
</script>
<!-- Start Modal -->
<div id="modal1" class="modal">
	<div class="modal-content">
		<h4>{{trans('Modal.h4Modal')}}</h4>
		<p>{{session()->get('pModal')}}</p>
	</div>
</div>
<!-- End Modal -->
<!-- Start Section Page -->
<section class="pageSection">
	<div class="container">
		<div class="row">
			<div class="asideLeft col s12 left">
				<h4>{{trans('editQue.H4')}}</h4>
				{!! Form::open(['url'=>'edit/exam/question/'.$getQue->id,'method'=>'post']) !!}
					<div class="input-field col s12"> 
						<h5>{{trans('createExam.Name')}}</h5>
						{!! Form::text('name',$getQue->Exam->name,['class'=>'validate valid']) !!}
					</div>
					<div class="input-field col s12">
						<h5>{{trans('createExam.Time')}}</h5>
						<input type="number" value="{{$getQue->Exam->time}}" name="time">
					</div>
					<div class="input-field col s12">
						<h5>{{trans('createExam.Ques')}}</h5>
						{!! Form::text('ques',$getQue->ques,['class'=>'validate valid']) !!}
					</div>
					<div class="input-field col s12 ans">
						<h5>{{trans('createExam.Ans')}}</h5>
						{!! Form::text('ans1',$getQue->ans1,['class'=>'validate valid']) !!}
					</div>
					<div class="input-field col s12 ans">
						<h5>{{trans('createExam.Ans')}}</h5>
						{!! Form::text('ans2',$getQue->ans2,['class'=>'validate valid']) !!}
					</div>
					<div class="input-field col s12 ans">
						<h5>{{trans('createExam.Ans')}}</h5>
						{!! Form::text('ans3',$getQue->ans3,['class'=>'validate valid']) !!}
					</div>
					<div class="input-field col s12 ans">
						<h5>{{trans('createExam.Ans')}}</h5>
						{!! Form::text('ans4',$getQue->ans4,['class'=>'validate valid']) !!}
					</div>
					<div class="input-field col s12">
						<h5>{{trans('createExam.Correct')}}</h5>
						{!! Form::text('correct',$getQue->correct,['class'=>'validate valid']) !!}
					</div>
					<div class="input-field col s12">
						<button class="btn waves-effect waves-light" type="submit">	 {{trans('editQue.Submit')}}
							<i class="material-icons right">send</i>
						</button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
@stop