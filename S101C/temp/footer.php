	</div><!--content--></div><!--warpper-->
	<script>
      // For hightlighting
      window.ifMouseDown=0;
      window.highlightindices=[];
      jQuery(document).ready(function(){
        jQuery('body').mousedown(function(){
          window.ifMouseDown=1;
        });
        jQuery('body').mouseup(function(){
          window.ifMouseDown=0;
          window.highlightindices=[];
        });
      });

             jQuery(function(){
                 var len=jQuery(".cont_content").length;
                 if(len>0)
                 _get();
             });
             function _get(){
   				var url='../../config/highlights.php';
                 $.post(url,{'page':'<?php echo $con_id;?>','user':<?php echo $_COOKIE['etext_cookie'];?>,'subject':17,'action':'select'},function(data){
                             var count=jQuery(".cont_content").length;
							 
                             var item=0;
                             for(var j=0;j<count;j++){
                            	 var content=jQuery(".cont_content").eq(j).html();
								 var tagst,tagend,tag,endtag,l=0;
                                 while(l<content.length){
                                   if(content[l]=='<'){
                                       tagst=l;
                                       tagend=content.indexOf('>',tagst+1);
                                       l=tagend+1;
                                       tag=content.substr(tagst+1,tagend-tagst-1);
                                       sttag=content.substr(tagst,tagend-tagst+1);
                                       endtag='</'+tag+'>';
                                       l+=1;
                                       while(content[l]!='<'){
                                           content=content.substr(0,l)+endtag+'|'+sttag+content.substr(l,content.length-l+1);
                                           l+=endtag.length+sttag.length+1;
                                           l+=1;
                                       }
                                       l=content.indexOf('>',l+1)+1;
                                       content=content.substr(0,l)+'|'+content.substr(l,content.length-l+1);
                                       l++;
                                   }
                                   else{
                                     l+=1;
                                     content=content.substr(0,l)+'|'+content.substr(l,content.length-l+1);
                                     l++;
                                   }
                                 }
    		                     replace=content.replace(/。/g,'.');
    		                     contents=content.split("|");
    		                     var len=contents.length;
    		                     var html='';
    		                     if(len>1){
    	                             for(var i=0;i<(len-1);i++){
    	 		                        var text=trim(contents[i]);
                                        if(i==(len-2)){
    	 		                        html+='<label onmousedown="action_over(this,'+item+',1)" onmouseover="action_over(this,'+item+',0)" data-action="insert">'+text+'</label>';
                                        }else{
                                        html+='<label onmousedown="action_over(this,'+item+',1)" onmouseover="action_over(this,'+item+',0)" data-action="insert">'+text+'</label>';
                                        }
                                        item+=1;
    	 		                     }
    		                     }else{
    		                    	 html+='<label onmousedown="action_over(this,'+item+',1)" onmouseover="action_over(this,'+item+',0)" data-action="insert">'+content+'</label>';
    			                 }
    			               
                                 jQuery(".cont_content").eq(j).html(html);
                             } 
                             
                             data=eval("("+data+")");
                             if(data.length>0){
                                 $.each(data,function(k,val){
                                         var index=val['iid'];
                                         var obj=jQuery(".cont_content label").eq(index);
                                         var text=obj.html();
                                         jQuery(obj).data('action','delete');
                                         jQuery(obj).attr('data-action','delete');
                                         var html='<span class="highlight">'+text+'</span>'
                                         obj.html(html);
                                 });
                             }
                 });
       		 }

             // onmouseover event
             function action_over(obj,index,down){
               if(1===down){
                 window.highlightindices.push(index);
                 action(obj,index);
                 return;
               }
               var ao_i,found;
               for(ao_i=0;ao_i<window.highlightindices.length;ao_i++){
                 if(window.highlightindices[ao_i] === index){
                   found=true;
                   break;
                 }
               }
               if(1 === window.ifMouseDown && !found){
                 window.highlightindices.push(index);
                 action(obj,index);
               }
             }

       		 function action(obj,index){
                var action=jQuery(obj).data('action');
            	var txt=jQuery(obj).html();
            	
               // var index=jQuery(obj).index();
                if(action=='insert'){
                	jQuery(obj).data('action','delete');
                	jQuery(obj).attr('data-action','delete');
                	//$('.cont_content').highlight(txt);
                	var label=$('.cont_content label').eq(index);
                	var len=label.find('highlight').length;
                	if(len==0){
	               	var content=label.html();
	               	label.html('<span class="highlight">'+content+'</span>');
                	_post('insert',index);
                	}
                 }else{
                	 jQuery(obj).data('action','insert');
                	 jQuery(obj).attr('data-action','insert');
                 	 _post('delete',index);
                	 var label=$('.cont_content label').eq(index);
                	 var content=label.find('span.highlight').html();
                	 label.html(content);
                 }
           	 }
           	 function _post(action,index){
           		var url='../../config/highlights.php';
           		$.post(url,{'page':'<?php echo $con_id;?>','user':<?php echo $_COOKIE['etext_cookie'];?>,'subject':17,'action':action,'index':index},function(data){

               	});
             }
             function trim(str){
                     return str.replace(/(^\s*)|(\s*$)/g,"");
             }
		</script></body></html>