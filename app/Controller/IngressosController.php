<?php
App::uses('AppController', 'Controller');
/**
 * Ingressos Controller
 *
 * @property Ingresso $Ingresso
 */
class IngressosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ingresso->recursive = 0;
		$this->set('ingressos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Ingresso->id = $id;
		if (!$this->Ingresso->exists()) {
			throw new NotFoundException(__('Invalid ingresso'));
		}
		$this->set('ingresso', $this->Ingresso->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ingresso->create();
			if ($this->Ingresso->save($this->request->data)) {
				$this->Session->setFlash(__('The ingresso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingresso could not be saved. Please, try again.'));
			}
		}
		$eventos = $this->Ingresso->Evento->find('list');
		$usuarios = $this->Ingresso->Usuario->find('list');
		$this->set(compact('eventos', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Ingresso->id = $id;
		if (!$this->Ingresso->exists()) {
			throw new NotFoundException(__('Invalid ingresso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ingresso->save($this->request->data)) {
				$this->Session->setFlash(__('The ingresso has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ingresso could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Ingresso->read(null, $id);
		}
		$eventos = $this->Ingresso->Evento->find('list');
		$usuarios = $this->Ingresso->Usuario->find('list');
		$this->set(compact('eventos', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Ingresso->id = $id;
		if (!$this->Ingresso->exists()) {
			throw new NotFoundException(__('Invalid ingresso'));
		}
		if ($this->Ingresso->delete()) {
			$this->Session->setFlash(__('Ingresso deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ingresso was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
