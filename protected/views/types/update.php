<?php
//�������� "�������� ����"
//������������ ������ dashboard
$this->layout = 'dashboard'; ?>
<h2>�������� ����: <?php echo $model->t_name; ?></h2>
 
<div class="actionBar">
[<?php echo CHtml::link('���������� �������',array('admin')); ?>]
[<?php echo CHtml::link('������� ����',array('create')); ?>]
</div>
 
<?php echo $this->renderPartial('_form', array(
    'model'=>$model,
    'update'=>true,
)); ?>