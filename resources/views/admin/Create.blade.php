@extends(app('users').'.Index')
@section('center')
{!! Html::style(app('css').'/createStyle.css?version=1.1.0') !!}
{!! Html::script(app('js').'/createJs.min.js?version=1.1.0') !!}
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
				<h4>{{trans('createExam.H4')}}</h4>
				@if($id==null)
						{!! Form::open(['url'=>'create/exam','method'=>'post']) !!}
							<div class="input-field col s12"> 
								<h5>{{trans('createExam.Name')}}</h5>
								{!! Form::text('name','',['class'=>'validate']) !!}
							</div>
							<div class="input-field col s12"> 
								<h5>{{trans('createExam.dateFrom')}}</h5>
								<input type="text" class="datepicker" name='dateFrom'>
							</div>
							<div class="input-field col s12"> 
								<h5>{{trans('createExam.dateTo')}}</h5>
								<input type="text" class="datepicker" name="dateTo">
							</div>
							<div class="input-field col s12"> 
								<h5>{{trans('createExam.timeFrom')}}</h5>
								<input type="text" class="timepicker" name="timeFrom">
							</div>
							<div class="input-field col s12"> 
								<h5>{{trans('createExam.timeTo')}}</h5>
								<input type="text" class="timepicker" name="timeTo">
							</div>
							<div class="input-field col s12">
								<h5>{{trans('createExam.Time')}}</h5>
								<input type="number" name="time">
							</div>
							<div class="input-field col s12">
								<button class="btn waves-effect waves-light" type="submit">	 {{trans('createExam.Submit')}}
									<i class="material-icons right">send</i>
								</button>
							</div>
						{!! Form::close() !!}
					@elseif($id!=null)
						{!! Form::open(['url'=>'create/exam/'.$id,'method'=>'post']) !!}
							<div class="input-field col s12">
								<h5>{{trans('createExam.Ques')}}</h5>
								{!! Form::text('ques','',['class'=>'validate']) !!}
							</div>
							@for($i=1;$i<=4;$i++)
								<div class="input-field col s12 ans">
									<h5>{{trans('createExam.Ans')}}</h5>
									{!! Form::text('ans'.$i,'',['class'=>'validate']) !!}
								</div>
							@endfor
							<div class="input-field col s12">
								<h5>{{trans('createExam.Correct')}}</h5>
								{!! Form::text('correct','',['class'=>'validate']) !!}
							</div>
							<div class="input-field col s12">
								<button class="btn waves-effect waves-light" type="submit">	 {{trans('createExam.Submit')}}
									<i class="material-icons right">send</i>
								</button>
							</div>
						{!! Form::close() !!}
				@endif
			</div>
		</div>
	</div>
</section>
@stop