<div id='main'>
<div class="pets form">
<?php echo $this->Form->create(null, array(
    'url' => array('controller' => 'duenos', 'action' => 'add_pet')
)); ?>
    <fieldset>
        <legend><?php echo __('Añadir Mascota'); ?></legend>
        <?php echo $this->Form->input('Mascota.nombre', array('label'=>__('Nombre').': '));
        echo $this->Form->input('Mascota.edad', array('label'=>__('Edad').': ', 'type'=>'text'));
        echo $this->Form->input('Mascota.idusuario', array('label'=>false,'hidden'=>'hidden', 'value'=>$user_id));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
</div>
   
</div>