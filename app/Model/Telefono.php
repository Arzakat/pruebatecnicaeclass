<?php
App::uses('AppModel', 'Model');
/**
 * Telefono Model
 *
 * @property Persona $Persona
 * @property TiposTelefono $TiposTelefono
 */
class Telefono extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numero';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'numero' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'id_documento',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposTelefono' => array(
			'className' => 'TiposTelefono',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
