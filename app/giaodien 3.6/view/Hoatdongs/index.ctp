<script type="text/javascript">
	$(document).ready(function() {
         $('div.mainUnit').css( "color", "white" );
         $('div.mainUnit').css( "background", "#42a2ce url(img/getitalthand.png) 0% 12% fixed no-repeat" );
    }); 

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

	div.event-box div.event_noiDung {
		float: left;
		text-align: center;
		color: #333;
		width: 100%;
		padding: 5px 20px 5px 20px;
	}

	div.event_noiDung div {
		border-left: 1px solid #ddd;
		border-right: 1px solid #ddd;
		padding: 20px 10px 20px 10px;
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
</style>






<div class="row title">
	<div class="col-md-2" style="float:left; margin-left:100px;margin-top:50px;"><?php echo $this->Html->link(__('Thêm Mới'), array('action' => 'add'),array('class' => 'button')); ?></div>
</div>

<div class="row index">
<!--  	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
		<tr>
				<th>id</th>
				<th>Tên Hoạt Động</th>
				<th>Ngày Khởi Tạo</th>
				<th>Thời Gian</th>
				<th class="actions">Hành Động</th>
		</tr>
		<tbody>
	<?php foreach ($hoatdongs as $hoatdong): ?>
	<tr>
		<td><?php echo h($hoatdong['Hoatdong']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__($hoatdong['Hoatdong']['tenHoatDong']), array('action' => 'view', $hoatdong['Hoatdong']['id'])); ?></td>
		<td><?php echo h($hoatdong['Hoatdong']['created']); ?>&nbsp;</td>
		<td><?php echo h($hoatdong['Hoatdong']['mota']); ?></td>
		<td><?php echo h($hoatdong['Hoatdong']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php 
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')),
				    array('action' => 'edit', $hoatdong['Hoatdong']['id']),
				    array('escapeTitle' => false)
				);
			?>
			<?php 
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')),
				    array('action' => 'delete', $hoatdong['Hoatdong']['id']),  array('escapeTitle' => false), __('Bạn muốn xóa hoạt động:  %s?', $hoatdong['Hoatdong']['tenHoatDong'])
				);
			?>		
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>  -->
</div>


<?php foreach ($hoatdongs as $hoatdong): ?>
<div class="row event">
	<div class="event-box">
		<div class="event_date">
			<span>
				<?php echo h($hoatdong['Hoatdong']['modified']); ?>
			</span>
		</div>
		  <div class="post-header">
			<?php echo h($hoatdong['Hoatdong']['tenHoatDong']); ?>
		</div>
		
		<div class="event_noiDung">
			<div class="excerpt">
			 <?php echo $hoatdong['Hoatdong']['noiDung']; ?>
			</div>
			<div class="clear">clear</div>
		</div>  

		<div class="event_bottom">
		    <div class="event_comment">
				<i class="fa fa-comments" style="margin-right: 5px;"></i>  
				<span style="color: #333;font-size: 14px;">0 bình luận</span>
			</div>
		</div>
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
	</div>
</div>
<?php endforeach; ?>





