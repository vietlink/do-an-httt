
<?php
    echo $this->Form->create('Hoatdong', array('action' => 'add'));
    echo $this->Form->input('tenHoatDong');
    echo $this->Html->script('ckeditor/ckeditor', array('required' => false, 'class' => 'ckeditor'));
    echo $this->Form->textarea('noiDung', array('class'=>'ckeditor'));  
    echo $this->Form->end('Save Post');
?> 

