<?php
App::uses('AppController', 'Controller');
/**
 * Extraviados Controller
 *
 * @property Extraviado $Extraviado
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ExtraviadosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$conditions = array();
		$consulta = array();
		$this->Extraviado->recursive = 3;
		if ($this->request->is('post')) {
			$consulta = $this->request->data['Consulta'];
			if(isset( $consulta )) {
				$nombre = $consulta['nombre'];
				$app = $consulta['apellido_paterno'];
				$apm = $consulta['apellido_materno'];
					$conditions['AND'] = array(
									"Usuario.nombre LIKE" => "%{$nombre}%",
									"Usuario.apellido_paterno LIKE" => "%{$app}%",
									"Usuario.apellido_materno LIKE" => "%{$apm}%",
						);
					
				}
        }
        $options = array('conditions' => $conditions,'ignore-case' => true);
        $extraviados = $this->Extraviado->Usuario->find('all', $options);
		$this->set('extraviados', $extraviados);
	}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Extraviado->exists($id)) {
			throw new NotFoundException(__('Invalid extraviado'));
		}
		$options = array('conditions' => array('Extraviado.' . $this->Extraviado->primaryKey => $id));
		$this->set('extraviado', $this->Extraviado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Extraviado->create();
			if ($this->Extraviado->save($this->request->data)) {
				$this->Session->setFlash(__('The extraviado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extraviado could not be saved. Please, try again.'));
			}
		}
		$localidades = $this->Extraviado->Localidad->find('list');
		$this->set(compact('localidades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Extraviado->exists($id)) {
			throw new NotFoundException(__('Invalid extraviado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Extraviado->save($this->request->data)) {
				$this->Session->setFlash(__('The extraviado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extraviado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Extraviado.' . $this->Extraviado->primaryKey => $id));
			$this->request->data = $this->Extraviado->find('first', $options);
		}
		$localidades = $this->Extraviado->Localidad->find('list');
		$this->set(compact('localidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Extraviado->id = $id;
		if (!$this->Extraviado->exists()) {
			throw new NotFoundException(__('Invalid extraviado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Extraviado->delete()) {
			$this->Session->setFlash(__('The extraviado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The extraviado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrador_index method
 *
 * @return void
 */
	public function administrador_index() {
		$this->Extraviado->recursive = 0;
		$this->set('extraviados', $this->Paginator->paginate());
	}

/**
 * administrador_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_view($id = null) {
		if (!$this->Extraviado->exists($id)) {
			throw new NotFoundException(__('Invalid extraviado'));
		}
		$options = array('conditions' => array('Extraviado.' . $this->Extraviado->primaryKey => $id));
		$this->set('extraviado', $this->Extraviado->find('first', $options));
	}

/**
 * administrador_add method
 *
 * @return void
 */
	public function administrador_add() {
		if ($this->request->is('post')) {
			$this->Extraviado->create();
			if ($this->Extraviado->save($this->request->data)) {
				$this->Session->setFlash(__('The extraviado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extraviado could not be saved. Please, try again.'));
			}
		}
		$localidades = $this->Extraviado->Localidad->find('list');
		$this->set(compact('localidades'));
	}

/**
 * administrador_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_edit($id = null) {
		if (!$this->Extraviado->exists($id)) {
			throw new NotFoundException(__('Invalid extraviado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Extraviado->save($this->request->data)) {
				$this->Session->setFlash(__('The extraviado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extraviado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Extraviado.' . $this->Extraviado->primaryKey => $id));
			$this->request->data = $this->Extraviado->find('first', $options);
		}
		$localidades = $this->Extraviado->Localidad->find('list');
		$this->set(compact('localidades'));
	}

/**
 * administrador_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_delete($id = null) {
		$this->Extraviado->id = $id;
		if (!$this->Extraviado->exists()) {
			throw new NotFoundException(__('Invalid extraviado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Extraviado->delete()) {
			$this->Session->setFlash(__('The extraviado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The extraviado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
