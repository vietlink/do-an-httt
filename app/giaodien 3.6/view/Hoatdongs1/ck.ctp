<?php
echo $this->Form->create('Hoatdong', array('action' => 'add'));
    echo $this->Form->input('tenHoatDong');
    echo $this->Html->script('ckeditor/ckeditor', array('required' => false, 'class' => 'ckeditor'));
    echo $this->Form->textarea('noiDung', array('class'=>'ckeditor'));
    
    echo $this->Form->end('Save Post');
?> 

<h1>Add post</h1>
<?php 
echo $this->Form->create('Hoatdong', array('action'=>'add'));
echo $this->Form->input('tenHoatDong');
echo $this->Form->input('noiDung');
echo $this->Form->end('creat a post');
?>
