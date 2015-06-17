
<?php

//$this->layout='ajax';
//echo $this->Html->css('loginStyle.css');

?> 


<div id="main">
    <div class="index1">
	<h2><?php echo __('Bienvenido') ?></h2>
		<?php
		echo $this->Html->image('costa-rica-flag.gif', array('alt' => 'CakePHP', 'width'=>'50px'));
		echo $this->Html->link('Español', array('controller' => 'app', 'action' => 'setLanguage/ '. 1));
		echo "<br>";
		echo $this->Html->image('us_flag.gif', array('alt' => 'CakePHP', 'width'=>'50px'));
		echo $this->Html->link('English', array('controller' => 'app', 'action' => 'setLanguage/ '. 2));
      ?>
    </div>
</div>