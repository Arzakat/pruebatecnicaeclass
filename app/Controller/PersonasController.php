<?php
App::uses('AppController', 'Controller');
/**
 * Personas Controller
 *
 * @property Persona $Persona
 * @property PaginatorComponent $Paginator
 */
class PersonasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $uses = array('Persona');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('personas', $this->Paginator->paginate());
	}

/**
 * buscador method
 *
 * @return void
 */
	public function buscador() {
		if(!empty($this->request->data)){

			$miNombre = $this->request->data['Buscador']['nombre'];
			$miApellidoPaterno = $this->request->data['Buscador']['apellido_paterno'];
			$miApellidoMaterno = $this->request->data['Buscador']['apellido_materno'];
			$miEmail = $this->request->data['Buscador']['email'];

			$misCondiciones = array();

			if(!empty($miNombre)){
				$misCondiciones['Persona.nombre LIKE'] = "%".$miNombre."%";
			}
			if(!empty($miApellidoPaterno)){
				$misCondiciones['Persona.apellido_paterno LIKE'] = "%".$miApellidoPaterno."%";
			}
			if(!empty($miApellidoMaterno)){
				$misCondiciones['Persona.apellido_materno LIKE'] = "%".$miApellidoMaterno."%";
			}
			if(!empty($miEmail)){
				$misCondiciones['Persona.email LIKE'] = "%".$miEmail."%";
			}

			if(empty($misCondiciones)){
				$this->redirect(array('controller' => 'personas', 'action' => 'index'));
			}

			$this->paginate = array('conditions' => $misCondiciones);
			$this->set('personas', $this->Paginator->paginate());
		} else {
			$this->redirect(array('controller' => 'personas', 'action' => 'index'));
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
		$this->set('persona', $this->Persona->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Flash->success(__('La persona ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('La persona no ha podido ser guardada, por favor intente nuevamente'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persona->save($this->request->data)) {
				$this->Flash->success(__('La persona ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('la persona no ha podido ser guardada, por favor intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Persona->delete()) {
			$this->Flash->success(__('La persona ha sido eliminada.'));
		} else {
			$this->Flash->error(__('La persona no ha podido ser eliminada, por favor intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function usuarios_persona($idPersona = null){

	$persona = $this->Persona->find('first', array(
		'conditions' => array('id' => $idPersona),
		'contain' => array('Usuario'),
		));
	$this->set('persona', $persona);
	}
}
