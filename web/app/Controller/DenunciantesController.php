<?php
App::uses('AppController', 'Controller');
/**
 * Denunciantes Controller
 *
 * @property Denunciante $Denunciante
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DenunciantesController extends AppController {

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
		$this->Denunciante->recursive = 0;
		$this->set('denunciantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Denunciante->exists($id)) {
			throw new NotFoundException(__('Invalid denunciante'));
		}
		$options = array('conditions' => array('Denunciante.' . $this->Denunciante->primaryKey => $id));
		$this->set('denunciante', $this->Denunciante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Denunciante->create();
			if ($this->Denunciante->save($this->request->data)) {
				$this->Session->setFlash(__('The denunciante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The denunciante could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Denunciante->Usuario->find('list');
		$localidades = $this->Denunciante->Localidad->find('list');
		$this->set(compact('usuarios', 'localidades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Denunciante->exists($id)) {
			throw new NotFoundException(__('Invalid denunciante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Denunciante->save($this->request->data)) {
				$this->Session->setFlash(__('The denunciante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The denunciante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Denunciante.' . $this->Denunciante->primaryKey => $id));
			$this->request->data = $this->Denunciante->find('first', $options);
		}
		$usuarios = $this->Denunciante->Usuario->find('list');
		$localidades = $this->Denunciante->Localidad->find('list');
		$this->set(compact('usuarios', 'localidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Denunciante->id = $id;
		if (!$this->Denunciante->exists()) {
			throw new NotFoundException(__('Invalid denunciante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Denunciante->delete()) {
			$this->Session->setFlash(__('The denunciante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The denunciante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrador_index method
 *
 * @return void
 */
	public function administrador_index() {
		$this->Denunciante->recursive = 0;
		$this->set('denunciantes', $this->Paginator->paginate());
	}

/**
 * administrador_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_view($id = null) {
		if (!$this->Denunciante->exists($id)) {
			throw new NotFoundException(__('Invalid denunciante'));
		}
		$options = array('conditions' => array('Denunciante.' . $this->Denunciante->primaryKey => $id));
		$this->set('denunciante', $this->Denunciante->find('first', $options));
	}

/**
 * administrador_add method
 *
 * @return void
 */
	public function administrador_add() {
		if ($this->request->is('post')) {
			$this->Denunciante->create();
			if ($this->Denunciante->save($this->request->data)) {
				$this->Session->setFlash(__('The denunciante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The denunciante could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Denunciante->Usuario->find('list');
		$localidades = $this->Denunciante->Localidad->find('list');
		$this->set(compact('usuarios', 'localidades'));
	}

/**
 * administrador_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_edit($id = null) {
		if (!$this->Denunciante->exists($id)) {
			throw new NotFoundException(__('Invalid denunciante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Denunciante->save($this->request->data)) {
				$this->Session->setFlash(__('The denunciante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The denunciante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Denunciante.' . $this->Denunciante->primaryKey => $id));
			$this->request->data = $this->Denunciante->find('first', $options);
		}
		$usuarios = $this->Denunciante->Usuario->find('list');
		$localidades = $this->Denunciante->Localidad->find('list');
		$this->set(compact('usuarios', 'localidades'));
	}

/**
 * administrador_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_delete($id = null) {
		$this->Denunciante->id = $id;
		if (!$this->Denunciante->exists()) {
			throw new NotFoundException(__('Invalid denunciante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Denunciante->delete()) {
			$this->Session->setFlash(__('The denunciante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The denunciante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
