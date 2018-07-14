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
 * hasOne associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'id_pais',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Regione' => array(
			'className' => 'Regione',
			'foreignKey' => 'id_region',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Comuna' => array(
			'className' => 'Comuna',
			'foreignKey' => 'id_comuna',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
