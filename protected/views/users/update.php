<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->u_id=>array('view','id'=>$model->u_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->u_id)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Update Users <?php echo $model->u_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>