<h1>Edit post</h1>
<?php
echo $this->Form->create('Hoatdong', array('action'=>'edit'));
echo $this->Form->input('tenHoatDong');
echo $this->Html->script('ckeditor/ckeditor', array('required' => false, 'class' => 'ckeditor'));
    echo $this->Form->textarea('noiDung', array('class'=>'ckeditor'));  
echo $this->Form->input('id', array('type'=>'hidden'));
echo $this->Form->end('Save post');
?>