$(document).ready(function(){
	var checkbox = $('input[type="checkbox"]');
	checkbox.each(function(){
		if ($(this).attr('value')==1){
			$(this).attr('checked',true);
		}
	});
	checkbox.on('change',function(){
		var id = $(this).attr('id');
		if ($(this).attr('value')==1){
			$(this).attr('value',0);
			$.ajax({
				url:'../../stop/'+id,
				type:'get',
				data:{'stop':'Stop'}
			});
		}else{
			$(this).attr('value',1);
			$.ajax({
				url:'../../stop/'+id,
				type:'get',
				data:{'stop':'Start'}
			});
		}
	});
});