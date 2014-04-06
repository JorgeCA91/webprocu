<?php
App::uses('AppController', 'Controller');
/**
 * Regiones Controller
 *
 * @property Region $Region
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RegionesController extends AppController {

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
		$this->Region->recursive = 0;
		$this->set('regiones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Region->exists($id)) {
			throw new NotFoundException(__('Invalid region'));
		}
		$options = array('conditions' => array('Region.' . $this->Region->primaryKey => $id));
		$this->set('region', $this->Region->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Region->create();
			if ($this->Region->save($this->request->data)) {
				$this->Session->setFlash(__('The region has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The region could not be saved. Please, try again.'));
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
		if (!$this->Region->exists($id)) {
			throw new NotFoundException(__('Invalid region'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Region->save($this->request->data)) {
				$this->Session->setFlash(__('The region has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The region could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Region.' . $this->Region->primaryKey => $id));
			$this->request->data = $this->Region->find('first', $options);
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
		$this->Region->id = $id;
		if (!$this->Region->exists()) {
			throw new NotFoundException(__('Invalid region'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Region->delete()) {
			$this->Session->setFlash(__('The region has been deleted.'));
		} else {
			$this->Session->setFlash(__('The region could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrador_index method
 *
 * @return void
 */
	public function administrador_index() {
		$this->Region->recursive = 0;
		$this->set('regiones', $this->Paginator->paginate());
	}

/**
 * administrador_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_view($id = null) {
		if (!$this->Region->exists($id)) {
			throw new NotFoundException(__('Invalid region'));
		}
		$options = array('conditions' => array('Region.' . $this->Region->primaryKey => $id));
		$this->set('region', $this->Region->find('first', $options));
	}

/**
 * administrador_add method
 *
 * @return void
 */
	public function administrador_add() {
		if ($this->request->is('post')) {
			$this->Region->create();
			if ($this->Region->save($this->request->data)) {
				$this->Session->setFlash(__('The region has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The region could not be saved. Please, try again.'));
			}
		}
	}

/**
 * administrador_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_edit($id = null) {
		if (!$this->Region->exists($id)) {
			throw new NotFoundException(__('Invalid region'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Region->save($this->request->data)) {
				$this->Session->setFlash(__('The region has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The region could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Region.' . $this->Region->primaryKey => $id));
			$this->request->data = $this->Region->find('first', $options);
		}
	}

/**
 * administrador_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_delete($id = null) {
		$this->Region->id = $id;
		if (!$this->Region->exists()) {
			throw new NotFoundException(__('Invalid region'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Region->delete()) {
			$this->Session->setFlash(__('The region has been deleted.'));
		} else {
			$this->Session->setFlash(__('The region could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
