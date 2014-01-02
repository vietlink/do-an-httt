<script type="text/javascript">
	$(document).ready(function() {
         $('div.mainUnit').css( "color", "white" );
         $('div.mainUnit').css( "background", "#42a2ce url(/da/img/getitalthand.png) 0% 12% fixed no-repeat" );

	    $('#commenthoatdong').keypress(function(event){
	        var keycode = (event.keyCode ? event.keyCode:event.which);
	        //alert ('Bạn vừa nhấn enter');
	        var id = $('#idbaiviet').val();
	        if (keycode ==  '13') {
	            var noidung = $('#commenthoatdong').val();

	            var tmlurl ='/da/hoatdongs/addcomment/'+noidung+'/'+id;
	            //alert(tmlurl);
	            var str_string = 'noidung='+noidung+'&idbv='+id;    
	            $('#commenthoatdong').val('');  
	            $.ajax({
	                    type: 'POST',
	                    contentType: "application/json; charset=utf-8",
	                    url: tmlurl,
	                    dataType: 'json',
	                    success: function(data){
	                        //alert(data);
	                        //return data;
	                        
	                            //alert('Trùng tên rồi nhé');
	                            //alert('Success');
	                            if(data!=5){
                            $('<div class="comment-list styled clearfix" style="color:#000;border-bottom: 1px solid #ddd;"><ol><li class="comment"><div class="comment-body boxed"><div class="comment-arrow"></div><div class="comment-avatar"><div class="avatar"><img class="img-circle" src="/da/img/ava/'+data.anh+'" style="width:64px;"/></div></div><div class="comment-text"><div class="comment-author clearfix" style="margin-top: -18px;margin-left: -48px;font-size: 1em;">'+data.tenNhanVien+'<span style="font-size: 14px;color: #B4B4B4;"> · '+'mới đây'+'</span></div><div class="comment-entry" style="text-align: left;margin-left:-46px">'+noidung+'</div></div></div></li></ol></div>').hide().fadeIn().insertAfter( "div.showcomment h1" );
                        }else{
                        	alert('Bạn không có quyền sử dụng tính năng này');
                        }
	                   }
	                   }); 
	        }
	    });

    }); 
</script>


<style type="text/css">
	div.event-box, div.showcomment {
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
		top: 5px;
		left: 21px;
		font-style: italic;
		width: 82%;
		padding: 5px 13px 0 15px;
	}

	div.event_bottom i{
		float: left;
	}

	div.event-edit, div.event-delete {
		position: absolute;
		width: 20px;
		height: 20px;
		top: 5px;
	}

	div.event-delete {
		top: 3px;
	}

	a.button {
		background: rgb(39, 112, 146);
	}
</style>






<style type="text/css">
	div.event-box, div.showcomment {
		width: 80%;
		margin-top: 30px;
		margin-left: 10%;

	}

	div.event-delete {
		right: 10px;
	}

	div.event-edit {
		right: 37px;
	}
	div.comment-picture {
		float: left;
		padding: 3px 0px 0 1px;
		width: 18%;
		height: 78px;
		background: rgb(37, 137, 184);
		border-bottom-left-radius: 8px;
	}

	div.showcomment {
		padding-left: 2%;
		padding-right: 2%;
		padding-bottom: 15px;
	}
</style>


<div class="row event">
	<div class="event-box">
		<div class="event_date">
			<span>
				<?php echo h($hoatdong['Hoatdong']['modified']); ?>
			</span>
		</div>
		  <div class="post-header" style="text-align:center;">
			<?php echo h($hoatdong['Hoatdong']['tenHoatDong']); ?>
		</div>
		
		<div class="event_noiDung" style="width: 96%;margin-left: 2%;">
			<div class="excerpt">
				<?php echo $hoatdong['Hoatdong']['noiDung']; ?>
			</div>
			<div class="clear">clear</div>
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


		<div class="event_bottom" style="height:80px;">
			<div class="comment-picture">
			<?php if($user_id!=0): ?>
				<?php echo $this->Html->image('ava/'.$user_inf['anh'], array('alt' => '', 'class'=>'img-circle', 'style'=>'width: 72px;')); ?>
			<?php else: ?>
				<?php echo $this->Html->image('ava/membell.png', array('alt' => '', 'class'=>'img-circle', 'style'=>'width: 72px;')); ?>
			<?php endif; ?>
			</div>
		    <div class="event_comment">
				<form>
					<input type="number" id="idbaiviet" hidden=""  value="<?php echo $hoatdong['Hoatdong']['id']; ?>">
					<textarea  name="noidung" id="commenthoatdong" cols="10" rows="1" style="height: 66px;font-size: 40px;"></textarea>
				</form>
			</div>
		</div>

	</div>
</div>




<!-- Ô comment -->



<!-- Show comment -->
 
<div class="showcomment">
<h1 style="margin-top: 3px;color: rgb(238, 108, 108);border-bottom: 1px dotted rgb(238, 108, 108);">Comments</h1>
	<?php foreach($hoatdong['Comment'] as $comment): ?>
		<div class="comment-list styled clearfix" style="color:#000;border-bottom: 1px solid #ddd;">
		    <ol>
		        <li class="comment">
		            <div class="comment-body boxed">
		                <div class="comment-arrow"></div>
		                <div class="comment-avatar">
		                    <div class="avatar">
		                        <?php echo $this->Html->image('ava/'.$comment['nhanvien']['anh'], array('alt' => '', 'class'=>'img-circle', 'style'=>'width:64px;')); ?>
		                    </div>
		                </div>
		                <div class="comment-text">
		                    <div class="comment-author clearfix" style="margin-top: -18px;margin-left: -48px;font-size: 1em;">
		                        <a href="#" class="link-author"><?php echo $comment['nhanvien']['tenNhanVien']; ?></a>
		                        <span style="font-size: 14px;color: #B4B4B4;"> · <?php echo $comment['created']; ?></span>
		                    </div>
		                    <div class="comment-entry" style="text-align: left;margin-left:-46px">
		                        <?php echo $comment['noidung']; ?>
		                    </div>
		                </div>
		                <div class="clear"></div>
		            </div>
		        </li>
		    </ol>
		</div>
	<?php endforeach; ?> 
</div>



<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hoatdong'), array('action' => 'edit', $hoatdong['Hoatdong']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hoatdong'), array('action' => 'delete', $hoatdong['Hoatdong']['id']), null, __('Are you sure you want to delete # %s?', $hoatdong['Hoatdong']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hoatdongs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hoatdong'), array('action' => 'add')); ?> </li>
	</ul>
</div>
 -->

