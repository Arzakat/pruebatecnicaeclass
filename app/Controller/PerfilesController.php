<?php
App::uses('AppController', 'Controller');
/**
 * Perfiles Controller
 *
 * @property Perfile $Perfile
 * @property PaginatorComponent $Paginator
 */
class PerfilesController extends AppController {

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
		$this->Perfile->recursive = 0;
		$this->set('perfiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Perfile->exists($id)) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		$options = array('conditions' => array('Perfile.' . $this->Perfile->primaryKey => $id));
		$this->set('perfile', $this->Perfile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Perfile->create();
			if ($this->Perfile->save($this->request->data)) {
				$this->Flash->success(__('El perfil ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El país no se ha podido guardar, por favor intente nuevamente.'));
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
		if (!$this->Perfile->exists($id)) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Perfile->save($this->request->data)) {
				$this->Flash->success(__('El perfil ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El perfil no ha podido ser guardado, por favor intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Perfile.' . $this->Perfile->primaryKey => $id));
			$this->request->data = $this->Perfile->find('first', $options);
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
		$this->Perfile->id = $id;
		if (!$this->Perfile->exists()) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Perfile->delete()) {
			$this->Flash->success(__('El perfil ha sido eliminado.'));
		} else {
			$this->Flash->error(__('El perfil no ha podido ser eliminado, por favor intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
