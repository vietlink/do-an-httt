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

$pluginDot = empty($plugin) ? null : $plugin . '.';
?>
<h2><?php echo __d('cake_dev', 'Missing Controller'); ?></h2>
<p class="error">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', '%s could not be found.', '<em>' . h($pluginDot . $class) . '</em>'); ?>
</p>
<p class="error">
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'Create the class %s below in file: %s', '<em>' . h($class) . '</em>', (empty($plugin) ? APP_DIR . DS : CakePlugin::path($plugin)) . 'Controller' . DS . h($class) . '.php'); ?>
</p>
<pre>
&lt;?php
class <?php echo h($class . ' extends ' . $plugin); ?>AppController {

}
</pre>
<p class="notice">
	<strong><?php echo __d('cake_dev', 'Notice'); ?>: </strong>
	<?php echo __d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_controller.ctp'); ?>
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
<h1 style="color: #997A42;">Đường dẫn không hợp lệ</h1>
</div>
<div class="image-error">
<?php echo $this->Html->image('cb1.png', array('alt' => '', 'class'=>'img', 'style'=>'margin-bottom: -4px;')); ?>
</div>
</div>
</div>
