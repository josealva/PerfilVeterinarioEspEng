<?php echo $this->Html->link(__('Volver'),'/duenos/index/');
?>
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo __('Cambiar Imagen') ?></h4>
            </div>
            <div class="modal-body">
                <span class="pull-left">
                    <?php
                    if (empty($mascota['Mascota']['foto'])) {
                        echo $this->Html->image('no-foto.jpg', array('alt' => 'Sin foto', 'width' => '200px', 'height' => '200px'));
                    } else {
                        echo $this->Html->image($mascota['Mascota']['foto'], array('alt' => '', 'width' => '200px', 'height' => '200px'));
                    }
                    ?>
                </span>
                <div class="images-form pull-right">
                    <?php echo $this->Form->create('Mascota', array('type' => 'file', 'action' => 'cargarImagen'.$mascota['Mascota']['id'])); ?>
                    <fieldset>

                        <?php
                        echo $this->Form->input('image', array('label' => __('Añadir Imagen'), 'type' => 'file'));
                        ?>

                    </fieldset>

                </div>
            </div>
            <div id="clear"></div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?php echo __('Guardar') ?></button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __('Cancelar') ?></button>
                <?php echo $this->Form->end(); ?>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="main">
    <div class="row pull-left">
        <div class="col-sm-12">
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-right">
                    <strong class=""><span class="pull-left">
                            <h3>
                                <?php
                                echo strtoupper($mascota['Mascota']['nombre']);
								echo "<br>";
								echo __('Edad'). ': ' . $mascota['Mascota']['edad'];
                                ?>
                            </h3>
                    </strong>
                    <div id="clear"></div>
                </li>
                <li class="list-group-item">
                    <?php
                    if (empty($mascota['Mascota']['foto'])) {
                        echo $this->Html->image('no-foto.jpg', array('alt' => 'Sin foto', 'width' => '200px', 'height' => '200px'));
                    } else {
                        echo $this->Html->image($mascota['Mascota']['foto'], array('alt' => '', 'width' => '200px', 'height' => '200px'));
                    }
                    ?>
                    </span>
                    <br>
                    <a href="javascript:void(0)" onclick="modalopenImage()"><?php echo __('Cambiar Imagen') ?></a>
                    <div id="clear"></div>
                </li>
                <li class="list-group-item text-muted" contenteditable="false">
                    <span class="pull-left"><a><?php echo __('Editar Perfil') ?></a></span>
                    <div id="clear"></div>
                </li>
                <li class="list-group-item text-right">
                    <span class="pull-left"><?php
						echo $this->Html->link(__('Añadir Vacuna'), '/vacunas/add_vacpet/' . $mascota['Mascota']['id']);
                        ?></span>
                    <div id="clear"></div>
                </li>
                <li class="list-group-item text-right">
                    <span class="pull-left"><?php
						echo $this->Html->link(__('AñadirConsulta'), '/registroconsultas/add/' . $mascota['Mascota']['id']);
                        ?></span>
                    <div id="clear"></div>
                </li>
                <li class="list-group-item text-right">
                     <span class="pull-left"><?php
						echo $this->Html->link(__('Agregar Desparasitación'), '/desparacitantes/add_despet/' . $mascota['Mascota']['id']);
                        ?></span>
                    <div id="clear"></div>
                </li>
            </ul>
        </div>
        <div id='clear'></div>
    </div>
	<div id='mascotas' class="pull-left col-md-8">
            <p class="title1"><?php echo __('Vacunas') ?></p>
            <?php
            $vacunas = $mascota['Registrovacuna'];
            if ($vacunas) {
                echo "<ul>";
                foreach ($vacunas as $vacuna) {
                    echo "<li class='petInfo2 col-md-12'>";
                    echo '<div class="pull-left infoPet2">';
                    echo __('Tipo'). ': '  . $this->requestAction('/vacunas/findVac/ ' . $vacuna['idvacuna']);
                    echo "<br>";
                    echo __('Fecha'). ': ' . $vacuna['fechavacuna'];    
                    echo "<br>";
                    echo '</div';
                    echo "</li>";
                }
                echo '</ul>';
            } else {   
                echo '<h5>';
                echo __('No vaccines added');    
                echo '</h5>';
                
            }
            ?>
        </div>
        <div id='mascotas' class="pull-left col-md-8">
         <p class="title1"><?php echo __('Desparasitaciones') ?></p>
        <?php
        $desps = $mascota['RegistroDesparacitacion'];
        /* @var $desparacitaciones type */
        if ($desps) {
            echo "<ul>";
            foreach ($desps as $desparacitacion) {
                echo "<li class='petInfo2 col-md-12'>";
                echo '<div class="pull-left infoPet2">';
                echo "Tipo: " . $this->requestAction('/desparacitaciones/findDesp/ ' . $desparacitacion['iddesparasitante']);
                echo "<br>";
				//echo "Fecha: " . $vacuna['fechavacuna'];    
                echo "<br>";
                echo '</div';
                echo "</li>";
            }
            echo '</ul>';
        } else {   
            echo '<h5>';
            echo __('No Anti Parasite Dose Added'); 
            echo '</h5>';
            
        }
        ?>
    </div>
       <div id='mascotas' class="pull-left col-md-8">
            <p class="title1"><?php echo __('Consultas') ?></p>
            <?php
            $consulta = NULL;
            if ($consulta!=NULL) {
               
                
              
            } else {   
                echo '<h5>';
                echo __('No consultation added');    
                echo '</h5>';
                
            }
            ?>
        </div>
    <br><br>
    <div id='clear'></div>
</div>


