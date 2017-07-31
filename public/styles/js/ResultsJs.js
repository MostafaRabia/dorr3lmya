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
				url:'../../result/'+id,
				type:'get',
				data:{'result':'False'}
			});
		}else{
			$(this).attr('value',1);
			$.ajax({
				url:'../../result/'+id,
				type:'get',
				data:{'result':'True'}
			});
		}
	});
});