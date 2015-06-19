<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class Registroconsulta extends AppModel {
	
	public $useTable = 'registroconsultas';
	
    public $validate = array(
	
       
        'descripcion' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'la descripcion es requerido'
            )
        ),
		'peso' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'el peso es requerida'
            )
        ),
		'edad' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'La edad es requerida'
            )
        ),
   
    );
    
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}
