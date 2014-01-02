<div class="row title">
    <h2>Dự Án</h2>
    <?php if($current_user['group_id'] == '2'): ?>
    <div class="col-md-2"><?php echo $this->Html->link(__('Khởi Tạo Dự Án'), array('action' => 'add'),array('class' => 'button')); ?></div>
    <?php endif; ?>
</div>

<div class="row index">
    <table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
        <thead>
            <tr>
                <th>Tên Project</th>
                <th>Ngày bắt đầu</th>
                <th>Dự kiến kết thúc</th>
                <th>Ngày kết thúc</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($duans as $duan): ?>
        <tr>
            <td><?php echo $this->Html->link($duan['duan']['tenDuAn'],array('action'=>'view', $duan['duan']['id']));;?></td>
            <td><?php echo $duan['duan']['ngayBatDau'];?></td>
            <td><?php echo $duan['duan']['dkngayKetThuc'];?></td>
            <?php if($duan['duan']['ngayKetThuc']!=null): ?>
            <td><?php echo $duan['duan']['ngayKetThuc'];?></td>
            <?php else: ?>
                <td><strong>Đang chạy</strong></td>
            <?php endif; ?>
            <td>
            <?php 
                echo $this->Html->link(
                     $this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')),
                    array('action' => 'edit', $duan['duan']['id']),
                    array('escapeTitle' => false)
                );
            ?>
            <?php echo $this->Html->link(
                    $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')),
                    array('action' => 'delete', $duan['duan']['id']),  array('escapeTitle' => false),  __('Bạn có muốn xóa dự án "%s"?', $duan['duan']['tenDuAn'])
              ); ?>
            </td>         
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>