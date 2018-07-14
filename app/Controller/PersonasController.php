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
		
		$tipos_documentos = $this->Persona->TiposDocumento->find('list', array(
			'fields' => array('nombre'),
			'expects' => array()
		));

		$this->set('tipos_documentos', $tipos_documentos);

		if ($this->request->is('post')) {
			$errores = 0;


			$rutNuevo = $this->request->data['Persona']['numero_documento'];

			switch($this->request->data['Persona']['id_documento']){
				// Cualquier otro
				default:
					if(!is_numeric($rutNuevo)){
						$this->Flash->error(__('Numero de documento invalido.'));
						$errores++;
					}
					break;
				// Es rut
				case 3:
					if(is_numeric($rutNuevo)){
						if(!strlen($rutNuevo) == 7 || !strlen($rutNuevo) == 8){
							$this->Flash->error(__('Numero de documento invalido.'));
							$errores++;
						}
					} else {
						$this->Flash->error(__('Numero de documento invalido.'));
						$errores++;
					}
					break;
			}

			// Es rut
			if($this->request->data['Persona']['id_documento'] == 3){
				$rutNuevo = $this->request->data['Persona']['numero_documento'];
				if(is_numeric($rutNuevo)){
					if(!strlen($rutNuevo) == 7 || !strlen($rutNuevo) == 8){
						$this->Flash->error(__('Numero de documento invalido.'));
						$errores++;
					}
				} else {
					$this->Flash->error(__('Numero de documento invalido.'));
					$errores++;
				}
			}

			if(!$errores){
				$this->Persona->create();
			}
			if (!$errores && $this->Persona->save($this->request->data)) {
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
			'conditions' => array('Persona.id' => $idPersona),
			'contain' => array('Usuario'),
			));
		$this->set('persona', $persona);
	}

	public function direcciones_persona($idPersona = null){
		$this->Persona->recursive = 2;
		$persona = $this->Persona->find('first', array(
			'conditions' => array(
				'Persona.id' => $idPersona
			),
			'Direccione' => array(
				'Regione',
				'Comuna',
				'Paise'
			)
		));
		$this->set('persona', $persona);
	}
}
