<?php
App::uses('AppController', 'Controller');
/**
 * Municipios Controller
 *
 * @property Municipio $Municipio
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MunicipiosController extends AppController {

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
		$this->Municipio->recursive = 0;
		$this->set('municipios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Municipio->exists($id)) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		$options = array('conditions' => array('Municipio.' . $this->Municipio->primaryKey => $id));
		$this->set('municipio', $this->Municipio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Municipio->create();
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('The municipio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.'));
			}
		}
		$regiones = $this->Municipio->Region->find('list');
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
		if (!$this->Municipio->exists($id)) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('The municipio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Municipio.' . $this->Municipio->primaryKey => $id));
			$this->request->data = $this->Municipio->find('first', $options);
		}
		$regiones = $this->Municipio->Region->find('list');
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
		$this->Municipio->id = $id;
		if (!$this->Municipio->exists()) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Municipio->delete()) {
			$this->Session->setFlash(__('The municipio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The municipio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrador_index method
 *
 * @return void
 */
	public function administrador_index() {
		$this->Municipio->recursive = 0;
		$this->set('municipios', $this->Paginator->paginate());
	}

/**
 * administrador_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_view($id = null) {
		if (!$this->Municipio->exists($id)) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		$options = array('conditions' => array('Municipio.' . $this->Municipio->primaryKey => $id));
		$this->set('municipio', $this->Municipio->find('first', $options));
	}

/**
 * administrador_add method
 *
 * @return void
 */
	public function administrador_add() {
		if ($this->request->is('post')) {
			$this->Municipio->create();
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('The municipio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.'));
			}
		}
		$regiones = $this->Municipio->Region->find('list');
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
		if (!$this->Municipio->exists($id)) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('The municipio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Municipio.' . $this->Municipio->primaryKey => $id));
			$this->request->data = $this->Municipio->find('first', $options);
		}
		$regiones = $this->Municipio->Region->find('list');
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
		$this->Municipio->id = $id;
		if (!$this->Municipio->exists()) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Municipio->delete()) {
			$this->Session->setFlash(__('The municipio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The municipio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
