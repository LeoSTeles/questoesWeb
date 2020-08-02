$(function(){
	var curSlide = 0;
	var delay = 3;

	changeSlide();

	function changeSlide(){
		setInterval(function(){
			console.log('Slider Funcionando');

		},delay*1000)
	}
})