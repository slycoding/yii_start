<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'games-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'g_rate'); ?>
		<?php echo $form->textField($model,'g_rate'); ?>
		<?php echo $form->error($model,'g_rate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_name_url'); ?>
		<?php echo $form->textField($model,'g_name_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'g_name_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_main_type'); ?>
		<?php echo $form->textField($model,'g_main_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'g_main_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_type'); ?>
		<?php echo $form->textField($model,'g_type'); ?>
		<?php echo $form->error($model,'g_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_added'); ?>
		<?php echo $form->textField($model,'g_added'); ?>
		<?php echo $form->error($model,'g_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_size'); ?>
		<?php echo $form->textField($model,'g_size'); ?>
		<?php echo $form->error($model,'g_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_name'); ?>
		<?php echo $form->textField($model,'g_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'g_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_medium_pic'); ?>
		<?php echo $form->textField($model,'g_medium_pic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'g_medium_pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_small_pic'); ?>
		<?php echo $form->textField($model,'g_small_pic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'g_small_pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_download_link'); ?>
		<?php echo $form->textField($model,'g_download_link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'g_download_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_shortdescr'); ?>
		<?php echo $form->textArea($model,'g_shortdescr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'g_shortdescr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_fulldescr'); ?>
		<?php echo $form->textArea($model,'g_fulldescr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'g_fulldescr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_publish_date'); ?>
		<?php echo $form->textField($model,'g_publish_date'); ?>
		<?php echo $form->error($model,'g_publish_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g_state'); ?>
		<?php echo $form->textField($model,'g_state'); ?>
		<?php echo $form->error($model,'g_state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->