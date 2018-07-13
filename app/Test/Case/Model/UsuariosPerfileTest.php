<?php
App::uses('UsuariosPerfile', 'Model');

/**
 * UsuariosPerfile Test Case
 */
class UsuariosPerfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usuarios_perfile',
		'app.usuario',
		'app.perfile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsuariosPerfile = ClassRegistry::init('UsuariosPerfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsuariosPerfile);

		parent::tearDown();
	}

}
