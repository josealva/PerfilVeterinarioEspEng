<?php
//$this->layout='ajax';
echo $this->Html->css('style.css');

?>
<div id="main">
    <div class="users form">
        <?php echo $this->Form->create('Dueno', array('class'=>'form-horizontal')); ?>
        <fieldset id="addForm">
            <legend><?php echo __('Añadir Usuario') ?></legend>
            <div class="form-group">
            <?php
            echo $this->Form->input('username', array('label' => __('Nombre de Usuario') .': ', 'class'=>'form-control'));
            ?>
            </div>
            <div class="form-group">
                <?php
            echo $this->Form->input('nombre', array('label' => __('Nombre').': ', 'class'=>'form-control'));
            ?>
            </div>
            <div class="form-group">
                <?php
            echo $this->Form->input('correo', array('label' => __('Correo Electrónico').': ', 'class'=>'form-control'));
            ?>
            </div>
            <div class="form-group">
                <?php
            echo $this->Form->input('password', array('label' => __('Contraseña').': ', 'class'=>'form-control'));
            ?>
            </div>
            
            <button type="submit" class="btn btn-primary pull-right"><?php echo __('Crear Cuenta') ?></button>
        </fieldset>
<?php echo $this->Form->end(); ?>
    </div>
</div>