<?php
App::uses('AppModel', 'Model');
/**
 * UsuariosPerfile Model
 *
 * @property Usuario $usuario
 * @property Perfile $Perfile
 */
class UsuariosPerfile extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id_usuario';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Perfile' => array(
			'className' => 'Perfile',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
