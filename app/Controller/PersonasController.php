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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Persona->recursive = 0;
		$this->set('personas', $this->Paginator->paginate());
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
}
