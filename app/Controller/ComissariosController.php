<?php
App::uses('AppController', 'Controller');
/**
 * Comissarios Controller
 *
 * @property Comissario $Comissario
 */
class ComissariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comissario->recursive = 0;
		$this->set('comissarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comissario->id = $id;
		if (!$this->Comissario->exists()) {
			throw new NotFoundException(__('Invalid comissario'));
		}
		$this->set('comissario', $this->Comissario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comissario->create();
			if ($this->Comissario->save($this->request->data)) {
				$this->Session->setFlash(__('The comissario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comissario could not be saved. Please, try again.'));
			}
		}
		$eventos = $this->Comissario->Evento->find('list');
		$usuarios = $this->Comissario->Usuario->find('list');
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
		$this->Comissario->id = $id;
		if (!$this->Comissario->exists()) {
			throw new NotFoundException(__('Invalid comissario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comissario->save($this->request->data)) {
				$this->Session->setFlash(__('The comissario has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comissario could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Comissario->read(null, $id);
		}
		$eventos = $this->Comissario->Evento->find('list');
		$usuarios = $this->Comissario->Usuario->find('list');
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
		$this->Comissario->id = $id;
		if (!$this->Comissario->exists()) {
			throw new NotFoundException(__('Invalid comissario'));
		}
		if ($this->Comissario->delete()) {
			$this->Session->setFlash(__('Comissario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comissario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
