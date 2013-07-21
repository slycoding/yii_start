<?php
$this->breadcrumbs=array(
	'Types'=>array('index'),
	$model->t_id,
);

$this->menu=array(
	array('label'=>'List Types', 'url'=>array('index')),
	array('label'=>'Create Types', 'url'=>array('create')),
	array('label'=>'Update Types', 'url'=>array('update', 'id'=>$model->t_id)),
	array('label'=>'Delete Types', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->t_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Types', 'url'=>array('admin')),
);
?>

<h1>View Types #<?php echo $model->t_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		't_id',
		't_name',
	),
)); ?>
