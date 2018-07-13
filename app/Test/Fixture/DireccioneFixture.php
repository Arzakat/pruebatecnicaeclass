<?php
/**
 * Direccione Fixture
 */
class DireccioneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'id_comuna' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_pais' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_region' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'id_persona' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_comuna' => array('column' => 'id_comuna', 'unique' => 0),
			'id_pais' => array('column' => 'id_pais', 'unique' => 0),
			'id_region' => array('column' => 'id_region', 'unique' => 0),
			'id_persona' => array('column' => 'id_persona', 'unique' => 0)
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
			'direccion' => 'Lorem ipsum dolor sit amet',
			'id_comuna' => 1,
			'id_pais' => 1,
			'id_region' => 1,
			'id_persona' => 1
		),
	);

}
