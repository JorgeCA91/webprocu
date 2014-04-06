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
		$this->Reporte->recursive = 4;
		
		if ($this->request->is('post')) {
			$this->Reporte->create();
			$this->Reporte->Extraviado->Usuario->create();
			$this->Reporte->Extraviado->create();
			$userExtra = array(
						'nombre' => $this->request->data['Extraviado']['nombre'],
						'apellido_paterno' => $this->request->data['Extraviado']['apellido_paterno'],
						'apellido_materno' => $this->request->data['Extraviado']['apellido_materno']
					);
			if ($this->Reporte->Extraviado->Usuario->save($userExtra)) {
				$this->request->data['Extraviado']['usuario_id'] = $this->Reporte->Extraviado->Usuario->id;
				if ($this->Reporte->Extraviado->save($this->request->data['Extraviado'])) {
					$this->Session->setFlash(__('The Denunciante has been saved.'));
				}		
			}
			
			$this->Reporte->Denunciante->Usuario->create();
			$this->Reporte->Denunciante->create();
			$userDenun = array(
							'nombre' => $this->request->data['Denunciante']['nombre'],
							'apellido_paterno' => $this->request->data['Denunciante']['apellido_paterno'],
							'apellido_materno' => $this->request->data['Denunciante']['apellido_materno']
						);
			if($this->Reporte->Denunciante->Usuario->save($userDenun)) {
				$this->request->data['Denunciante']['usuario_id'] = $this->Reporte->Denunciante->Usuario->id;
				if ($this->Reporte->Denunciante->save($this->request->data['Denunciante']) ) {
					if ($this->Reporte->Denunciante->Parentesco->save($this->request->data['Parentesco'])) {
							$this->Session->setFlash(__('The Denunciante has been saved.'));
					}
				}
			}
				
			if ($this->Reporte->save($this->request->data['Reporte'])) {
				return $this->redirect(array('controller' =>'extraviados','action' => 'view',1));
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
