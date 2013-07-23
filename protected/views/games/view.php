<?php
$this->breadcrumbs=array(
	'Games'=>array('index'),
	$model->g_id,
);

$this->menu=array(
	array('label'=>'List Games', 'url'=>array('index')),
	array('label'=>'Create Games', 'url'=>array('create')),
	array('label'=>'Update Games', 'url'=>array('update', 'id'=>$model->g_id)),
	array('label'=>'Delete Games', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->g_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Games', 'url'=>array('admin')),
);
?>

<h1>View Games #<?php echo $model->g_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'g_id',
		'g_rate',
		'g_name_url',
		'g_main_type',
		'g_type',
		'g_added',
		'g_size',
		'g_name',
		'g_medium_pic',
		'g_small_pic',
		'g_download_link',
		'g_shortdescr',
		'g_fulldescr',
		'g_publish_date',
		'g_state',
	),
)); ?>
