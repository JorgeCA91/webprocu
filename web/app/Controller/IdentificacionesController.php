<?php
App::uses('AppController', 'Controller');
/**
 * Identificaciones Controller
 *
 * @property Identificacion $Identificacion
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IdentificacionesController extends AppController {

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
		$this->Identificacion->recursive = 0;
		$this->set('identificaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Identificacion->exists($id)) {
			throw new NotFoundException(__('Invalid identificacion'));
		}
		$options = array('conditions' => array('Identificacion.' . $this->Identificacion->primaryKey => $id));
		$this->set('identificacion', $this->Identificacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Identificacion->create();
			if ($this->Identificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The identificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The identificacion could not be saved. Please, try again.'));
			}
		}
		$denunciantes = $this->Identificacion->Denunciante->find('list');
		$extraviados = $this->Identificacion->Extraviado->find('list');
		$this->set(compact('denunciantes', 'extraviados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Identificacion->exists($id)) {
			throw new NotFoundException(__('Invalid identificacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Identificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The identificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The identificacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Identificacion.' . $this->Identificacion->primaryKey => $id));
			$this->request->data = $this->Identificacion->find('first', $options);
		}
		$denunciantes = $this->Identificacion->Denunciante->find('list');
		$extraviados = $this->Identificacion->Extraviado->find('list');
		$this->set(compact('denunciantes', 'extraviados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Identificacion->id = $id;
		if (!$this->Identificacion->exists()) {
			throw new NotFoundException(__('Invalid identificacion'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Identificacion->delete()) {
			$this->Session->setFlash(__('The identificacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The identificacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
