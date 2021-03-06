<?php
    $this->Paginator->options(
            array(
                'update'=>'#panel-adopciones',
                'before'=>$this->Js->get('#procesando')->effect('fadeIn', array('buffer'=> false)),
                'complete'=>$this->Js->get('#procesando')->effect('fadeOut', array('buffer'=> false))
            )
    );
?>
<div id="main">
    <h3 class="pull-left"><?php echo __('Necesitamos un hogar') ?></h3>
    <h4 class="pull-right"><?php echo __('Si desea encontrar un hogar para un animalito puede hacerlo') ?> 
        <?php 
        echo $this->Html->link(__(' aquí<--'),array('controller'=>'adopciones', 'action'=>'add'));
        ?>
    </h4>
    <br>
    <br>
    <div id="panel-adopciones col-md-12">
        <?php
        if($adops){
           // var_dump($adops);
            foreach ($adops as $ad){
                if($ad['Adopcione']['aprobado']==0){
                echo '<div class="info-adopcion col-md-12">';
                //echo $user['Adopcione']['imagen'];
                if (empty($ad['Adopcione']['imagen'])) {
                        echo $this->Html->image('no-foto.jpg', array('alt' => 'Sin foto', 'width' => '200px', 'height' => '200px', 'class'=>'pull-left col-md-3'));
                    } else {
                        echo $this->Html->image('adopciones/'.$ad['Adopcione']['imagen'], array('alt' => '', 'width' => '200px', 'height' => '200px', 'class'=>'pull-left col-md-3'));
                    }
                echo '<ul class="col-md-5">';
                echo '<li>Hola, </li>';
                echo '<li>Me llamo '.$ad['Adopcione']['nombre_mascota'].'</li>';
                echo '<li>tengo '.$ad['Adopcione']['edad'].' años</li>';
                echo '<li>Soy '.$ad['Adopcione']['tipo_mascota'].' '.$ad['Adopcione']['raza'].'</li>';
               
                if($ad['Adopcione']['desparacitado']==0){
                    echo '<li>Me encuentro desparacitado</li>';
                }else{
                    echo '<li>No estoy desparacitado</li>';
                }
                if($ad['Adopcione']['vacunas_dia']==0){
                    echo '<li>Tengo mis vacunas al dia</li>';
                }else{
                    echo '<li>Me falta algunas vacunas</li>';
                }
                echo '<li>Si puedes darme un hogar pregunta aquí->'.$ad['Adopcione']['contacto'].'</li>';
                echo '<li>Información extra: '.$ad['Adopcione']['nota'].'</li>';
                echo '</ul>';
                //echo $this->Html->link('EDITAR/APROBAR', '/adopciones/edit/' . $ad['Adopcione']['id'], array('class'=>"btn btn-primary"));
                echo '</div>';
                echo '<br>';
            }
            }
        }else{
            echo '<br>';
            echo __('No hay adopciones disponibles');
            echo '<br>';
            echo '<br>';

        }
         echo $this->Paginator->counter(
                    array(
                        'format'=> _(__('Página'). ' {:page} of {:pages}, ' .__('Mostrando'). ' {:current} '. __('resultados de'). ' {:count} '. __('en total'))
                    ));
            echo '</p>';
            ?>
            <ul class="pagination">
                <li><?php 
                    echo $this->Paginator->prev('<<', array('tag'=> false), null,  array('class'=>'prev disabled'));
                ?>
                </li>
                <?php
                echo $this->Paginator->numbers(array('separator'=>'', 'tag'=>'li', 'currentTag'=>'a', 'currentClass'=>'active'));
                ?>
            <li>
                <?php
                    echo $this->Paginator->next('>>', array('tag' => false), null, array('class'=>'next disabled'));
                ?>
            </li></ul>
            <?php
            $this->Js->writeBuffer()?>
    </div>
    <div id="clear"></div>
</div>