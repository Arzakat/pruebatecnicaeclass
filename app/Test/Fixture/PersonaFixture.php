<?php
/**
 * Persona Fixture
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id_documento' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'numero_documento' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellido_paterno' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellido_materno' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_nacimiento' => array('type' => 'date', 'null' => true, 'default' => null),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'id_documento' => 1,
			'numero_documento' => 'Lorem ipsum dolor sit amet',
			'apellido_paterno' => 'Lorem ipsum dolor sit amet',
			'apellido_materno' => 'Lorem ipsum dolor sit amet',
			'fecha_nacimiento' => '2018-07-12',
			'email' => 'Lorem ipsum dolor sit amet'
		),
	);

}
