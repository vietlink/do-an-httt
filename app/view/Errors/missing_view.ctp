<!--
<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<h2><?php echo __d('cake_dev', 'Missing View'); ?></h2>
<p class="error">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'The view for %1$s%2$s was not found.', '<em>' . h(Inflector::camelize($this->request->controller)) . 'Controller::</em>', '<em>' . h($this->request->action) . '()</em>'); ?>
</p>
<p class="error">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'Confirm you have created the file: %s', h($file)); ?>
</p>
<p class="notice">
	<strong><?php echo __d('cake_dev', 'Notice'); ?>: </strong>
	<?php echo __d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_view.ctp'); ?>
</p>

<?php echo $this->element('exception_stack_trace'); ?>
-->
<script type="text/javascript">
	$(document).ready(function() {
         $('div.mainUnit').css("background", "#E74C3C");
    }); 
</script>
<?php
		echo $this->Html->css(array('style-error'));
?>
<div class="row error">
<div class="notification">
<div class="nof-error">
<h1 style="color: #997A42;">Trang không tồn tại</h1>
</div>
<div class="image-error">
<?php echo $this->Html->image('cb1.png', array('alt' => '', 'class'=>'img', 'style'=>'margin-bottom: -4px;')); ?>
</div>
</div>
</div>