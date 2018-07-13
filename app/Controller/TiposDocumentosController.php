<?php
App::uses('AppController', 'Controller');
/**
 * TiposDocumentos Controller
 *
 * @property TiposDocumentos $TiposDocumentos
 * @property PaginatorComponent $Paginator
 */
class TiposDocumentosController extends AppController {

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
		$this->TiposDocumento->recursive = 0;
		$this->set('tiposDocumentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TiposDocumento->exists($id)) {
			throw new NotFoundException(__('Invalid tipos documento'));
		}
		$options = array('conditions' => array('TiposDocumento.' . $this->TiposDocumento->primaryKey => $id));
		$this->set('tiposDocumento', $this->TiposDocumento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TiposDocumento->create();
			if ($this->TiposDocumento->save($this->request->data)) {
				$this->Flash->success(__('El tipo de documento se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El tipo de documento no pudo ser guardado, por favor intente nuevamente.'));
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
		if (!$this->TiposDocumento->exists($id)) {
			throw new NotFoundException(__('Invalid tipos documento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TiposDocumento->save($this->request->data)) {
				$this->Flash->success(__('El tipo de documento se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El tipo de documento no pudo ser guardado, por favor intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('TiposDocumento.' . $this->TiposDocumento->primaryKey => $id));
			$this->request->data = $this->TiposDocumento->find('first', $options);
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
		$this->TiposDocumento->id = $id;
		if (!$this->TiposDocumento->exists()) {
			throw new NotFoundException(__('Invalid tipos documento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TiposDocumento->delete()) {
			$this->Flash->success(__('El tipo de documento ha sido eliminado.'));
		} else {
			$this->Flash->error(__('El tipo de documento no ha podido ser eliminado, por favor intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
