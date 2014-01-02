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
 * @package       app.View.Layouts.Email.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

    <br><b>Map Category</b><br>
    <?php function showcategory($data, $parent, $deth,$text){
     foreach ($data as $value) {
                if($value['Category']['parent_id']==$parent){
                    if($value['Category']['deth'] == $deth  ){
                        if($value['Category']['delete_flag']==1){
                            echo $text.$value['Category']['title'].'<br>';
                        }
                        $id = $value['Category']['id'];
                        unset($value);
                       showcategory($data, $id,$deth+1,$text.'--');
                   } elseif ($value['Category']['delete_flag']==1){
                       echo $text.$value['Category']['title'].'<br>';
                       unset($value);
                       continue;
                   }
                }
     }
     
    } ?>
    <?php foreach ($data as $post): ?>
    <?php if($post['Category']['parent_id']==10):?>
             <?php if($post['Category']['deth'] == 1): ?>
                <?php if ($post['Category']['delete_flag']==1): ?>
                    <?php echo $post['Category']['title'].'<br>'?>
                <?php endif; ?>
                <?php showcategory($data, $post['Category']['id'],2,'--'); ?>
                    <?php unset($post); ?>
             <?php elseif ($post['Category']['delete_flag']==1):{?>
                   <?php echo $post['Category']['title'].'<br>' ?>
             <?php unset($post); }?>
            <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; ?>