
<div id='main'>
    <div class="pets form">
        <?php
        echo $this->Form->create();
        ?>
        <fieldset>
            <legend><?php echo __('Editar Adopción'); ?></legend>
            <?php
                echo $this->Form->input('Adopcione.id', array('type' => 'hidden', 'value'=>$ado['Adopcione']['id']));
                ?>
            <div class="form-group">
                <?php
                echo $this->Form->input('Adopcione.nombre_mascota', array('label' => _('Nombre: '), 'class' => 'form-control', 'value'=>$ado['Adopcione']['nombre_mascota']));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                echo $this->Form->input('Adopcione.edad', array('label' => _('Edad: '), 'type' => 'number', 'class' => 'form-control', 'value'=>$ado['Adopcione']['edad']));
                ?><br><br>
                <p class="pull-right">En años</p>
            </div><div id="clear"></div>
            
            <div class="form-group">
                <?php
                echo $this->Form->input('Adopcione.tipo_mascota', array('label' => _('Tipo de animal: '), 'class' => 'form-control', 'type'=>'text', 'value'=>$ado['Adopcione']['tipo_mascota']));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                echo $this->Form->input('Adopcione.raza', array('label' => _('Raza: '), 'class' => 'form-control', 'type'=>'text', 'value'=>$ado['Adopcione']['raza']));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                $des = array('0' => 'Si', '1' => 'No');
                echo $this->Form->input('Adopcione.desparacitado', array('label' => _('Esta desparacitado? '), 'class' => 'form-control', 'options' => $des, 'default' => '0', 'value'=>$ado['Adopcione']['desparacitado']));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                $vac = array('0' => 'Si', '1' => 'No');
                echo $this->Form->input('Adopcione.vacunas_dia', array('label' => _('Tiene vacunas al dia? '), 'class' => 'form-control', 'options'=>$vac, 'default' => '0', 'value'=>$ado['Adopcione']['vacunas_dia']));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                echo $this->Form->input('Adopcione.contacto', array('label' => _('Contacto: '), 'class' => 'form-control', 'type'=>'text', 'value'=>$ado['Adopcione']['contacto']));
                ?><br><br>
                <p class="pull-right"># telefono o email</p>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                echo $this->Form->input('Adopcione.nota', array('label' => _('Nota: '), 'class' => 'form-control', 'rows'=>3, 'value'=>$ado['Adopcione']['nota']));
                ?>
            </div><div id="clear"></div>
            <div class="form-group">
                <?php
                $vac = array('0' => 'Si', '1' => 'No');
                echo $this->Form->input('Adopcione.aprobado', array('label' => _('Aprobar'), 'class' => 'form-control', 'options'=>$vac, 'default' => '1', 'value'=>$ado['Adopcione']['aprobado']));
                ?>
            </div><div id="clear"></div>
            <button type="submit" class="btn btn-primary pull-right"><?php echo _('Editar Adopción');?></button>
        </fieldset>
<?php echo $this->Form->end(); ?>
    </div>

</div>