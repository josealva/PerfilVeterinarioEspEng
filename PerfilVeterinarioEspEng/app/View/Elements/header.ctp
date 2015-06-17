<div class="wrap">
    <div id="regbar">
    <div id="navthing">
        
        <?php
        //echo 'kjkj'.$this->Session->read('Usuario');
        if(isset($nombre)){
            
            echo '<p>';
            echo $this->Html->link(
                $nombre,
                array(
                     'controller' => 'duenos',
                     'action' => 'profile',
                     'full_base' => true
                ));
            echo '  |  ';
            echo $this->Html->link(
                __('Desconectarme'),
                array(
                     'controller' => 'duenos',
                     'action' => 'logout',
                     'full_base' => true
                ));
           echo '</p>';
            }else{
        ?>
      <p><a href="javascript:void(0)" id="loginform" onclick="showLogin()"><?php echo __('Iniciar Sesion') ?></a> | 
      <?php
      echo $this->Html->link(
                __('Registrarme'),
                array(
                     'controller' => 'duenos',
                     'action' => 'add',
                     'full_base' => true
                ));
      ?>
      </p>
        <?php
        }
        ?>
      <div id="login">
      <div class="arrow-up"></div>
      <div class="formholder">
          <div class="randompad">
              <fieldset>
                  <?php
                    echo $this->Form->create('Dueno', array('class'=>"form-horizontal", 'role'=>"form", 'action'=>'login'));
                  ?>
                  <?php
                    echo $this->Form->input('Dueno.username', array('label'=>false, 'placeholder'=>__('Nombre de Usuario'), 'class'=>'form-control'));
                    echo $this->Form->input('Dueno.password', array('label'=>false, 'placeholder'=>__('Contraseña'),'class'=>"form-control"));
                  ?>
                  <button type="submit" class="btn btn-primary pull-right"><?php echo __('Iniciar Sesion') ?></button>
                  <?php
                    echo $this->Form->end();
                  ?>
              </fieldset>
          </div>
      </div>
    </div>
    </div>
  </div>

<?php
//echo $this->Html->image('pets.png', array('alt' => 'Pets', 'height'=>"100", 'width'=>"300"));
//?>

</div>
<div id="banner">
    <?php
    echo $this->Html->image('logo.png', array('alt' => 'CakePHP', 'height'=>'200px', 'width'=>'400px', 'class'=>'pull-left'));
    echo $this->Html->image('pets.png', array('alt' => 'CakePHP', 'height'=>'200px', 'width'=>'400px', 'class'=>'pull-right logo'));
    ?>
   
</div>

<div id="menu" class="col-md-12">
    <ul class="col-md-12">
        <li class="col-md-2"></li>
        <li class="col-md-3 menu">
        <?php
            echo $this->Html->link(
                __('Inicio'),
                array(
                     'controller' => 'duenos',
                     'action' => 'index',
                     'full_base' => true
                ));
        ?>
        </li>
        <li class="col-md-3 menu">
            <?php
            echo $this->Html->link(
                __('Veterinarias'),
                array(
                     'controller' => 'veterinarias',
                     'action' => 'index',
                     'full_base' => true
                ));
        ?>
        </li>
        <li class="col-md-3 menu">
            <?php
            echo $this->Html->link(
                __('Adopciones'),
                array(
                     'controller' => 'adopciones',
                     'action' => 'listaAdopciones',
                     'full_base' => true
                ));
        ?>
        </li>
        <li class="col-md-1"></li>
    </ul>
</div>
<br>