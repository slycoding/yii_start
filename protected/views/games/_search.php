<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'g_id'); ?>
		<?php echo $form->textField($model,'g_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_rate'); ?>
		<?php echo $form->textField($model,'g_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_name_url'); ?>
		<?php echo $form->textField($model,'g_name_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_main_type'); ?>
		<?php echo $form->textField($model,'g_main_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_type'); ?>
		<?php echo $form->textField($model,'g_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_added'); ?>
		<?php echo $form->textField($model,'g_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_size'); ?>
		<?php echo $form->textField($model,'g_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_name'); ?>
		<?php echo $form->textField($model,'g_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_medium_pic'); ?>
		<?php echo $form->textField($model,'g_medium_pic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_small_pic'); ?>
		<?php echo $form->textField($model,'g_small_pic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_download_link'); ?>
		<?php echo $form->textField($model,'g_download_link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_shortdescr'); ?>
		<?php echo $form->textArea($model,'g_shortdescr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_fulldescr'); ?>
		<?php echo $form->textArea($model,'g_fulldescr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_publish_date'); ?>
		<?php echo $form->textField($model,'g_publish_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g_state'); ?>
		<?php echo $form->textField($model,'g_state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->