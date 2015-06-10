	
	$.ajaxSetup({ 
		async : false 
	});
	
	var lastPage = 61;
	
	function getQueryString(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]); return null;
    }
	
	function getPages(){
		var str = window.location.toString();
		var i = str.indexOf('page'); //获取page 的位置
		var pages = str.substring(i + 4,i + 6); //获取到页数
		if(isNaN(parseInt(pages))){
			pages = 1;  //首页的时候没有page, 改成编号1
		};
		document.getElementById("currentPage").value = parseInt(pages);
	}
	
	function init(){
		getPages();
	}
	
	function urlPage(){
		var obj = document.getElementById('setPage').value;
		var n = obj;
		if(n.length==1){
			n = 0+n;
		}
		if( n <= this.lastPage && n >= 1){
			if(parseInt(n) == 1){
				window.location.href="./index.php";
			}else{
				window.location.href="./page"+n+".php";
			}
		}else{
			alert('該頁不存在');
		}
	}
	
	function urlPage_do(){
		setTimeout("urlPage()",1000);
	}
	
	function urlPage2(type){
		
		var get_position = '';//当前页处在当前题目的那一页 first last continue
		var get_count = 0;//当前题目总页数
		
		var num = document.getElementById('currentPage').value;
		var n = num;
		page_action();

		get_position = $(".get_position").val();
		get_count = $(".get_count").val();
		if( n <= this.lastPage && n >= 1){
			switch(type){
				case 'prev':
					if(get_position == 'first'){
						if(parseInt(n) > 1){
							n = parseInt(n) - parseInt(1);
						}
					}else{
						n = parseInt(n);
					}
					break;
				case 'next':
					if(parseInt(n) < lastPage){
						if(get_position == 'last'){
								n = parseInt(n) + parseInt(1);
						}else if(get_position == 'first' && get_count >1 || get_position == 'continue' && get_count >1 ){
							if(String(n).length==1){
								n = 0+String(n);
							}
							get_count--;
							if(String(get_count).length==1){
								get_count = 0+String(get_count);
							}
							n = String(n)+'_'+get_count;
						}else{
							n = parseInt(n) + parseInt(1);
						}
					}
					break;
				case 'home':
					n = 1;
					break;
				case 'last':
					n = this.lastPage;
					break;
			}
			if(String(n).length==1){
				n = 0+String(n);
			}
			if(n != 1){
				window.location.href="./page"+n+".php";
			}else{
				window.location.href="./index.php";
			}
		}else{
			alert('页面加载中，请稍后……');
		}
	}
	
	//获取当前URL文件名
	function get_current_page(){
		var page_name = '';
		var current_url = window.location.pathname;
		var arr = new Array();
		arr = current_url.split("/");
		$(arr).each(function(){
			if(this.indexOf('.php') != -1){
				page_name = this;
			}
		});
		return page_name;
	}
	
	
	function page_action(){ 
		var current_page = get_current_page();
		if(current_page != 'index.php'){
			var pattern = /page(\d{2})/; 		
			var number = pattern.exec(current_page); 
			
			$.post("./model/get_file.php",{num:number[1],page:current_page},function(data){
				var dataObj = eval("("+data+")");
				$(".get_position").val(dataObj.position);
				$(".get_count").val(dataObj.count_page);
			});
		}else{
			$(".get_position").val('last');
			$(".get_count").val('1');
		}
	}	
	
	window.onload = init;
	
	$(function(){
		
		//单选按钮页面
		$('.checked_box input:checked').siblings('.round').addClass('round_ck');
		$('.checked_box input').change(function(){
			$('.checked_box input').siblings('.round').removeClass('round_ck');
			$('.checked_box input:checked').siblings('.round').addClass('round_ck');
			})
		
		
		
		// f_ans_btn1 这个是page41 里面的，继续按钮，因为没有返回，所以情况有点特殊
		})