<div id='main'>
    <div class="pets form">
        <?php echo $this->Form->create(null, array(
            'url' => array('controller' => 'registroconsultas', 'action' => 'add/')
        )); ?>
        <fieldset>
            <legend><?php echo __('Añadir consultas'); ?></legend>
            <div class="form-group">
                    <?php echo $this->Form->input('Registroconsulta.Descripcion', array('label'=>'Descripcion: ', 'type'=>'text'));?>
            </div>
       
            <div id="clear"></div>
            <div class="form-group">
                    <?php echo $this->Form->input('Registroconsulta.fecha', array('label'=>__('Fecha') . ' (yyyy-mm-dd): ','class' => 'form-control form-input-right')); ?>
            </div>
            <div id="clear"></div>
            <div class="form-group">
                    <?php echo $this->Form->input('Registroconsulta.peso', array('label'=>'Peso(kg): ', 'type'=>'text'));?>
            </div>
            <div id="clear"></div>      
            <div class="form-group">
                     <?php  echo $this->Form->input('Registroconsulta.edad', array('label'=>'Edad(Años): ', 'type'=>'text'));?>

            </div>

            <div id="clear"></div>      
            <div class="form-group">
                     <?php  echo $this->Form->input('Registroconsulta.longitud', array('label'=>'Longitud(CM): ', 'type'=>'text'));?>

            </div>

            <div id="clear"></div>      
            <div class="form-group">
                     <?php  echo $this->Form->input('Registroconsulta.costo', array('label'=>'Costo(Costo): ', 'type'=>'text'));?>

            </div>
            <div id="clear"></div>
                <div class="form-group">
                    <?php echo $this->Form->input('Registroconsulta.idmascota', array('label'=>false, 'type' => 'hidden', 'class' => 'form-control','hidden'=>'hidden', 'value'=>"2"));?>
                </div>

            <div id="clear"></div>   
            <div id="clear"></div>   
            <button type="submit" class="btn btn-primary pull-left"><?php echo __('Agregar') ?></button>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    <!--<php echo $this->Form->end(__('Añadir')); ?>-->
    </div>  
</div>

