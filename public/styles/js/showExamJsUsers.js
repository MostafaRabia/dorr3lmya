var href;
$(document).ready(function(){
	if (Cookies.get('time')){
		$('.asideLeft h4 span span').html(Cookies.get('time'));
	}
	href = $('form').attr('action');
	var Timer = setInterval(function(){
		var presentTime = $('.asideLeft span span').html();
		var timeArray = presentTime.split(/[:]+/);
		var m = timeArray[0];
		var s = checkSecond((timeArray[1] - 1));
		if (s==59){
			m--;
		}
		$('.asideLeft h4 span span').html(m+':'+s);
		if (m==0&&s==0){
			clearInterval(Timer);
			/*var data = {
				'_token':$('input[type="hidden"]').attr('value'),
				'ban':true
			};
			$.ajax({
				url:href,
				type:'POST',
				data:data
			});*/
			$('form').submit();
		}
	},1000);
});
function checkSecond(sec) {
	if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
	if (sec < 0) {sec = "59"};
	return sec;
}
function myUnloadHandler(){
	var hour = new Date(new Date().getTime() + 60 * 60 * 1000);
	Cookies.remove('time',{path:''});
	Cookies.set('time',$('.asideLeft h4 span span').html(),{expires:hour,path:''});
}
if ("onpagehide" in window) {
    window.addEventListener("pagehide", myUnloadHandler, false);
} else {
    window.addEventListener("unload", myUnloadHandler, false);
}