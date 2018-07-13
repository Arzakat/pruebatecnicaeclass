<?php
App::uses('AppController', 'Controller');
/**
 * UsuariosPerfiles Controller
 *
 * @property UsuariosPerfile $UsuariosPerfile
 * @property PaginatorComponent $Paginator
 */
class UsuariosPerfilesController extends AppController {

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
		$this->UsuariosPerfile->recursive = 0;
		$this->set('usuariosPerfiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsuariosPerfile->exists($id)) {
			throw new NotFoundException(__('Invalid usuarios perfile'));
		}
		$options = array('conditions' => array('UsuariosPerfile.' . $this->UsuariosPerfile->primaryKey => $id));
		$this->set('usuariosPerfile', $this->UsuariosPerfile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsuariosPerfile->create();
			if ($this->UsuariosPerfile->save($this->request->data)) {
				$this->Flash->success(__('El perfil de usuario ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El perfil de usuario no ha podido ser guardado, por favor intente nuevamente.'));
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
		if (!$this->UsuariosPerfile->exists($id)) {
			throw new NotFoundException(__('Invalid usuarios perfile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsuariosPerfile->save($this->request->data)) {
				$this->Flash->success(__('El perfil de usuario ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El perfil de usuario no ha podido ser guardado, por favor intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('UsuariosPerfile.' . $this->UsuariosPerfile->primaryKey => $id));
			$this->request->data = $this->UsuariosPerfile->find('first', $options);
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
		$this->UsuariosPerfile->id = $id;
		if (!$this->UsuariosPerfile->exists()) {
			throw new NotFoundException(__('Invalid usuarios perfile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsuariosPerfile->delete()) {
			$this->Flash->success(__('El perfil de usuario ha sido elimianndo.'));
		} else {
			$this->Flash->error(__('El perfil de usuario no ha podido ser eliminado, por favor intente nuevamente.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
