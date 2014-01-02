<script type="text/javascript">
	$(document).ready(function() {
         $('div.mainUnit').css( "color", "white" );
         $('div.mainUnit').css( "background", "#42a2ce url(img/getitalthand.png) 0% 12% fixed no-repeat" );
         var page = 1;

			showcontent(page);

			$('div.left').click(function(){
				page--;
				showcontent(page);
			});
			$('div.right').click(function(){
				page++;
				showcontent(page);
			});
    }); 
 function showcontent(page){
 			$('div.content').html('<img height="50" width="50" src="http://bestoffice.vn/Themes/Admin/img/loading.gif"/>');
         	//alert(page);
         	if(page==1){
				$('div.left').hide();	
			}else{
				$('div.left').fadeIn();
			}
        	var tmlurl ='/da/hoatdongs/show/'+page;
	            //alert(tmlurl);
	            //var str_string = 'page='+page;    
	            //$('#commenthoatdong').val('');  
	            $.ajax({
	                    type: 'POST',
	                    contentType: "application/json; charset=utf-8",
	                    url: tmlurl,
	                    dataType: 'json',
	                    success: function(data){
	                    	$('div.content').html('');
	                    	if(data==''){
	                    		$('div.right').hide();
	                    		$('div.content').append('Không còn bài biết');
	                    	}else{
	                    		$('div.right').show();
	                        //alert('ok');
	                        //return data;
	                        
	                            //alert('Trùng tên rồi nhé');
	                            //alert('Success');
/*
                            $('<div class="comment-list styled clearfix" style="color:#000;border-bottom: 1px solid #ddd;"><ol><li class="comment"><div class="comment-body boxed"><div class="comment-arrow"></div><div class="comment-avatar"><div class="avatar"><img class="img-circle" src="/da/img/ava/'+data.anh+'" style="width:64px;"/></div></div><div class="comment-text"><div class="comment-author clearfix" style="margin-top: -18px;margin-left: -48px;font-size: 1em;">'+data.tenNhanVien+'<span style="font-size: 14px;color: #B4B4B4;"> · '+'mới đây'+'</span></div><div class="comment-entry" style="text-align: left;margin-left:-46px">'+noidung+'</div></div></div></li></ol></div>').hide().fadeIn().insertAfter( "div.showcomment h1" );
*/
							$.each(data,function(key,value1){
								 $.each(value1,function(key,value){
								 	//alert(value.mota);
								 	if(value.modified==null){
								 		$('div.content').append('<div class="row event"><div class="event-box"><div class="event_date"><span>'
									+value.created+		
									'</span></div>'
									+'<div class="post-header">'
										+'<a href="/da/hoatdongs/view/'+value.id+'">'+value.tenHoatDong+'</a>'
									+'</div>'
									+'<div class="event_noiDung"><div class="excerpt">'
									+value.mota+
									'</div>'
									+'<div class="clear">clear</div></div>'  
									+'<div class="event_bottom">'
									    +'<div class="event_comment">'
											+'<i class="fa fa-comments" style="margin-right: 5px;"></i>'  
											+'<span style="color: #333;font-size: 14px;">'+value.Comment+' bình luận</span>'
										+'</div>'
									+'</div>'
                                    <?php if($current_user['group_id'] == '1'): ?>
									+'<div class="event-edit">'
									+'<a href="/da/hoatdongs/edit/'+value.id+'"><i class="fa fa-pencil-square-o"> </i></a>'	
								+'</div>'
								+'<div class="event-delete">'
									+'<a href="/da/hoatdongs/delete/'+value.id+'" onclick="if(confirm("Bạn muốn xóa '+value.tenHoatDong+' ?")){return true;} return false;"><i class="fa fa-trash-o">   </i></a>'
								+'</div></div></div>'
                                <?php endif; ?>
									).hide().fadeIn();
								 	}else{
								 		$('div.content').append('<div class="row event"><div class="event-box"><div class="event_date"><span>'
									+value.created+		
									'</span></div>'
									+'<div class="post-header">'
										+'<a href="/da/hoatdongs/view/'+value.id+'">'+value.tenHoatDong+'</a>'
									+'</div>'
									+'<div class="event_noiDung"><div class="excerpt">'
										 +value.mota
										+'</div>'
									+'<div class="clear">clear</div></div>'  
									+'<div class="event_bottom">'
									    +'<div class="event_comment">'
											+'<i class="fa fa-comments" style="margin-right: 5px;"></i>'  
											+'<span style="color: #333;font-size: 14px;">'+value.Comment+' bình luận</span>           '
											+'<span  style="color: #333;font-size: 14px;">Được chỉnh sửa '+value.modified+'</span>'
										+'</div>'
									+'</div>'
                                    <?php if($current_user['group_id'] == '1'): ?>
									+'<div class="event-edit">'
									+'<a href="/da/hoatdongs/edit/'+value.id+'"><i class="fa fa-pencil-square-o"> </i></a>'	
								+'</div>'
								+'<div class="event-delete">'
									+'<a href="/da/hoatdongs/delete/'+value.id+'" onclick="if (confirm("B\u1ea1n mu\u1ed1n x\u00f3a ch\u1ee9c v\u1ee5:  Gi\u00e1m \u0111\u1ed1c?")) { return true; } return false;"><i class="fa fa-trash-o">  </i></a>'
								+'</div></div></div>'
                                <?php endif ?>
									).hide().fadeIn();
								 	}
								
								});
							});
}
	                   }
	                   }); 
			}
</script>
<style type="text/css">
	div.event-box {
		width: 600px;
		height: auto;
		float: left;
		background: white;
		margin-left: 115px;
		box-shadow: 0 7px 20px rgba(0, 0, 0, 0.52);
		min-height: 150px;
		margin-bottom: 50px;
		border-radius: 10px;
		position: relative;
	}

	div.event-box div.event_date {
		color: #71A08B;
		max-width: none;
		float: left;
		right: auto;
		font-family: 'BenchNine', sans-serif;
		text-transform: uppercase;
		font-size: 20px;
		width: 100%;
		height: 34px;
		padding-top: 5px;
	}

	div.event_date span {
		margin-top: 7px;
		margin-right: 12px;
		font-size: 17px;
	}

	div.post-header {
		padding: 0 35px 0 35px;
		font-size: 36px;
		font-weight: bold;
		color: #FFF;
		float: left;
		width: 100%;
		text-align: left;
		background: rgb(49, 118, 150);
		padding-top: 8px;
		padding-bottom: 8px;
	}

	div.post-header a {
		color: #fff;
	}

	div.post-header a:hover {
		color: #ddd;
	}

	div.event-box div.event_noiDung {
		float: left;
		text-align: center;
		color: #333;
		padding: 20px 10px 20px 10px;
		width: 560px;
		margin: 0 auto;
		margin-left: 20px;
		margin-right: 20px;
		border-left: 1px solid #ddd;
		border-right: 1px solid #ddd;
	}


	div.event_bottom {
		width: 100%;
		height: 30px;
		float:left;
		border-top: 2px solid #ddd;
		background: #F3F0F0;
		-webkit-border-bottom-right-radius: 10px;
		-webkit-border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		border-bottom-left-radius: 10px;
		color: rgb(40, 144, 192);
		position: relative;
	}

	div.event_comment {
		float: left;
		position: absolute;
		top: 5px;
		left: 21px;
		font-style: italic;
	}

	div.event_bottom i{
		float: left;
	}

	div.event-edit, div.event-delete {
		position: absolute;
		width: 20px;
		height: 20px;
		top: 5px;
		left: 540px;
	}

	div.event-delete {
		left: 570px;
		top: 3px;
	}

	a.button {
		background: rgb(39, 112, 146);
	}
	div.control{
		position: absolute;
		bottom: 0px;
		
		width: 300px;
		margin: 5px 0px 0px 250px;
	}
	div.control div{
		
		float: left;
		padding: 5px;
		width: 140px;
		background: #fff;
		color: rgb(39, 112, 146);
		font-size: 25px;
	}
	div.control div.right{
		position: absolute;
		right: 0px;
		bottom: 0px;
	}
	div.control div:hover{
		background:  #ddd;
		cursor: pointer;
	}
</style>






<div class="row title">
<?php if($current_user['group_id'] == '1'): ?>
	<div class="col-md-2" style="float:left; margin-left:100px;margin-top:50px;"><?php echo $this->Html->link(__('Thêm Mới'), array('action' => 'add'),array('class' => 'button')); ?></div>
    <?php endif; ?>
</div>

</br>
</br>
<div class="content"></div>
<div class="row event">
<div class="control">
<div class="left"><</div>
<div class="right">></div>
</div>
</div>
<!--
<?php foreach ($hoatdongs as $hoatdong): ?>
<div class="row event">
	<div class="event-box">
	
		<div class="event_date">
			<span>
				<?php echo h($hoatdong['Hoatdong']['modified']); ?>
			</span>
		</div>
		  <div class="post-header">
			<?php echo $this->Html->link(($hoatdong['Hoatdong']['tenHoatDong']),array('action' => 'view',$hoatdong['Hoatdong']['id'])); ?>
		</div>
		
		<div class="event_noiDung">
			<div class="excerpt">
			 <?php echo $hoatdong['Hoatdong']['mota']; ?>
			</div>
			<div class="clear">clear</div>
		</div>  

		<div class="event_bottom">
		    <div class="event_comment">
				<i class="fa fa-comments" style="margin-right: 5px;"></i>  
				<span style="color: #333;font-size: 14px;"><?php echo $hoatdong['Hoatdong']['Comment']; ?> bình luận</span>
			</div>
		</div>
        <?php if($current_user['group_id'] == '1'): ?>
		<div class="event-edit">
			<?php 
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')),
				    array('action' => 'edit', $hoatdong['Hoatdong']['id']),
				    array('escapeTitle' => false)
				);
			?>	
		</div>
		<div class="event-delete">
			<?php 
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')),
				    array('action' => 'delete', $hoatdong['Hoatdong']['id']),  array('escapeTitle' => false), __('Bạn muốn xóa hoạt động:  %s?', $hoatdong['Hoatdong']['tenHoatDong'])
				);
			?>	
		
	</div>
    
    <?php endif; ?>
</div>
<?php endforeach; ?>-->
</div>



