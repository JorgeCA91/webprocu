<?php
App::uses('AppController', 'Controller');
/**
 * Localidades Controller
 *
 * @property Localidad $Localidad
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LocalidadesController extends AppController {

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
		$this->Localidad->recursive = 0;
		$this->set('localidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Localidad->exists($id)) {
			throw new NotFoundException(__('Invalid localidad'));
		}
		$options = array('conditions' => array('Localidad.' . $this->Localidad->primaryKey => $id));
		$this->set('localidad', $this->Localidad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Localidad->create();
			if ($this->Localidad->save($this->request->data)) {
				$this->Session->setFlash(__('The localidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localidad could not be saved. Please, try again.'));
			}
		}
		$municipios = $this->Localidad->Municipio->find('list');
		$this->set(compact('municipios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Localidad->exists($id)) {
			throw new NotFoundException(__('Invalid localidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Localidad->save($this->request->data)) {
				$this->Session->setFlash(__('The localidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Localidad.' . $this->Localidad->primaryKey => $id));
			$this->request->data = $this->Localidad->find('first', $options);
		}
		$municipios = $this->Localidad->Municipio->find('list');
		$this->set(compact('municipios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Localidad->id = $id;
		if (!$this->Localidad->exists()) {
			throw new NotFoundException(__('Invalid localidad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Localidad->delete()) {
			$this->Session->setFlash(__('The localidad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The localidad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrador_index method
 *
 * @return void
 */
	public function administrador_index() {
		$this->Localidad->recursive = 0;
		$this->set('localidades', $this->Paginator->paginate());
	}

/**
 * administrador_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_view($id = null) {
		if (!$this->Localidad->exists($id)) {
			throw new NotFoundException(__('Invalid localidad'));
		}
		$options = array('conditions' => array('Localidad.' . $this->Localidad->primaryKey => $id));
		$this->set('localidad', $this->Localidad->find('first', $options));
	}

/**
 * administrador_add method
 *
 * @return void
 */
	public function administrador_add() {
		if ($this->request->is('post')) {
			$this->Localidad->create();
			if ($this->Localidad->save($this->request->data)) {
				$this->Session->setFlash(__('The localidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localidad could not be saved. Please, try again.'));
			}
		}
		$municipios = $this->Localidad->Municipio->find('list');
		$this->set(compact('municipios'));
	}

/**
 * administrador_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_edit($id = null) {
		if (!$this->Localidad->exists($id)) {
			throw new NotFoundException(__('Invalid localidad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Localidad->save($this->request->data)) {
				$this->Session->setFlash(__('The localidad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The localidad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Localidad.' . $this->Localidad->primaryKey => $id));
			$this->request->data = $this->Localidad->find('first', $options);
		}
		$municipios = $this->Localidad->Municipio->find('list');
		$this->set(compact('municipios'));
	}

/**
 * administrador_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_delete($id = null) {
		$this->Localidad->id = $id;
		if (!$this->Localidad->exists()) {
			throw new NotFoundException(__('Invalid localidad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Localidad->delete()) {
			$this->Session->setFlash(__('The localidad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The localidad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
