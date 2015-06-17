<div id='main'>
    <div class="pets form">
        <?php echo $this->Form->create(null, array(
            'url' => array('controller' => 'registrovacunas', 'action' => 'add/')
        )); ?>
            <fieldset>
                <legend><?php echo __('Añadir Vacunación'); ?></legend>
                <div class="form-group">
                    <?php echo $this->Form->input('Registrovacuna.fechavacuna', array('label'=>__('Fecha') . ' (yyyy-mm-dd): ','class' => 'form-control form-input-right')); ?>
                </div>
                <div id="clear"></div>
                <div class="form-group">
                    <?php echo $this->Form->input('Registrovacuna.idvacuna', array('options'=>$vaccines, 'label'=>__('Vacuna') . ': ', 'class' => 'form-control form-input-right', 'empty'=>__('Categoría'),'selected'=>'Your Value'));?>
                </div>
                <div id="clear"></div>      
                <div class="form-group">
                    <?php echo $this->Form->input('Registrovacuna.pesoanimal', array('label'=>__('Peso') . ' (kg): ', 'type'=>'text','class' => 'form-control form-input-right'));?>
                </div>
                <div id="clear"></div>
                <div class="form-group">
                    <?php echo $this->Form->input('Registrovacuna.edadanimal', array('label'=>__('Edad') . ' ' .'(' . __('Años').')' . ': ', 'type'=>'text','class' => 'form-control form-input-right'));?>
                </div>
                <div id="clear"></div>
                <div class="form-group">
                    <?php echo $this->Form->input('Registrovacuna.longitudanimal', array('label'=>__('Longitud') . ' (cm): ', 'type'=>'text','class' => 'form-control form-input-right'));?>
                </div>
                <div id="clear"></div>
                <div class="form-group">
                    <?php echo $this->Form->input('Registrovacuna.idmascota', array('label'=>false, 'type' => 'hidden', 'class' => 'form-control','hidden'=>'hidden', 'value'=>$idmascota));?>
                </div>
                <div id="clear"></div>   
                 <button type="submit" class="btn btn-primary pull-right"><?php echo __('Agregar') ?></button>
            </fieldset>
        <?php echo $this->Form->end(); ?>
        <!--<php echo $this->Form->end(__('Añadir')); ?>-->
    </div>  
</div>