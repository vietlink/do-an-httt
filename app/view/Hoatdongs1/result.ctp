 <?php 
    $this->Paginator->options(array('url' => $this->passedArgs));
?>
<?php echo $this->Form->create('Hoatdong',array('action'=>'search'));?>
    <fieldset>
         <legend><?php __('Hoatdong search');?></legend>
    <?php
        echo $this->Form->input('tenHoatDong');
        //echo $this->Form->input('description');
        echo $this->Form->submit('Search');
    ?>
    </fieldset>
<?php echo $this->Form->end();?>

<?php
if(!empty($hoatdongs)){
    echo "<table>";
    echo "<tr>";
    echo "<th>".$this->Paginator->sort("Id","id");
    echo "<th>".$this->Paginator->sort("TenHoatDong","tenHoatDong");
   // echo "<th>".$this->Paginator->sort("Description","description");
    echo "</tr>";
    
    foreach($hoatdongs as $item){
        echo "<tr>";
        echo "<td>".$item['Hoatdong']['id']."</td>";
        echo "<td>".$item['Hoatdong']['tenHoatDong']."</td>";
       // echo "<td>".$item['Book']['description']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    //---- Paging 
    echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Shows the next and previous links
    
    echo " | ".$this->Paginator->numbers()." | "; //Shows the page numbers
    
    echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Shows the next and previous links
    
    echo " Page ".$this->Paginator->counter(); // prints X of Y, where X is current page and Y is number of pages
}
?> 