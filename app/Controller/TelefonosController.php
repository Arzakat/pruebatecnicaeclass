<?php
App::uses('AppController', 'Controller');
/**
 * Telefonos Controller
 *
 * @property Telefono $Telefono
 * @property PaginatorComponent $Paginator
 */
class TelefonosController extends AppController {

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
		$this->Telefono->recursive = 0;
		$this->set('telefonos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Telefono->exists($id)) {
			throw new NotFoundException(__('Invalid telefono'));
		}
		$options = array('conditions' => array('Telefono.' . $this->Telefono->primaryKey => $id));
		$this->set('telefono', $this->Telefono->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Telefono->create();
			if ($this->Telefono->save($this->request->data)) {
				$this->Flash->success(__('El teléfono se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El teléfono no pudo ser guardado, por favor intente nuevamente'));
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
		if (!$this->Telefono->exists($id)) {
			throw new NotFoundException(__('Invalid telefono'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Telefono->save($this->request->data)) {
				$this->Flash->success(__('El teléfono se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El teléfono no pudo ser guardado, por favor intente nuevamente'));
			}
		} else {
			$options = array('conditions' => array('Telefono.' . $this->Telefono->primaryKey => $id));
			$this->request->data = $this->Telefono->find('first', $options);
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
		$this->Telefono->id = $id;
		if (!$this->Telefono->exists()) {
			throw new NotFoundException(__('Invalid telefono'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Telefono->delete()) {
			$this->Flash->success(__('El teléfono se ha eliminado.'));
		} else {
			$this->Flash->error(__('El teléfono no pudo ser eliminado, por favor intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
