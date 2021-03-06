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
	public function add($idPersona = null) {

		$paises = $this->Direccione->Paise->find('list', array(
			'fields' => array('nombre'),
			'expects' => array()
		));
		$this->set('paises', $paises);

		$regiones = $this->Direccione->Regione->find('list', array(
			'fields' => array('nombre'),
			'expects' => array()
		));
		$this->set('regiones', $regiones);

		$comunas = $this->Direccione->Comuna->find('list', array(
			'fields' => array('nombre'),
			'expects' => array()
		));
		$this->set('comunas', $comunas);

		if ($this->request->is('post')) {
			$this->Direccione->create();
			if ($this->Direccione->save($this->request->data)) {
				$this->Flash->success(__('La dirección se ha guardado.'));
				return $this->redirect(array('controller' => 'personas', 'action' => 'direcciones_persona', $idPersona));
			} else {
				$this->Flash->error(__('La dirección no pudo ser guardada, por favor intente nuevamente.'));
			}
		}
		$personas = $this->Direccione->find('list');

		$this->request->data['Direccione']['id_persona'] = $idPersona;
		$this->set(compact('personas', 'idPersona'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idPersona = null) {
		if (!$this->Direccione->exists($id)) {
			throw new NotFoundException(__('Invalid direccione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Direccione->save($this->request->data)) {
				$this->Flash->success(__('La dirección se ha guardado.'));
				return $this->redirect(array('controller' => 'personas', 'action' => 'direcciones_persona', $idPersona));
			} else {
				$this->Flash->error(__('La dirección no pudo ser guardada, por favor intente nuevamente.'));
			}
		} else {
			$options = array('conditions' => array('Direccione.' . $this->Direccione->primaryKey => $id));
			$this->request->data = $this->Direccione->find('first', $options);
		}
		$personas = $this->Direccione->find('list');
		$this->set(compact('personas'));

		$paises = $this->Direccione->Paise->find('list', array(
				'fields' => array('nombre'),
			));
		$this->set('paises', $paises);
		$regiones = $this->Direccione->Regione->find('list', array(
				'fields' => array('nombre'),
				'conditions' => array('Regione.id_pais' => $this->request->data['Direccione']['id_pais'])
			));
		$this->set('regiones', $regiones);
		$comunas = $this->Direccione->Comuna->find('list', array(
				'fields' => array('nombre'),
				'conditions' => array('Comuna.id_region' => $this->request->data['Direccione']['id_region'])
			));
		$this->set('comunas', $comunas);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idPersona = null) {
		$this->Direccione->id = $id;
		if (!$this->Direccione->exists()) {
			throw new NotFoundException(__('Invalid direccione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Direccione->delete()) {
			$this->Flash->success(__('La dirección se ha borrado correctamente'));
		} else {
			$this->Flash->error(__('La dirección no pudo ser eliminada, por favor intente nuevamente.'));
		}
		return $this->redirect(array('controller' => 'personas', 'action' => 'direcciones_persona', $idPersona));
	}
}
