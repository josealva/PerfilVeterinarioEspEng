<div id='main'>
<div class="pets form">
<?php echo $this->Form->create(null, array(
    'url' => array('controller' => 'RegistroDesparacitacion', 'action' => 'add/')
)); ?>
    <fieldset>
        <legend><?php echo __('Añadir Desparasitacion'); ?></legend>
        <?php echo $this->Form->input('RegistroDesparacitacion.fecha', array('label'=>__('Fecha') . ' (yyyy-mm-dd): '));
		echo $this->Form->input('RegistroDesparacitacion.iddesparasitante', array('options'=>$desparacitante, 'label'=>__('Desparasitante').': ',
                                  'empty'=>__('Categoría'),'selected'=>'Your Value')); 
        echo $this->Form->input('RegistroDesparacitacion.idmascota', array('label'=>false, 'type' => 'hidden', 'class' => 'form-control','hidden'=>'hidden', 'value'=>$idmascota));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Añadir')); ?>
</div>
   
</div>