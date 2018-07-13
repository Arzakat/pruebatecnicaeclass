<?php
/**
 * Telefono Fixture
 */
class TelefonoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'numero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo_pais' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'codigo_area' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'id_tipo_telefono' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'id_persona' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'numero' => 'Lorem ipsum dolor sit amet',
			'codigo_pais' => 1,
			'codigo_area' => 1,
			'id_tipo_telefono' => 1,
			'id_persona' => 1
		),
	);

}
