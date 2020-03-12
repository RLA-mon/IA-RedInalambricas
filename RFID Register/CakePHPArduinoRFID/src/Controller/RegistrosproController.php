<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Registrospro Controller
 *
 * @property \App\Model\Table\RegistrosproTable $Registrospro
 *
 * @method \App\Model\Entity\Registrospro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistrosproController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $registrospro = $this->paginate($this->Registrospro);

        $this->set(compact('registrospro'));
    }

    /**
     * View method
     *
     * @param string|null $id Registrospro id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registrospro = $this->Registrospro->get($id, [
            'contain' => [],
        ]);

        $this->set('registrospro', $registrospro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registrospro = $this->Registrospro->newEntity();
        if ($this->request->is('post')) {
            $registrospro = $this->Registrospro->patchEntity($registrospro, $this->request->getData());
            if ($this->Registrospro->save($registrospro)) {
                $this->Flash->success(__('The registrospro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registrospro could not be saved. Please, try again.'));
        }
        $this->set(compact('registrospro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Registrospro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registrospro = $this->Registrospro->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registrospro = $this->Registrospro->patchEntity($registrospro, $this->request->getData());
            if ($this->Registrospro->save($registrospro)) {
                $this->Flash->success(__('The registrospro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registrospro could not be saved. Please, try again.'));
        }
        $this->set(compact('registrospro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Registrospro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registrospro = $this->Registrospro->get($id);
        if ($this->Registrospro->delete($registrospro)) {
            $this->Flash->success(__('The registrospro has been deleted.'));
        } else {
            $this->Flash->error(__('The registrospro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
