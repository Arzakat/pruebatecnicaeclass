<?php
App::uses('AppModel', 'Model');
/**
 * Direccione Model
 *
 * @property  $
 * @property persona $persona
 */
class Direccione extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'direccion';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'direccion' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'id_persona',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Regione' => array(
			'className' => 'Regione',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Comuna' => array(
			'className' => 'Comuna',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
