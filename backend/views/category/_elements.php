    <div class="row">
        <div class="span8"> <!-- main inputs -->

            <div class="form-horizontal">

                
    <?php echo $form->textFieldRow($model,'alias',array('maxlength'=>150)); ?>

    <?php echo $form->textFieldRow($model,'lang',array('maxlength'=>2)); ?>

    <?php echo $form->textFieldRow($model,'name',array('maxlength'=>250)); ?>

    <?php echo $form->textFieldRow($model,'image',array('maxlength'=>250)); ?>

    <?php echo $form->ckEditorRow($model, 'short_description', array('options'=>array('fullpage'=>'js:true', 'width'=>'640', 'resize_maxWidth'=>'640','resize_minWidth'=>'320'))); ?>

    <?php echo $form->ckEditorRow($model, 'description', array('options'=>array('fullpage'=>'js:true', 'width'=>'640', 'resize_maxWidth'=>'640','resize_minWidth'=>'320'))); ?>

    <?php echo $form->textFieldRow($model,'status'); ?>

            </div>
        </div>
        <!-- main inputs -->

        <div class="span4"> <!-- sub inputs -->
            

        </div>
        <!-- sub inputs -->
    </div>
