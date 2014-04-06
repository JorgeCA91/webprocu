<?php
App::uses('AppController', 'Controller');
/**
 * Parentescos Controller
 *
 * @property Parentesco $Parentesco
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ParentescosController extends AppController {

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
		$this->Parentesco->recursive = 0;
		$this->set('parentescos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Parentesco->exists($id)) {
			throw new NotFoundException(__('Invalid parentesco'));
		}
		$options = array('conditions' => array('Parentesco.' . $this->Parentesco->primaryKey => $id));
		$this->set('parentesco', $this->Parentesco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Parentesco->create();
			if ($this->Parentesco->save($this->request->data)) {
				$this->Session->setFlash(__('The parentesco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parentesco could not be saved. Please, try again.'));
			}
		}
		$denunciantes = $this->Parentesco->Denunciante->find('list');
		$this->set(compact('denunciantes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Parentesco->exists($id)) {
			throw new NotFoundException(__('Invalid parentesco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parentesco->save($this->request->data)) {
				$this->Session->setFlash(__('The parentesco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parentesco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Parentesco.' . $this->Parentesco->primaryKey => $id));
			$this->request->data = $this->Parentesco->find('first', $options);
		}
		$denunciantes = $this->Parentesco->Denunciante->find('list');
		$this->set(compact('denunciantes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Parentesco->id = $id;
		if (!$this->Parentesco->exists()) {
			throw new NotFoundException(__('Invalid parentesco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Parentesco->delete()) {
			$this->Session->setFlash(__('The parentesco has been deleted.'));
		} else {
			$this->Session->setFlash(__('The parentesco could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrador_index method
 *
 * @return void
 */
	public function administrador_index() {
		$this->Parentesco->recursive = 0;
		$this->set('parentescos', $this->Paginator->paginate());
	}

/**
 * administrador_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_view($id = null) {
		if (!$this->Parentesco->exists($id)) {
			throw new NotFoundException(__('Invalid parentesco'));
		}
		$options = array('conditions' => array('Parentesco.' . $this->Parentesco->primaryKey => $id));
		$this->set('parentesco', $this->Parentesco->find('first', $options));
	}

/**
 * administrador_add method
 *
 * @return void
 */
	public function administrador_add() {
		if ($this->request->is('post')) {
			$this->Parentesco->create();
			if ($this->Parentesco->save($this->request->data)) {
				$this->Session->setFlash(__('The parentesco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parentesco could not be saved. Please, try again.'));
			}
		}
		$denunciantes = $this->Parentesco->Denunciante->find('list');
		$this->set(compact('denunciantes'));
	}

/**
 * administrador_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_edit($id = null) {
		if (!$this->Parentesco->exists($id)) {
			throw new NotFoundException(__('Invalid parentesco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Parentesco->save($this->request->data)) {
				$this->Session->setFlash(__('The parentesco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The parentesco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Parentesco.' . $this->Parentesco->primaryKey => $id));
			$this->request->data = $this->Parentesco->find('first', $options);
		}
		$denunciantes = $this->Parentesco->Denunciante->find('list');
		$this->set(compact('denunciantes'));
	}

/**
 * administrador_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_delete($id = null) {
		$this->Parentesco->id = $id;
		if (!$this->Parentesco->exists()) {
			throw new NotFoundException(__('Invalid parentesco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Parentesco->delete()) {
			$this->Session->setFlash(__('The parentesco has been deleted.'));
		} else {
			$this->Session->setFlash(__('The parentesco could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
