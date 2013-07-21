<?php
$this->breadcrumbs=array(
	'Types'=>array('index'),
	$model->t_id=>array('view','id'=>$model->t_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Types', 'url'=>array('index')),
	array('label'=>'Create Types', 'url'=>array('create')),
	array('label'=>'View Types', 'url'=>array('view', 'id'=>$model->t_id)),
	array('label'=>'Manage Types', 'url'=>array('admin')),
);
?>

<h1>Update Types <?php echo $model->t_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>