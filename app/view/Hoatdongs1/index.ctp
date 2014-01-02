<h1>View all news</h1>
<?php echo $this->Html->link('Add new post', array('action'=>'add'));?>
<!--//echo $this->Form->create('Search');
//    echo $this->Form->input('tenHoatDong', array('label'=>'tên nội dung', 'style'=>'width:200px; height:30px; '));
//    echo $this->Form->end('Search');
////    if(!empty($hoatdongs)){
////        foreach($hoatdongs as $hoatdong){
////            echo "<div>";
////            echo "tenHoatDong: ".$hoatdong['Hoatdong']['tenHoatDong'].'</br>';
////            echo "</div>";
////            echo "</br>";
////        }
////    }
//  -->


    

<table>
    <tr>
        <td>Tiêu đề</td>
        <td>Nội dung</td>
        <td>Hành động</td>
    </tr>
    <?php foreach ($hoatdongs as $hoatdong): ?>
    <tr>
        <td><?php echo $this->Html->link($hoatdong['Hoatdong']['tenHoatDong'],
                array('action'=>'view', $hoatdong['Hoatdong']['id']));;?></td>
        <td><?php echo $hoatdong['Hoatdong']['noiDung'];?></td>
        <td><?php echo $this->Html->link('Edit', array('action'=>'edit', $hoatdong['Hoatdong']['id']));?></td>
        <td><?php echo $this->Html->link('Delete', array('action'=>'delete',$hoatdong['Hoatdong']['id']), NULL, 'Are you sure want to delete this post'); ?></td>         
    </tr>
    <?php endforeach;?>
</table>
<center>
<?php echo $this->paginator->prev('Previous'); ?><big>&nbsp;&nbsp;&nbsp;</b>|<b>&nbsp;&nbsp;
<?php echo $this->paginator->numbers(array('modulus'=>PHP_INT_MAX,'separator'=>'&nbsp;&nbsp;&nbsp;</b>|<b>&nbsp;&nbsp;&nbsp;')); ?>&nbsp;&nbsp;&nbsp;</b>|<b>&nbsp;&nbsp;</big>
<?php echo $this->paginator->next('Next'); ?>
</center>
