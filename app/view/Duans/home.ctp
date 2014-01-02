<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data2 = google.visualization.arrayToDataTable([
            ['Tháng', 'Doanh Thu (đvị: Triệu)'],
            ['Tháng Một',  1100],
            ['Tháng Hai',  1280],
            ['Tháng Ba',  1300],
            ['Tháng Bốn',  1400],
            ['Tháng Năm',  1580],
            ['Tháng Sáu',  1620],
            ['Tháng Bảy',  1300],
            ['Tháng Tám',  1580],
            ['Tháng Chín',  1800],
            ['Tháng Mười',  2830],
            ['Tháng Mười Một',  1300],
            ['Tháng Mười Hai',  2130]
        ]);

        var options2 = {
            width: '100%',
            height: 220,
            legend: 'none',
            axisTitlesPosition: "out",
            backgroundColor: {stroke:"#2ECC71", fill:"#fff"},
            colors: ['#E74C3C'],
            chartArea:{left:0, top:0, width:"100%", height:"100%"},
            hAxis:{textPosition:"none", gridlines:{color:"#E74C3C"}, baselineColor:"#E74C3C"},
            vAxis:{textPosition:"none", gridlines:{color:"#E74C3C"}, baselineColor:"#E74C3C"}
        };

        var chart2 = new google.visualization.ColumnChart(document.getElementById('columnchart'));
        chart2.draw(data2, options2);
    }

    	$(window).resize(function() {
		  drawChart();
		});
</script>

	<style type="text/css">
	.ribbon {
		margin-left: 10px;
		display: block; 
		position: relative;
		top: -35px;
		left: 0px;
	}

	.widget-container .widget-title {
		background: #2B313D;
		padding: 7px 20px 6px 33px;
	}

	.widget-container .inner {
		border-bottom: 2px solid #ddd;
		border-left: 2px solid #ddd;
		border-right: 2px solid #ddd;
		-webkit-border-bottom-right-radius: 8px;
		-webkit-border-bottom-left-radius: 8px;
		border-bottom-right-radius: 8px;
		border-bottom-left-radius: 8px;
	}

	div.ribbon {
		background: #41D1A3;
		height: 37px;
	}

	.ribbon span {
		padding-top: 4px;
	}
	</style>



		<!-- Sản Phẩm -->	
<!-- 		<div class="row title">
				<h2>Trang Chủ</h2>
		</div> -->
		<div class="row index" >
			<div class="col-md-6">
				<div class="widget-container boxed">
				    <h3 class="widget-title">Đạt Doanh Thu Cao</h3>
				    <div class="inner">
				       <div class="ribbon">
						    <span>
						        <em>Tháng</em>
						        <?php if(date('m')+1<=12): ?>
						        <strong><?php echo date('m')+1; ?></strong>
						    <?php else: ?>
						    	<strong>1</strong>
						    <?php endif; ?>
						    </span>
						</div>
						    
						<table class="table table-striped" style="margin-top: -42px;">
						  <thead>
						  	<tr>
						  		<th>STT</th>
						  		<th>Tên Dự Án</th>
						  	</tr>
						  </thead>
						  <tbody>
						  	<tr>
						  		<td>1</td>
						  		<td>Ải Mỹ nhân</td>
						  	</tr>
						  	<tr>
						  		<td>2</td>
						  		<td>Ninja Lego</td>
						  	</tr>
						  	<tr>
						  		<td>3</td>
						  		<td>Thổ dân phòng thủ</td>
						  	</tr>
						  	<tr>
						  		<td>4</td>
						  		<td>Ném lừu đạn</td>
						  	</tr>
						  	<tr>
						  		<td>5</td>
						  		<td>Trộm kim cương</td>
						  	</tr>
						  </tbody>
						</table>
				    </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="widget-container boxed">
				    <h3 class="widget-title">DeadLine Trong tháng</h3>
				    <div class="inner">
				        <div class="ribbon">
						    <span>
						        <em>Tháng</em>
						        <?php if(date('m')+1<=12): ?>
						        <strong><?php echo date('m')+1; ?></strong>
						    <?php else: ?>
						    	<strong>1</strong>
						    <?php endif; ?>
						    </span>
						</div>
						<table class="table table-striped" style="margin-top: -42px;">
						  <thead>
						  	<tr>
						  		<th>STT</th>
						  		<th>Tên Dự Án</th>
						  	</tr>
						  </thead>
						  <tbody>
						  <?php $l=0; ?>
						  <?php foreach ($duans as $i=>$value): ?>
						  	<tr>
						  		<td><?php echo ++$l; ?></td>
						  		<td><?php echo $this->Html->link($value,array('action'=>'view', $i));?></td>
						  	</tr>
						  <?php endforeach; ?>
						  </tbody>
						</table>
				    </div>
				</div>
			</div>		 	
		</div>

		<div class="row index">
			 <div class="widget-container boxed col-md-12" style="background:#F7F7F7">
				    <h3 class="widget-title">Doanh Thu</h3>
				    <div class="inner">
				         <div id="columnchart" style="width: 100%" class="columnchart"></div>
				    </div>
			</div>		 
		</div>