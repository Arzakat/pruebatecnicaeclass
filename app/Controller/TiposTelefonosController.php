<?php
App::uses('AppController', 'Controller');
/**
 * TiposTelefonos Controller
 *
 * @property TiposTelefono $TiposTelefono
 * @property PaginatorComponent $Paginator
 */
class TiposTelefonosController extends AppController {

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
		$this->TiposTelefono->recursive = 0;
		$this->set('tiposTelefonos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TiposTelefono->exists($id)) {
			throw new NotFoundException(__('Invalid tipos telefono'));
		}
		$options = array('conditions' => array('TiposTelefono.' . $this->TiposTelefono->primaryKey => $id));
		$this->set('tiposTelefono', $this->TiposTelefono->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TiposTelefono->create();
			if ($this->TiposTelefono->save($this->request->data)) {
				$this->Flash->success(__('El tipo de teléfono se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El tipo de teléfono no pudo ser guardado, por favor intente nuevamente.'));
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
		if (!$this->TiposTelefono->exists($id)) {
			throw new NotFoundException(__('Invalid tipos telefono'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TiposTelefono->save($this->request->data)) {
				$this->Flash->success(__('El tipo de teléfono se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El tipo de teléfono no pudo ser guardado, por favor intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('TiposTelefono.' . $this->TiposTelefono->primaryKey => $id));
			$this->request->data = $this->TiposTelefono->find('first', $options);
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
		$this->TiposTelefono->id = $id;
		if (!$this->TiposTelefono->exists()) {
			throw new NotFoundException(__('Invalid tipos telefono'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TiposTelefono->delete()) {
			$this->Flash->success(__('El tipo de teléfono ha sido eliminado.'));
		} else {
			$this->Flash->error(__('El tipo de teléfono no ha podido ser eliminado, por favor intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
