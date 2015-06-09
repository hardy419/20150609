

var War_Size = 100;
var change_Size = 50;
var t = browserType();

function browserType(){//判断浏览器类型方法
	 var t='';
     if($.browser.msie) {//IE
        return t='ie';
     }else if($.browser.opera) {//opera
        return t='opera';
     }else if($.browser.mozilla) {//火狐
        return t='mozilla';
     }else if($.browser.safari) {//Safari
        return t='safari';
     }else{ 
        return t='other';
	 } 
}

$(document).ready(function(){
	init_Warp_Size();
	
	$('#TB').click(function(){
		if(War_Size>=200)return false;
		if(t != 'mozilla'){
			War_Size = War_Size + change_Size;
			$('body').animate({zoom:War_Size+'%'});
			if(War_Size==150)
			{
				$('#cont').width('630px');
				$('.cont_left').width('630px');
			}else if(War_Size==200)
			{
				$('#cont').width('440px');
				$('.cont_left').width('440px');
			}
		}else{
			$('body').removeClass("TB"+War_Size);
			War_Size = War_Size + change_Size;
			$('body').addClass("TB"+War_Size);
			if(War_Size==150)
			{
				$('#cont').width('630px');
				$('.cont_left').width('630px');
			}else if(War_Size==200)
			{
				$('#cont').width('440px');
				$('.cont_left').width('440px');
			}
		}
	});
	$('#TS').click(function(){
		if(War_Size<=100)return false;
		if(t != 'mozilla'){
			War_Size = War_Size - change_Size;
			$('body').animate({zoom:War_Size+'%'});
			if(War_Size==150)
			{
				$('#cont').width('630px');
				$('.cont_left').width('630px');
			}else if(War_Size==100)
			{
				$('#cont').width('850px');
				$('.cont_left').width('850px');
			}
		}else{
			$('body').removeClass("TB"+War_Size);
			War_Size = War_Size - change_Size;
			$('body').addClass("TB"+War_Size);
			if(War_Size==150)
			{
				$('#cont').width('630px');
				$('.cont_left').width('630px');
			}else if(War_Size==100)
			{
				$('#cont').width('850px');
				$('.cont_left').width('850px');
			}
		}
	});
});

function init_Warp_Size(){
	if(t != 'mozilla'){
		$('body').animate({zoom:War_Size+'%'});
	}else{
		$('body').addClass("TB"+War_Size);
	}
}