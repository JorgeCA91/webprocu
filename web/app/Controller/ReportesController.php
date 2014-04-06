<?php
App::uses('AppController', 'Controller');
/**
 * Reportes Controller
 *
 * @property Reporte $Reporte
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ReportesController extends AppController {

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
		$this->Reporte->recursive = 0;
		$this->set('reportes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reporte->exists($id)) {
			throw new NotFoundException(__('Invalid reporte'));
		}
		$options = array('conditions' => array('Reporte.' . $this->Reporte->primaryKey => $id));
		$this->set('reporte', $this->Reporte->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reporte->create();
			if ($this->Reporte->save($this->request->data)) {
				$this->Session->setFlash(__('The reporte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reporte could not be saved. Please, try again.'));
			}
		}
		$admins = $this->Reporte->Admin->find('list');
		$denunciantes = $this->Reporte->Denunciante->find('list');
		$extraviados = $this->Reporte->Extraviado->find('list');
		$this->set(compact('admins', 'denunciantes', 'extraviados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reporte->exists($id)) {
			throw new NotFoundException(__('Invalid reporte'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reporte->save($this->request->data)) {
				$this->Session->setFlash(__('The reporte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reporte could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reporte.' . $this->Reporte->primaryKey => $id));
			$this->request->data = $this->Reporte->find('first', $options);
		}
		$admins = $this->Reporte->Admin->find('list');
		$denunciantes = $this->Reporte->Denunciante->find('list');
		$extraviados = $this->Reporte->Extraviado->find('list');
		$this->set(compact('admins', 'denunciantes', 'extraviados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Reporte->id = $id;
		if (!$this->Reporte->exists()) {
			throw new NotFoundException(__('Invalid reporte'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reporte->delete()) {
			$this->Session->setFlash(__('The reporte has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reporte could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * administrador_index method
 *
 * @return void
 */
	public function administrador_index() {
		$this->Reporte->recursive = 0;
		$this->set('reportes', $this->Paginator->paginate());
	}

/**
 * administrador_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_view($id = null) {
		if (!$this->Reporte->exists($id)) {
			throw new NotFoundException(__('Invalid reporte'));
		}
		$options = array('conditions' => array('Reporte.' . $this->Reporte->primaryKey => $id));
		$this->set('reporte', $this->Reporte->find('first', $options));
	}

/**
 * administrador_add method
 *
 * @return void
 */
	public function administrador_add() {
		if ($this->request->is('post')) {
			$this->Reporte->create();
			if ($this->Reporte->save($this->request->data)) {
				$this->Session->setFlash(__('The reporte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reporte could not be saved. Please, try again.'));
			}
		}
		$admins = $this->Reporte->Admin->find('list');
		$denunciantes = $this->Reporte->Denunciante->find('list');
		$extraviados = $this->Reporte->Extraviado->find('list');
		$this->set(compact('admins', 'denunciantes', 'extraviados'));
	}

/**
 * administrador_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_edit($id = null) {
		if (!$this->Reporte->exists($id)) {
			throw new NotFoundException(__('Invalid reporte'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reporte->save($this->request->data)) {
				$this->Session->setFlash(__('The reporte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reporte could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reporte.' . $this->Reporte->primaryKey => $id));
			$this->request->data = $this->Reporte->find('first', $options);
		}
		$admins = $this->Reporte->Admin->find('list');
		$denunciantes = $this->Reporte->Denunciante->find('list');
		$extraviados = $this->Reporte->Extraviado->find('list');
		$this->set(compact('admins', 'denunciantes', 'extraviados'));
	}

/**
 * administrador_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function administrador_delete($id = null) {
		$this->Reporte->id = $id;
		if (!$this->Reporte->exists()) {
			throw new NotFoundException(__('Invalid reporte'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reporte->delete()) {
			$this->Session->setFlash(__('The reporte has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reporte could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
