<?php
App::uses('TiposTelefono', 'Model');

/**
 * TiposTelefono Test Case
 */
class TiposTelefonoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipos_telefono',
		'app.telefono',
		'app.persona',
		'app.direccione',
		'app.usuario',
		'app.usuarios_perfile',
		'app.perfile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposTelefono = ClassRegistry::init('TiposTelefono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposTelefono);

		parent::tearDown();
	}

}
