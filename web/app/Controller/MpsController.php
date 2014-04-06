<?php
App::uses('AppController', 'Controller');
/**
 * Mps Controller
 *
 * @property Mp $Mp
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MpsController extends AppController {

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
		$this->Mp->recursive = 0;
		$this->set('mps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mp->exists($id)) {
			throw new NotFoundException(__('Invalid mp'));
		}
		$options = array('conditions' => array('Mp.' . $this->Mp->primaryKey => $id));
		$this->set('mp', $this->Mp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mp->create();
			if ($this->Mp->save($this->request->data)) {
				$this->Session->setFlash(__('The mp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mp could not be saved. Please, try again.'));
			}
		}
		$regiones = $this->Mp->Region->find('list');
		$this->set(compact('regiones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mp->exists($id)) {
			throw new NotFoundException(__('Invalid mp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mp->save($this->request->data)) {
				$this->Session->setFlash(__('The mp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mp.' . $this->Mp->primaryKey => $id));
			$this->request->data = $this->Mp->find('first', $options);
		}
		$regiones = $this->Mp->Region->find('list');
		$this->set(compact('regiones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mp->id = $id;
		if (!$this->Mp->exists()) {
			throw new NotFoundException(__('Invalid mp'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mp->delete()) {
			$this->Session->setFlash(__('The mp has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrador_index method
 *
 * @return void
 */
	public function administrador_index() {
		$this->Mp->recursive = 0;
		$this->set('mps', $this->Paginator->paginate());
	}

/**
 * administrador_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_view($id = null) {
		if (!$this->Mp->exists($id)) {
			throw new NotFoundException(__('Invalid mp'));
		}
		$options = array('conditions' => array('Mp.' . $this->Mp->primaryKey => $id));
		$this->set('mp', $this->Mp->find('first', $options));
	}

/**
 * administrador_add method
 *
 * @return void
 */
	public function administrador_add() {
		if ($this->request->is('post')) {
			$this->Mp->create();
			if ($this->Mp->save($this->request->data)) {
				$this->Session->setFlash(__('The mp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mp could not be saved. Please, try again.'));
			}
		}
		$regiones = $this->Mp->Region->find('list');
		$this->set(compact('regiones'));
	}

/**
 * administrador_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_edit($id = null) {
		if (!$this->Mp->exists($id)) {
			throw new NotFoundException(__('Invalid mp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mp->save($this->request->data)) {
				$this->Session->setFlash(__('The mp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mp.' . $this->Mp->primaryKey => $id));
			$this->request->data = $this->Mp->find('first', $options);
		}
		$regiones = $this->Mp->Region->find('list');
		$this->set(compact('regiones'));
	}

/**
 * administrador_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_delete($id = null) {
		$this->Mp->id = $id;
		if (!$this->Mp->exists()) {
			throw new NotFoundException(__('Invalid mp'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mp->delete()) {
			$this->Session->setFlash(__('The mp has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
