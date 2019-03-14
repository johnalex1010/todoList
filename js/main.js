 $("button").click(function(event){
	event.preventDefault();
  });
//Toggle Actitity
$('.app_actitvity').on('click','.app_title_item',function(){
	var t = $(this);
	var tp = t.next();
	var p = t.parent().siblings().find('.app_description_item');
	tp.slideToggle();
	p.slideUp();
});

//Toogle Form
$('.app_content').on('click','.app_btn_add',function(){
	$('.app_add_list').addClass('active_form');
});
$('.app_content').on('click','.remove',function(){
	$('.app_add_list').removeClass('active_form');
	console.log('.remove');
});