<h2><?php echo $hoatdongs['Hoatdong']['tenHoatDong'];?></h2>
<p><?php echo $hoatdongs['Hoatdong']['noiDung'];?></p>
<p><small>create on:<?php echo $hoatdongs['Hoatdong']['ngay'];?></small></p>
</br>
<p><?php echo $this->Html->link('Back', array('action'=>'index')); ?> &nbsp;&nbsp;&nbsp;
<?php echo $this->Html->link('Edit', array('action'=>'edit', $hoatdongs['Hoatdong']['id']));?> &nbsp;&nbsp;&nbsp;
<?php echo $this->Html->link('Delete', array('action'=>'delete',), $hoatdongs['Hoatdong']['id']); ?></p>