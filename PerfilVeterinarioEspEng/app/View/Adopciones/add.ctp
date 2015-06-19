<div id='main'>
    <div class="pets form">
        <?php
        echo $this->Form->create(null, array(
            'url' => array('controller' => 'adopciones', 'action' => 'add'),
            'enctype'=>"multipart/form-data"
        ));
        ?>
        <fieldset>
            <legend><?php echo __('Añadir Adopción'); ?></legend>

            <div class="form-group">
                <?php
                echo $this->Form->input('nombre_mascota', array('label' => _('Nombre: '), 'class' => 'form-control'));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                echo $this->Form->input('edad', array('label' => _('Edad: '), 'type' => 'number', 'class' => 'form-control'));
                ?><br><br>
                <p class="pull-right">En años</p>
            </div><div id="clear"></div>
            
            <div class="form-group">
                <?php
                echo $this->Form->input('tipo_mascota', array('label' => _('Tipo de animal: '), 'class' => 'form-control', 'type'=>'text'));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                echo $this->Form->input('raza', array('label' => _('Raza: '), 'class' => 'form-control', 'type'=>'text'));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                $des = array('0' => _('Si'), '1' => 'No');
                echo $this->Form->input('desparacitado', array('label' => _('Esta desparacitado? '), 'class' => 'form-control', 'options' => $des, 'default' => '0'));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                $vac = array('0' => _('Si'), '1' => 'No');
                echo $this->Form->input('vacunas_dia', array('label' => _('Tiene vacunas al dia? '), 'class' => 'form-control', 'options'=>$vac, 'default' => '0'));
                ?>
            </div><div id="clear"></div>
            <div class="form-group images-form ">
                <?php echo $this->Form->input('imagen', array('label'=>_('Foto: '), 'type' => 'file', 'class' => 'form-control')); ?>
            </div><div id="clear"></div>            
            <div class="form-group">
                <?php
                echo $this->Form->input('contacto', array('label' => _('Contacto: '), 'class' => 'form-control', 'type'=>'text'));
                ?><br><br>
                <p class="pull-right"># telefono o email</p>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                echo $this->Form->input('nota', array('label' => _('Nota: '), 'class' => 'form-control', 'rows'=>3));
                ?>
            </div><div id="clear"></div>
            
            <button type="submit" class="btn btn-primary pull-right"><?php echo _('Agregar Adopción');?></button>
        </fieldset>
<?php echo $this->Form->end(); ?>
    </div>

</div>