<?php
App::uses('AppController', 'Controller');
/**
 * Direcciones Controller
 *
 * @property Direccione $Direccione
 * @property PaginatorComponent $Paginator
 */
class DireccionesController extends AppController {

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
		$this->Direccione->recursive = 0;
		$this->set('direcciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Direccione->exists($id)) {
			throw new NotFoundException(__('Invalid direcciones'));
		}
		$options = array('conditions' => array('Direccione.' . $this->Direccione->primaryKey => $id));
		$this->set('direccione', $this->Direccione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Direccione->create();
			if ($this->Direccione->save($this->request->data)) {
				$this->Flash->success(__('La dirección se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('La dirección no pudo ser guardada, por favor intente nuevamente.'));
			}
		}
		$personas = $this->Direccione->Persona->find('list');
		$this->set(compact('personas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Direccione->exists($id)) {
			throw new NotFoundException(__('Invalid direccione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Direccione->save($this->request->data)) {
				$this->Flash->success(__('La dirección se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('La dirección no pudo ser guardada, por favor intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Direccione.' . $this->Direccione->primaryKey => $id));
			$this->request->data = $this->Direccione->find('first', $options);
		}
		$personas = $this->Direccione->Persona->find('list');
		$this->set(compact('personas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Direccione->id = $id;
		if (!$this->Direccione->exists()) {
			throw new NotFoundException(__('Invalid direccione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Direccione->delete()) {
			$this->Flash->success(__('La dirección se ha borrado correctamente'));
		} else {
			$this->Flash->error(__('TLa dirección no pudo ser eliminada, por favor intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
